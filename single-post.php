<?php get_header(); ?>
  <div class="container-fluid" id="app_post">
    <div class="row" id="p_1st">
      <div class="col col-lg-6 col-md-7 col-12 txt-col">
        <h1>{{posts.title.rendered}}</h1>
        <div class="side-text" v-html="posts.excerpt.rendered"></div>
      </div>
      <div class="col col-lg-5 col-md-4 col-12 offset-md-1 img-col">
        <img v-bind:src="posts.images.large">
      </div>
    </div>
    <div class="row" id="p_2nd">
      <div class="col col-12 txt-col">
        <div v-html="posts.content.rendered"></div>
      </div>
    </div>
    <div class="row" id="blog">
      <div class="col col-12" id="title">
        <h3>Mais Posts</h3>
      </div>
      <div v-for="x in newposts" class="col col-lg-4 col-md-6 col-12">
        <a v-bind:href="x.link">
          <img v-bind:src="x.images.large" alt="" id="post1_img">
          <h4>{{x.title.rendered}}</h4>
          <div v-html="x.excerpt.rendered"></div>
        </a>
      </div>
    </div>
  </div>
  <script>
    var app_post = new Vue({
      el:'#app_post',
      data: {
        url: 'http://localhost/wordpress',
        posts: [],
        newposts: [],
        post_id: '<?php global $post; echo $post->ID; ?>'
      },
      methods:{
        loadPosts(){
          fetch(this.url + '/wp-json/wp/v2/posts/' + this.post_id)
            .then(r => r.json())
            .then(r => {
            this.posts = r;
            console.log(this.posts);
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
        this.loadPosts();
        this.InfoPosts();
      }
    });
  </script>
<?php get_footer(); ?>