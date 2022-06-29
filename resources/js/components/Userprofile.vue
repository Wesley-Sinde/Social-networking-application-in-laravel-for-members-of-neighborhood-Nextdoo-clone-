<template class=" w-full">
  <div class=" w-full">
    <a v-bind:href="'/profiles/' + users.id" target="_blank" rel="noopener noreferrer" class=" w-full">
      <span class="py-3 text-gray-900 sm:py-4 dark:text-white">
        <div class="flex items-center space-x-2">
          <div class="flex-shrink-0 w-8 h-8 rounded-full relative">
            <img v-if="users.avatar !== null" class="w-8 h-8 rounded-full"
              v-bind:src="'/images/user/' + users.avatar" />

            <!-- <img v-else class="w-8 h-8 rounded-full" src="/images/user/noimage.png" v-bind:alt="users.name" /> -->
            <div v-else class="relative w-8 h-8 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
              <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                </path>
              </svg>
            </div>
            <span v-if="online === 'Online'"
              class="top-1 left-6 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>

          </div>
          <div class="min-w-0 mx-2">
            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-400">
              {{ users.name }}
            </p>
          </div>
          <div v-if="users.verified_account == 1"
            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
            <img class="w-6 h-6 rounded-full" src="/images/user/verified.png" alt="verified account" />
          </div>
          &emsp; &emsp;
          <span v-if="online !== 'Online'">
            <span v-if="online !== null" class="text-green-500 text-xs">{{ online }} </span>
          </span>
        </div>
      </span>
    </a>
  </div>
</template>

<script>
export default {
  props: ['userid', 'online'],
  data() {
    return {
      users: [],
      //Online: this.Online
    }
  },
  mounted() {
    axios
      .get('/userdata/' + this.userid)
      .then(response => (this.users = response.data));
    // alert(this.Online);
    // console.log(this.user);
    // console.log(this.name);
    // console.log(this.Online);

  },

  // methods: {

  //   read() {
  //     axios.get('/userdata/1').then(({ data }) => {
  //       //console.log(data)
  //       this.users = data;

  //     })
  //       .catch((err) => console.error(err));
  //   },
  // },
}
</script>




