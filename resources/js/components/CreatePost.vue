<template>
  <div>


    <div class="relative w-full h-full max-w-md p-4 ">
      <div class="relative bg-gray-400 rounded-lg shadow dark:bg-gray-700">
        <button type="button"
          class="absolute top-3 right-2 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
          data-modal-toggle="createpost-modal">
          <svg class="w-5 h-5" fill="red" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <div class="px-6 py-6 lg:px-8">
          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create a post</h3>
          <form @submit.prevent="addPost" method="POST" enctype="multipart/form-data">
            <!-- @csrf -->
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="default_size">Upload
              Thumbnail</label>
            <input class="pb-3" type="file" accept="image/*" onchange="loadFile(event)" v-on:change="post.image">
            <img id="output" class="w-2xl h-36" />



            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="title">Title Of your
                Post
              </label>
              <input type="text" id="title" name="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                v-model="post.title">
            </div>

            <label class="block mt-2 mb-1 text-sm font-medium text-gray-900 dark:text-gray-300"
              for="default_size">Description</label>
            <div class="description">
              <textarea id="description" placeholder="Description..." name="description" v-model="post.description"
                class="block w-full py-2 text-xl text-gray-500 border-b-2 outline-none h-60 bg-slate-400 dark:bg-slate-600 dark:text-gray-600 "></textarea>
            </div>

            <div class="flex items-start mt-2 mb-6">
              <div class="flex items-center h-5">
                <input id="remember" type="checkbox" name="acceptTerms" value=""
                  class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 required"
                  v-model="post.acceptTerms">
              </div>
              <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                I agree with
                the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">
                  terms
                  and conditions
                </a>.
              </label>
            </div>
            <div class="items-center ">
              <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                Submit
              </button>

            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      post: {}
    }
  },
  methods: {
    addPost() {
      let path = window.location.href;
      this.axios
        .post(path, this.post)
        .then(response => (
          this.$router.push({ name: 'home' })
        ))
        .catch(err => console.log(err))
        .finally(() => this.loading = false)
    }
  }
}
</script>