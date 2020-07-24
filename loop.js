var app_index = new Vue({
  el:'#app_index',
  data: {
    url: 'http://localhost/wordpress',
    newposts: [],
  },
  methods:{
    InfoPosts(){
      fetch(this.url + '/wp-json/wp/v2/posts')
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
/*
1. As 3 páginas das categorias já estão prontas
2. Tirar os '_desativado' dos slugs e tornar as páginas públicas
3. As páginas privadas já estão com os links atualizados - Eu utilizei os slugs parceiros, noticias, imprensa e covid
4. Trocar os links do header e do footer
5. A pagina de artigos pode ser transformada na da categoria parceiros, trocando o nome e o slug
7. As ids das categorias são 7 (parceiros), 10 (noticias), 9 (imprensa) e 8 (covid)
8. As ids das páginas são 794 (parceiros - atual 'artigos'), 981 (noticias), 984 (imprensa), 985 (covid)
*/