<template>
  <div>
    <div v-for="product in Products" :key="product.id">
      {{ product.name }}
    </div>
    <!-- <infinite-loading @distance="1" @infinite="handleLoadMore"></infinite-loading> -->
    <infinite-loading spinner="bubbles" @infinite="handleLoadMore">
      <div class="text-red" slot="no-more">No more users</div>
      <div class="text-red" slot="no-results">No more users</div>
    </infinite-loading>
  </div>
</template>
<script>
export default {
  data() {
    return {
      Products: [],
      page: 1,
    };
  },
  methods: {
    handleLoadMore($state) {
      this.$http.get('http://127.0.0.1:8000/products?page=' + this.page)
        .then(res => {
          return res.json();
        }).then(res => {
          $.each(res.data, (key, value) => {
            this.Products.push(value);
          });
          $state.loaded();
        });
      this.page = this.page + 1;
    },
  },
}
</script>