// Namespaces, as described on http://hengrui-li.blogspot.fr/2011/05/javascript-namespace.html for instance
var RadioNeo = RadioNeo || {};

RadioNeo.ns = function (nsName) {
    var parts = nsName.split('.'),
        parent = RadioNeo,
        i;

    // strip redundant leading global
    if (parts[0] === "RadioNeo") {
        parts = parts.slice(1);
    }
    for (i = 0; i < parts.length; i += 1) {
        // create a property if it doesn't exist
        if (typeof parent[parts[i]] === "undefined") {
            parent[parts[i]] = {};
        }

        parent = parent[parts[i]];
    }

    return parent;
};
