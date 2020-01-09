define([
    'uiElement',
    'underscore',
    'ko'
    ], function (Component, _, ko) {
        'use strict';

        return Component.extend({
            koTimer: ko.observable(0),
            initialize: function() {
                self = this;
                this._super();
                this.incrementTime();
            },
            getItems: function () {
                return _.toArray(this.items);
            },
            incrementTime: function () {
                let t = 0;
                setInterval(function() {
                    if (t <= 9) {
                     t++;
                    }
                    self.koTimer(t);
                    }, 1000);
            }
        });
    });