/**
 * Adds a module to the humhub.modules namespace.
 *
 * The module id can be provided either as
 *
 * - full namespace humhub.modules.ui.modal
 * - or modules.ui.modal
 * - or short ui.modal
 *
 * Usage:
 *
 * ```
 * humhub.module('ui.modal', function(module, require, $) {...});
 * ```
 *
 * This would create an empty ui namespace (if not already created before) register the given module `ui.modal`.
 *
 * The module can export functions and properties by using:
 *
 * ```
 * module.myFunction = function() {...}
 *
 * or
 *
 * module.export({
 *  myFunction: function() {...}
 * });
 * ```
 *
 * The export function can be called as often as needed (but should be called once at the end of the module).
 * Its also possible to export single classes e.g.:
 *
 * ```
 * humhub.module('my.LoaderWidget', function(module, require, $) {
 *    var LoaderWidget = function() {...}
 *
 *    module.export = LoaderWidget;
 * });
 * ```
 *
 * A module can provide an `init` function, which by default is only called after the first initialization
 * e.g. after a full page load when the document is ready or when loaded by means of ajax.
 * In case a modules `init` function need to be called also after each `pjax` request, the modules `initOnPjaxLoad` has to be
 * set to `true`:
 *
 * ```
 * module.initOnPjaxLoad = true;
 * ```
 *
 * ## Dependencies
 *
 * The core modules are initialized in a specific order to provide the required dependencies for each module.
 * The order is given by the order of module calls and in case of core modules configured in the API's AssetBundle.
 *
 * A module can be received by using the required function within a module function.
 * You can either depend on a module at initialization time or within your functions or use the lazy flag of the require function.
 *
 * Usage:
 *
 * ```
 * var modal = require('ui.modal');
 *
 * or lazy require
 *
 * var modal = require('ui.modal', true);
 * ````
 * @function module:humhub.module
 * @access public
 * @param {string} id the namespaced id
 * @param {(instance: Module, require: Require, jq: JQuery) => void} moduleFunction
 * @returns {undefined}
 */

/**
 * @typedef Module
 * @property {Require} require
 * @property {boolean} initOnPjaxLoad
 * @property {boolean} isModule
 * @property {string} id
 * @property {object} config
 * @property {(key: string) => string} text
 * @property {(exports: object) => void} export
 */

/**
 * @callback Require
 * @param {string} moduleId
 * @param {boolean} lazy
 * @returns ?Module
 */

