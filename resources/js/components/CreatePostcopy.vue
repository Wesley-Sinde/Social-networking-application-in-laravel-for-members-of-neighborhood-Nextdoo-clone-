<template>
  <div>
    <h3 class="text-center">Create Product</h3>
    <div class="row">
      <div class="col-md-6">
        <form @submit.prevent="addPost">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" v-model="product.name">
          </div>
          <div class="form-group">
            <label>Detail</label>
            <input type="text" class="form-control" v-model="product.detail">
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>
</template>
 
<script>
export default {
  data() {
    return {
      product: {}
    }
  },
  methods: {
    addPost() {
      this.axios
        .post('http://localhost:8000/api/products', this.product)
        .then(response => (
          this.$router.push({ name: 'home' })
        ))
        .catch(err => console.log(err))
        .finally(() => this.loading = false)
    }
  }
}
</script>