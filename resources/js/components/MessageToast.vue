<template>

  <span
    class="top-1 left-6 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full">2
  </span>

</template>

<script>
export default {
  props: ['userid'],
  data() {
    return {
      usersmessages: [],
      //Online: this.Online
    }
  },
  mounted() {
    axios
      .get('/usermessages/' + this.userid)
      .then(response => (this.usersmessages = response.data));

  },
}
</script>




