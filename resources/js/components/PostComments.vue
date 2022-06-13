<template>
  <div :key="componentKey">
    <div class="flex justify-between mt-3">
      <div></div>
      <label v-bind:for="'toggle-' + togleid" class="relative inline-flex object-right cursor-pointer right-1 w-fit">
        <input @click="show = !show" type="checkbox" value="" v-bind:id="'toggle-' + togleid" class="sr-only peer">
        <div
          class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
        </div>
        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
          Show Comments <br>
        </span>
      </label>

    </div>
    <div v-if="show">

      <div>
        <form v-on:submit.prevent="submitForm">
          <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
              <label for="comment" class="sr-only">Your comment</label>
              <textarea id="comment" rows="4"
                class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                placeholder="Write a comment..." required="" v-model="form.comment"></textarea>
            </div>
            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
              <button type="submit" class="
              inline-flex
              items-center
              py-2.5
              px-4
              text-xs
              font-medium
              text-center text-white
              bg-blue-700
              rounded-lg
              focus:ring-4 focus:ring-blue-200
              dark:focus:ring-blue-900
              hover:bg-blue-800
            ">
                Post comment
              </button>
              <div class="flex pl-0 space-x-1 sm:pl-2">
                <button type="button"
                  class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
                <button type="button"
                  class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
                <button type="button"
                  class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </form>
        <p class="ml-auto text-xs text-gray-500 dark:text-gray-400">
          Remember, contributions to this post should follow our
          <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">
            Community Guidelines </a>.
        </p>
      </div>
      <!-- <createomments-component :postid="postidtosend" :user_id="user_id" /> -->
      <div v-for="PostComment in PostComments" :key="PostComment.id" class="">
        <a href="#"
          class="flex flex-col items-center mx-auto my-2 bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
          <div class="flex flex-col justify-between p-4 leading-normal">
            <!-- <div
              class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
            </div> -->
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
  props: ['postid', 'user_id'],
  // mounted() {
  //   // Do something useful with the data in the template
  //   console.dir(this.postid)
  // },
  data() {
    return {
      componentKey: 0,
      PostComments: [],
      page: 1,
      postidtosend: this.postid,
      // user_id: this.user_id,
      show: false,
      form: {
        comment: "",
        post_id: this.postid,
        user_id: this.user_id,
      },
    };
  },
  computed: {
    togleid: function () {
      return Math.random().toString(36).slice(2)
    }
  },
  methods: {
    isToday(date) {
      return moment(date).startOf('minutes').fromNow();
    },
    handleLoadMore($state) {
      this.$http.get('/PostComments/' + this.postid + '?page=' + this.page)
        .then(res => {
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
    updatedata() {
      this.$http.get('/lastComments/' + this.postid)
        .then(res => {
          return res.json();
        }).then(res => {
          $.each(res.data, (key, value) => {
            this.PostComments.push(value);
            console.log(res.data)
          });
        });
      // this.$toastr.s("SUCCESS MESSAGE", "Success Toast Title");
    },
    submitForm() {
      axios
        .post("/comment", this.form)
        .then((res) => {
          //Perform Success Action
          // this.$toastr.s(res.data.status, "Messaage Response");
          this.$toastr.s(res.data.message, "Messaage Response");
          this.updatedata();
        })
        .catch((error) => {
          this.$toastr.s(error.response.data.message, "Messaage Response");
          // error.response.status Check status code
        })
        .finally(() => {
          this.componentKey += 1;
          //Perform action in always
        });
    },
  },
}
</script>