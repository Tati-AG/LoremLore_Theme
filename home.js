var app_home = new Vue({
  el:'#app_home',
  data: {
    url: 'http://localhost/wordpress',
    newposts: [],
  },
  methods:{
    InfoPosts(){
      fetch(this.url + '/wp-json/wp/v2/posts?per_page=6')
        .then(r => r.json())
        .then(r => {
        this.newposts = r;
      });
    }
  },
  created: function(){
    this.InfoPosts();
  }
});
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();