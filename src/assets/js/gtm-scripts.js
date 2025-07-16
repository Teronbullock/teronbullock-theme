// Homepage need dev BTN tracker
function HomepageNeedDevClick() {
  gtag('event', 'click', {
    event_category: 'button',
    event_label: 'HomePage: I Need A Site Button',
    value: 1,
  });
}

// Homepage need site BTN tracker
function HomepageNeedSiteClick() {
  gtag('event', 'click', {
    event_category: 'button',
    event_label: 'HomePage: I Need A Dev Button',
    value: 1,
  });
}

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-ga-label]').forEach(el => {
    if (!el.dataset.gaTracked) {
      el.addEventListener('click', () => {
        gtag('event', 'click', {
          event_category: el.dataset.gaCategory || 'button',
          event_label: el.dataset.gaLabel || 'unknown',
          value: 1,
        });
      });
      el.dataset.gaTracked = true; // prevent duplicate listeners
    }
  });
});
