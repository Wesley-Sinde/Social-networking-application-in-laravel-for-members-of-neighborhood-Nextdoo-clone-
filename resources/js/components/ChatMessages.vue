
<template>
  <ul class="">
    <li class="flex flex-col mt-5" v-for="message in messages" :key="message.id">
      <div v-if="message.user_id == user_id">
        <div class="flex justify-end mb-4 text-yellow-500 mr-7">
          <strong>
            {{ message.user.name }}
          </strong>
        </div>

        <div class="flex justify-end mb-4">
          <div class="px-4 py-3 mr-2 text-white bg-blue-400 rounded-xl dark:bg-blue-900">
            {{ message.message }}
          </div>
          <img src="https://source.unsplash.com/vpOeXr5wmR4/600x600" class="object-cover w-8 h-8 rounded-full" alt="" />
        </div>
      </div>

      <div v-else>
        <div class="flex justify-start mb-4">
          <strong>
            {{ message.user.name }}
          </strong>
        </div>
        <div class="flex justify-start mb-4">
          <img src="https://source.unsplash.com/vpOeXr5wmR4/600x600" class="object-cover w-8 h-8 rounded-full" alt="" />
          <div class="px-4 py-3 ml-2 text-white bg-gray-400 dark:bg-gray-600 rounded-xl">
            <p>
              {{ message.message }}
            </p>
          </div>
        </div>
      </div>
    </li>
    <hr ref="email" class="border-gray-600">
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
  },
  // methods: {

  // }
};
</script>
