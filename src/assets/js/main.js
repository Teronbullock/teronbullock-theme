document.addEventListener('DOMContentLoaded', function() {

  const projectNavBtnAll = document.querySelector('#project-nav--all');
  const projectNavBtnWP = document.querySelector('#project-nav--wp');
  const projectNavBtnJS = document.querySelector('#project-nav--js');
  const body = document.querySelector('body'); 
  const bodyClasses = body.classList;


  if ( bodyClasses.contains( 'tax-project_category' ) && bodyClasses.contains( 'term-javascript' ) ) {
    projectNavBtnJS.classList.add( 'active' );
  } else if (bodyClasses.contains( 'tax-project_category' ) && bodyClasses.contains( 'term-wordpress' ) ) {
    projectNavBtnWP.classList.add( 'active' );
  } else if ( bodyClasses.contains( 'post-type-archive-project' ) ) {
    projectNavBtnAll.classList.add( 'active' ); 
  }

});
