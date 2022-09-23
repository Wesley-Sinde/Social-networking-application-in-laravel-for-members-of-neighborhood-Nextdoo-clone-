<template>
  <div>
    <div v-for="criticalpostToshow in criticalpostData" :key="criticalpostToshow.id">
      <div class="flex">
        <a v-bind:href="'/home/' + criticalpostToshow.id"
          class="flex-1 hover:bg-blue-800 hover:rounded-lg hover:border mx-auto w-full">
          <userprofile-component :userid="criticalpostToshow.user_id" />
          <h2 class="px-4 ml-2 font-bold text-gray-900 dark:text-gray-50">
            {{ criticalpostToshow.title }}
          </h2>
          <div class="flex ">
            <p
              class="ml-2 text-xs dark:text-gray-400  text-blue-800 font-medium inline-flex items-center px-2.5 py-0.5 rounded">
              <svg class="w-4 h-4 mr-2 animate-bounce" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                <path fill-rule="evenodd"
                  d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                  clip-rule="evenodd"></path>
              </svg>
              {{ criticalpostToshow.view_count }}
            </p>
            <span
              class="text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:text-yellow-400">
              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                  clip-rule="evenodd"></path>
              </svg>
              {{ isToday(criticalpostToshow.created_at) }}
            </span>
          </div>

        </a>
      </div>
      <hr class="border-gray-600">
    </div>
  </div>
</template>

<script>

import moment from 'moment'
export default {
  data() {
    return {
      criticalpostData: [],
    }
  },
  mounted() {
    axios
      .get('/getcriticalpreview')
      .then(response => (this.criticalpostData = response.data));
    // alert(this.userid);

  },
  methods: {
    isToday(date) {
      return moment(date).startOf('minutes').fromNow();
    }
  },
}
</script>


