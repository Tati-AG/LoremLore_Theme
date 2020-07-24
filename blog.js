var app_blog = new Vue({
  el:'#app_blog',
  data: {
    url: 'http://localhost/wordpress',
    p_posts: [],
    n_posts: [],
    i_posts: [],
    c_posts: [],
    newposts: []
  },
  methods: {      
    ParPosts(){
      fetch(this.url + '/wp-json/wp/v2/posts?categories=7&per_page=1')
        .then(r => r.json())
        .then(r => {
        this.p_posts = r;
      });
    },
    NotPosts(){
      fetch(this.url + '/wp-json/wp/v2/posts?categories=10&per_page=1')
        .then(r => r.json())
        .then(r => {
        this.n_posts = r;
      });
    },
    ImpPosts(){
      fetch(this.url + '/wp-json/wp/v2/posts?categories=9&per_page=1')
        .then(r => r.json())
        .then(r => {
        this.i_posts = r;
      });
    },
    CovPosts(){
      fetch(this.url + '/wp-json/wp/v2/posts?categories=8&per_page=1')
        .then(r => r.json())
        .then(r => {
        this.c_posts = r;
      });
    },
    InfoPosts(){
      fetch(this.url + '/wp-json/wp/v2/posts?per_page=3')
        .then(r => r.json())
        .then(r => {
        this.newposts = r;
      });
    }
  },
  created: function(){
    this.InfoPosts();
    this.ParPosts();
    this.NotPosts();
    this.ImpPosts();
    this.CovPosts();
  }
});