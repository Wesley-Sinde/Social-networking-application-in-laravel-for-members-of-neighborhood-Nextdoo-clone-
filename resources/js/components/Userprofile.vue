<template>
  <div>
    <span class="py-3 sm:py-4 text-gray-900 dark:text-white">
      <div class="flex items-center space-x-4">
        <div class="flex-shrink-0">
          <img v-if="users.avatar !== null" class="w-8 h-8 rounded-full" v-bind:src="'/images/user/' + users.avatar" />

          <img v-else class="w-8 h-8 rounded-full" src="/images/user/noimage.png" v-bind:alt="users.name" />
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
            {{ users.name }}
          </p>
        </div>
        <div v-if="users.verified_account == 1"
          class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
          <img class="w-6 h-6 rounded-full" src="/images/user/verified.png" alt="verified account" />
        </div>
      </div>
    </span>

  </div>
</template>

<script>
export default {
  props: ['userid'],
  data() {
    return {
      users: [],
    }
  },
  mounted() {
    axios
      .get('/userdata/' + this.userid)
      .then(response => (this.users = response.data))
    // alert(this.userid);

  },

  methods: {

    read() {
      axios.get('/userdata/1').then(({ data }) => {
        //console.log(data)
        this.users = data;

      })
        .catch((err) => console.error(err));
    },
  },
}
</script>




