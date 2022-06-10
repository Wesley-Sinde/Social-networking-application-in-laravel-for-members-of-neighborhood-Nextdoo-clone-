<template>
  <div>
    <div class="px-4 mt-3 rounded-lg  sm:float-left flex">
      <button @click="show_reaction_types = !show_reaction_types" class="left-0 hover:font-extrabold">
        <span class="hidden" v-if="auth_reaction">
          Dislike
          <!-- <img :src="image(auth_reaction)" class="w-25 animate-spin" />
          {{ auth_reaction }} -->
        </span>
        <span v-else>
          <button
            class="flex items-center justify-center flex-none rounded-md  w-auto h-9 text-blue-700  dark:text-blue-600 mx-3"
            type="button" aria-label="Like"> Like

            <!-- <img :src="image('like1')" class="w-25 " /> -->
          </button>
        </span>
      </button>

      <div @click="show_reaction_types = !show_reaction_types"
        class=" items-baseline justify-end pt-2 rounded-lg  sm:float-bottom flex">

        <div class="bottom-0 flex h-4 px-1 pb-0 mt-0 align-bottom cursor-pointer"
          v-for="(count, reaction) in reactions_summary" :key="reaction" v-show="count">
          <img style="width: auto" :src="image(reaction)" />
          <span class="px-1">{{ count }}</span>
        </div>
      </div>
    </div>

    <div class="position-relative">
      <div
        class=" w-fit flex flex-row flex-nowrap bg-gray-300 rounded-lg shadow-sm  position-absolute dark:bg-gray-700 p-3 left-3"
        style="bottom: 40px" v-show="show_reaction_types">
        <button @click="toggleRaction(type)" class="mx-2" v-for="type in types" :key="type">
          <img class="hover:bg-gray-400 dark:hover:bg-gray-500 hover:rounded-full" :src="image(type)" />
        </button>
      </div>

      <button @click="show_reaction_types = !show_reaction_types" class="hidden btn btn-link">
        <span class=" hidden" v-if="auth_reaction">
          Dislike
          <img :src="image(auth_reaction)" class="w-25 animate-spin" />
          {{ auth_reaction }}
        </span>
        <span v-else>
          <button class="flex items-center justify-center flex-none rounded-md  w-9 h-9 text-slate-300" type="button"
            aria-label="Like"> Like

            <img :src="image('like1')" class="w-25 " />
          </button>
        </span>
      </button>
    </div>
  </div>
</template>

<script>

export default {
  props: ["summary", "reacted"],

  data() {
    return {
      show_reaction_types: false,
      types: ["like", "love", "haha", "angry", "sad", "wow"],
      reactions_summary: { ...this.summary },
      auth_reaction: this.reacted ? this.reacted.type : null,
    };
  },

  methods: {
    image(type) {
      return `/images/app/reactions_${type}.png`;
    },

    toggleRaction(reaction) {
      try {
        let path = window.location.href;
        let old_reaction = this.auth_reaction;

        axios.post(`${path}/reaction`, { reaction }).catch(() => {
          this.saveReaction(old_reaction, reaction);
        });

        this.show_reaction_types = false;
        this.saveReaction(reaction, old_reaction);
      } catch (error) {
        console.log(error);
        // Do something with error
      }
    },

    saveReaction(new_reaction, old_reaction) {
      try {
        this.resetReactionsSummary(new_reaction, old_reaction);

        if (this.auth_reaction === new_reaction) {
          this.auth_reaction = null;
          return;
        }

        this.auth_reaction = new_reaction;
      } catch (error) {
        console.log(error);
        // Do something with error
      }
    },

    resetReactionsSummary(new_reaction, old_reaction) {
      try {
        if (old_reaction) {
          this.reactions_summary[old_reaction]--;
        }

        if (new_reaction && new_reaction !== old_reaction) {
          if (!this.reactions_summary[new_reaction]) {
            this.reactions_summary[new_reaction] = 1;
            return;
          }

          this.reactions_summary[new_reaction]++;
        }
      } catch (error) {
        console.log(error);
        // Do something with error
      }
    },
  },
};
</script>
