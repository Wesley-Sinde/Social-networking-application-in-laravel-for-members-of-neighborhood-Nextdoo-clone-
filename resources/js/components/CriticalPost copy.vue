<template>
  <div>
    <!-- <div>
      here
      <ul v-if="posts && posts.length">
        <li v-for="post of posts">
          <p><strong>{{ post.title }}</strong></p>
          <p>{{ post.body }}</p>
        </li>
      </ul>

      <ul v-if="errors && errors.length">
        <li v-for="error of errors">
          {{ error.message }}
        </li>
      </ul>
    </div> -->


    <div class="flex flex-col justify-between mt-3">
      <!-- <div v-for="criticalpostToshowPreview in ctriticalpostPreview" :key="criticalpostToshowPreview.id">
        <div class="flex">
          <div class="flex-1 hover:bg-blue-800">
            --{{ criticalpostToshowPreview.id }}---
            <userprofile-component :userid="criticalpostToshowPreview.user_id" />
            <h2 class="px-4 ml-2 font-bold text-green-600 ">
              {{ criticalpostToshowPreview.title }}
            </h2>
            <div class="flex justify-between">
              <p class="px-4 mb-3 ml-2 text-xs dark:text-gray-400 "> {{ criticalpostToshowPreview.view_count }}</p>
              <span
                class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                    clip-rule="evenodd"></path>
                </svg>
                {{ isToday(criticalpostToshowPreview.created_at) }}
              </span>
            </div>

          </div>
        </div>
        <hr class="border-gray-600">
      </div> -->

      <!-- loop here -->
      <div></div>
      <label v-bind:for="'toggle-' + togleid" class="relative inline-flex object-right cursor-pointer right-1 w-fit">
        <input @click="show = !show" type="checkbox" value="" v-bind:id="'toggle-' + togleid" class="sr-only peer">
        <div
          class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
        </div>
        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
          Show more <br>
        </span>
      </label>

    </div>
    <div>
      <div v-for="criticalpostToshow in ctriticalpostPreview" :key="criticalpostToshow.id">
        <div class="flex">
          <div class="flex-1 hover:bg-blue-800">
            <userprofile-component :userid="criticalpostToshow.user_id" />
            <h2 class="px-4 ml-2 font-bold text-green-600 ">
              {{ criticalpostToshow.title }}
            </h2>
            <div class="flex justify-between">
              <p class="px-4 mb-3 ml-2 text-xs dark:text-gray-400 "> {{ criticalpostToshow.view_count }}</p>
              <span
                class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                    clip-rule="evenodd"></path>
                </svg>
                {{ isToday(criticalpostToshow.created_at) }}
              </span>
            </div>

          </div>
        </div>
        <hr class="border-gray-600">
      </div>
      <!-- <infinite-loading spinner="bubbles" @infinite="handleLoadMore">
        <template v-slot="{ state, error, auto, direction }">
          <template v-if="state === 'loading'">Loading...</template>
          <template v-else-if="state === 'empty'">Empty</template>
          <template v-else-if="state === 'end'">End</template>
          <template v-else-if="state === 'error'">Error: {{ error.message }}. Click to retry</template>
          <template v-else-if="state === 'standby' && auto !== 'in-advance'">
            {{ auto ? `Scroll ${direction} to load more` : 'Click to load more' }}
          </template>
        </template>
      </infinite-loading> -->

    </div>
  </div>
</template>
<script>

import moment from 'moment'
export default {
  data() {
    return {
      crticalpost: [],
      ctriticalpostPreview: [],
      page: 2,
      show: false,
      errors: [],
    };
  },
  computed: {
    togleid: function () {
      return Math.random().toString(36).slice(2)
    }
  },
  // mounted() {
  //   axios
  //     .get('/getcriticalpreview')
  //     .then(response => (this.ctriticalpostPreview = response.data));
  //   // alert(this.userid);

  // },
  created() {
    axios.get(`/getcriticalpreview`)
      .then(response => {
        // JSON responses are automatically parsed.
        this.ctriticalpostPreview = response.data
        // this.ctriticalpostPreview.push(response.data)
      })
      .catch(e => {
        this.errors.push(e)
      })
  },
  methods: {
    isToday(date) {
      return moment(date).startOf('minutes').fromNow();
    },
    // handleLoadMore($state) {
    //   if (this.show = true) {
    //     this.$http.get('/getcritical/' + '?page=' + this.page)
    //       .then(res => {
    //         return res.json();
    //       }).then(res => {
    //         $.each(res.data, (key, value) => {
    //           this.crticalpost.push(value);
    //         });
    //         $state.loaded();
    //       });
    //     this.page = this.page + 1;
    //     this.show = false;
    //   }
    // },
  },
}
</script>