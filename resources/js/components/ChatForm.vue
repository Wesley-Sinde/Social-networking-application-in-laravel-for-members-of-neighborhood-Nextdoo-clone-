<template>
  <div class="sticky">
    <section class="w-auto mt-6 mb-3 border rounded-xl bg-gray-50 dark:bg-gray-800 ">
      <textarea class="w-full p-2 text-gray-800 rounded-xl dark:text-gray-50 dark:bg-gray-700"
        placeholder="Type your reply here..." rows="3" v-model="newMessage" name="message"></textarea>
      <div class="flex items-center justify-between p-2">
        <button class="w-6 h-6 text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
          </svg>
        </button>
        <button class="px-6 py-2 text-white bg-purple-600 rounded-xl" @click="sendMessage">Reply</button>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  props: ["user"],

  data() {
    return {
      newMessage: "",
    };
  },

  methods: {
    sendMessage() {
      this.$emit("messagesent", {
        user: this.user,
        message: this.newMessage,
      });

      this.newMessage = "";
    },
  },
};
</script>