<template>
  <div>

    <div v-for="PostComment in PostComments" :key="PostComment.id" class="">
      <a href="#"
        class="flex mx-auto my-2 flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="flex flex-col justify-between p-4 leading-normal">
          <div
            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
          </div>
          <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022-- <p>
              {{ isToday(PostComment.created_at) }}</p></time>

          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            Noteworthy technology
            acquisitions 2021</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ PostComment.Comment }}
          </p>
          <span
            class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                clip-rule="evenodd"></path>
            </svg>
            2 minutes ago
          </span>
        </div>
      </a>


    </div>
    <!-- <infinite-loading @distance="1" @infinite="handleLoadMore"></infinite-loading> -->
    <infinite-loading spinner="bubbles" @infinite="handleLoadMore">
      <div class="text-red" slot="no-more">No more users</div>
      <div class="text-red" slot="no-results">No more users</div>
    </infinite-loading>
  </div>
</template>
<script>

import moment from 'moment'
export default {
  data() {
    return {
      PostComments: [],
      page: 1,
    };
  },
  methods: {
    isToday(date) {
      return moment("20220505", "YYYYMMDD").fromNow();
      // return moment().format('MMMM Do YYYY, h:mm:ss a')
    },

    handleLoadMore($state) {
      this.$http.get('/PostComments?page=' + this.page)
        .then(res => {
          return res.json();
        }).then(res => {
          $.each(res.data, (key, value) => {
            this.PostComments.push(value);
          });
          $state.loaded();
        });
      this.page = this.page + 1;
    },
  },
}
</script>