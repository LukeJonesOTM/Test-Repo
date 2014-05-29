		$('#twitter').sharrre({
        template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><span></span></div></a>',

        className: 'social-btns',
        buttonClassName: 'mybutton',
  share: {
    twitter: true
  },
  url: 'http://www.paulund.co.uk/',
  buttons: { twitter: {via: '_JulienH'}},
              click: function(api, options){
                api.simulateClick();
                api.openPopup('twitter');
              }
});

$('#facebook').sharrre({
        template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><span></span></div></a>',

        className: 'social-btns',
        buttonClassName: 'mybutton',
  share: {
    facebook: true
  },
  url: 'http://www.paulund.co.uk/',
  buttons: { twitter: {via: '_JulienH'}},
              click: function(api, options){
                api.simulateClick();
                api.openPopup('facebook');
              }
});

$('#linkedin').sharrre({
        template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><span></span></div></a>',

        className: 'social-btns',
        buttonClassName: 'mybutton',
  share: {
    linkedin: true
  },
  url: 'http://www.paulund.co.uk/',
  buttons: { twitter: {via: '_JulienH'}},
              click: function(api, options){
                api.simulateClick();
                api.openPopup('linkedin');
              }
});

$('#googlePlus').sharrre({
        template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><span></span></div></a>',

        className: 'social-btns',
        buttonClassName: 'mybutton',
  share: {
    linkedin: true
  },
  url: 'http://www.paulund.co.uk/',
  buttons: { twitter: {via: '_JulienH'}},
              click: function(api, options){
                api.simulateClick();
                api.openPopup('googlePlus');
              }
});