module.exports = (function () {
    'use strict';

    var extend = function (target, source) {
        var keys = Object.keys(source);

        for (var i = 0, length = keys.length; i < length; i++) {
            var key = keys[i];

            target[key] = source[key];
        }
    };

    var namespace = function (path, obj) {
        var pathSlices = path.split('.'),
            parent = typeof global !== 'undefined' ? global : window,
            keys = Object.keys(obj);

        for (var i = 0, length1 = pathSlices.length; i < length1; i++) {
            var current = pathSlices[i];

            if (parent[current] === undefined) {
                parent[current] = {};
            }

            parent = parent[current];
        }

        if (obj !== undefined) {
            // might be replaced w/ $l.extend method
            extend(parent, obj);
        }

        return parent;
    };

    return namespace;

}).call(this);
