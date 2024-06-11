(function($) {
  $(function() {
    let postCard = $('.tb-post-card'); 


    class ProjectLoop {
      constructor(el) {
        this.el = el;
        this.init();

        console.log('ProjectLoop class initialized', el);
      }

      init() {
      }
    }



    $(postCard).each(function(){
      new ProjectLoop(this);
    });

  }); 
})(jQuery); 