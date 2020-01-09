<?php


namespace Syedzaidi\FrontUi\ViewModel;


use Magento\Cms\Api\PageRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class PageList implements ArgumentInterface
{
    /**
     * @var PageRepositoryInterface
     */
    private $pageRepository;
    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * PageList constructor.
     * @param PageRepositoryInterface $pageRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(
        PageRepositoryInterface $pageRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ){
        $this->pageRepository = $pageRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    public function getItemsJson()
    {
        $result = [];
        foreach ($this->getItems() as $page) {
            $result[$page->getIdentifier()] = [
                'title' => $page->getTitle(),
                'id' => $page->getId(),
                'url_key' => $page->getIdentifier()
            ];
        }
        return json_encode($result);
    }

    /**
     * @return \Magento\Cms\Api\Data\PageInterface[]
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getItems()
    {
        $search = $this->searchCriteriaBuilder->create();
        $pages = $this->pageRepository->getList($search);
        return $pages->getItems();
    }
}