define([
    'uiElement',
    'underscore'
    ], function (Component, _) {
        'use strict';

        return Component.extend({
            initialize: function() {
                this._super();
                console.log(_.toArray(this.items));
            },
            getItems: function () {
                return _.toArray(this.items);
            }
        });
    });