
<template>
  <ul class="">
    <li class="flex flex-col mt-5" v-for="message in messages" :key="message.id">
      <div v-if="message.user_id == user_id">
        <div class="flex justify-end mb-4 mr-7 text-yellow-500">
          <strong>
            {{ message.user.name }}
          </strong>
        </div>

        <div class="flex justify-end mb-4">
          <div class="text-white mr-2 py-3 px-4 rounded-xl bg-blue-400 dark:bg-blue-900">
            {{ message.message }}
          </div>
          <img src="https://source.unsplash.com/vpOeXr5wmR4/600x600" class="object-cover h-8 w-8 rounded-full" alt="" />
        </div>


        <!-- <div class="">
          <div class="header">
            <strong>
              {{ message.user.name }}
            </strong>
          </div>
          <p>
            {{ message.message }}
          </p>
        </div> -->
      </div>

      <div v-else>
        <div class="flex justify-start mb-4">
          <strong>
            {{ message.user.name }}
          </strong>
        </div>
        <div class="flex justify-start mb-4">
          <img src="https://source.unsplash.com/vpOeXr5wmR4/600x600" class="object-cover h-8 w-8 rounded-full" alt="" />
          <div class="ml-2 py-3 px-4 bg-gray-400 dark:bg-gray-600 rounded-xl text-white">
            <p>
              {{ message.message }}
            </p>
          </div>
        </div>


        <!-- <div class="clearfix">
          <div class="header">
            <strong>
              {{ message.user.name }}
            </strong>
          </div>
          <p>
            {{ message.message }}
          </p>
        </div> -->
      </div>
    </li>
  </ul>
</template>

<script>

export default {
  props: ["messages", 'user_id1'],
  data() {
    return {
      user_id: this.$userId
    }
  },
  mounted() {
    console.log(this.$userId)
  }
};
</script>
