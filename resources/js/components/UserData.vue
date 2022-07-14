<template>
  <div
    class="relative flex flex-col w-full min-w-0 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
    <div class="px-0 mb-0 border-0 rounded-t">
      <div class="flex flex-wrap items-center px-4 py-2">
        <div class="relative flex-1 flex-grow w-full max-w-full">
          <h3 class="text-base font-semibold text-gray-900 dark:text-gray-50">Social Traffic</h3>
        </div>
        <div class="relative flex-1 flex-grow w-full max-w-full text-right">
          <button
            class="px-3 py-1 mb-1 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-blue-500 rounded outline-none dark:bg-gray-100 active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 focus:outline-none"
            type="button">Users Registred</button>
        </div>
      </div>
      <div class="block w-full overflow-x-auto">
        <table class="items-center w-full bg-transparent border-collapse">
          <thead>
            <tr>
              <th
                class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                Image</th>
              <th
                class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                Name</th>
              <th
                class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                Country</th>
              <th
                class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap min-w-140-px">
                Location
              </th>
              <th
                class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap min-w-140-px">
                Engagement
              </th>
              <th
                class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap min-w-140-px">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <!-- v-for="criticalpostToshow in ctriticalpostPreview" :key="criticalpostToshow.id" -->
            <tr v-for="user in users" :set="useqr = 1" :key="user.id"
              class="text-gray-700 border-b-2 dark:text-gray-100">
              <th class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                <img v-if="user.avatar !== null" class="w-8 h-8 rounded-full"
                  v-bind:src="'/images/user/' + user.avatar" />
                <div v-else class="relative w-8 h-8 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                  <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                      clip-rule="evenodd">
                    </path>
                  </svg>
                </div>
              </th>
              <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                {{ user.name }}<br>{{ useqr }}
              </td>
              <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                {{ user.country }}
              </td>
              <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                {{ user.location }}
              </td>
              <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                <div class="flex items-center">
                  <span class="mr-2">35%</span>
                  <div class="relative w-full">
                    <div class="flex h-2 overflow-hidden text-xs bg-blue-200 rounded">
                      <div style="width:55%"
                        class="flex flex-col justify-center text-center text-white bg-blue-600 shadow-none whitespace-nowrap">
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                <div class="flex p-2 rounded">
                  <label v-bind:for="'default-toggle-1' + user.id"
                    class="relative inline-flex items-center w-full cursor-pointer">
                    <input type="checkbox" value="" v-bind:id="'default-toggle-1' + user.id" class="sr-only peer">
                    <div
                      class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600">
                    </div>
                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enable/Disable</span>
                  </label>
                </div>



              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
   
<script>


import LaravelVuePagination from 'laravel-vue-pagination';


export default {

  mounted() {
    console.log('Component mounted.')
  },
  data() {
    return {
      users: [],
      useqr: 0,
    }
  },
  methods: {
    getUsers: function () {
      axios
        .get('/admin/usersdata/' + this.userid)
        .then(response => (this.users = response.data));

      // .get('admin/usersdata')
      // .then(function (response) {
      //   this.users = response.data;
      // });
    }
  },
  mounted() {
    axios
      .get('/admin/usersdata/')
      .then(response => (this.users = response.data.data));
  },
  // created: function () {
  //   this.getUsers()
  // },
  computed: {
    togleid: function () {
      return Math.random().toString(36).slice(2)
    }
  },
}
</script>