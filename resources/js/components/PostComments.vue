<template>
  <div>
    <!-- <button @click="show = !show">
      Click
    </button> -->
    <label for="default-toggle" class="relative inline-flex cursor-pointer right-1">
      <input @click="show = !show" type="checkbox" value="" id="default-toggle" class="sr-only peer">
      <div
        class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
      </div>
      <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
        Show Comments
      </span>
    </label>

    <div v-if="show">


      <div v-for="PostComment in PostComments" :key="PostComment.id" class="">
        <a href="#"
          class="flex flex-col items-center mx-auto my-2 bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
          <div class="flex flex-col justify-between p-4 leading-normal">
            <div
              class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
            </div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
              <!-- <p>
              {{ isToday(PostComment.created_at) }}
            </p> -->
              <span
                class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                    clip-rule="evenodd"></path>
                </svg>
                {{ isToday(PostComment.created_at) }}
              </span>
            </time>

            <userprofile-component :userid="PostComment.user_id" />

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              {{ PostComment.Comment }}
            </p>
          </div>
        </a>


      </div>
      <!-- <infinite-loading @distance="1" @infinite="handleLoadMore"></infinite-loading> -->
      <infinite-loading spinner="bubbles" @infinite="handleLoadMore">
        <!-- <div slot="error" slot-scope="{ trigger }">
        AnError Occured, click <a href="javascript:;" @click="trigger">here</a> to retry
      </div>
      <div class="text-red" slot="no-more">No more users</div>
      <div class="text-red" slot="no-results">No more users</div> -->


        <template v-slot="{ state, error, auto, direction }">
          <template v-if="state === 'loading'">Loading...</template>
          <template v-else-if="state === 'empty'">Empty</template>
          <template v-else-if="state === 'end'">End</template>
          <template v-else-if="state === 'error'">Error: {{ error.message }}. Click to retry</template>

          <template v-else-if="state === 'standby' && auto !== 'in-advance'">
            {{ auto ? `Scroll ${direction} to load more` : 'Click to load more' }}
          </template>
        </template>
      </infinite-loading>

    </div>
  </div>
</template>
<script>

import moment from 'moment'
export default {
  props: ['postid'],
  // mounted() {
  //   // Do something useful with the data in the template
  //   console.dir(this.postid)
  // },
  data() {
    return {
      PostComments: [],
      page: 1,
      postidtosend: this.postid,
      show: false,
    };
  },

  // function() {
  //   return {
  //     show: true
  //   };
  // },
  methods: {
    isToday(date) {
      return moment(date).startOf('minutes').fromNow();  //moment(date).endOf('day').fromNow();  //moment(date, "YYYYMMDD").fromNow();
      // return moment().format('MMMM Do YYYY, h:mm:ss a')
      moment().endOf('day').fromNow();
    },

    handleLoadMore($state) {
      this.$http.get('/PostComments/' + this.postid + '?page=' + this.page)
        .then(res => {
          // alert(postid1); + '&postid=' + this.postid
          return res.json();
        }).then(res => {
          $.each(res.data, (key, value) => {
            this.PostComments.push(value);
          });
          $state.loaded();
        });
      this.page = this.page + 1;
      // this.$toastr.s("SUCCESS MESSAGE", "Success Toast Title");
    },
  },
}
</script>