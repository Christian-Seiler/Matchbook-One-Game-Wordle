/**
 * @namespace humhub
 */
humhub.module('wordle', (module, require, $) => {

  let word = 'hallo'

  const init = () => {
  }

  /**
   * @param event
   * @returns void
   */
  const type = (event) => {
    console.log(event)
  }

  module.export({
    //uncomment the following line in order to call the init() function also for each pjax call
    //initOnPjaxLoad: true,
    init: init,
    type: type
  })
})
