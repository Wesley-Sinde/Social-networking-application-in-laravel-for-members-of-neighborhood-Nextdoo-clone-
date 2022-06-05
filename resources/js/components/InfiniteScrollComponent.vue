<template>
  <div>
    <div v-for="product in Product" :key="product.id">
      <!-- {{ product.name }} -->

      <div class="p-2 px-4 bg-gray-200 rounded-lg shadow  dark:bg-gray-800">
        <div
          class="grid grid-cols-2 gap-4 font-mono text-sm font-bold leading-6 text-center text-white justify-items-stretch auto-rows-fr ">
          <div class="flex w-96">
            <img class="w-12 h-12 rounded-full"
              src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
            <div class="ml-2 mt-0.5">
              <span class="text-gray-900 dark:text-white">
                <a href=""><span class="italic font-bold text-yellow-400 dark:text-yellow-400 ">
                    <!-- {{ product.User.name }} -->
                  </span>
                </a>
              </span>
              <span class="block text-sm font-light leading-snug text-gray-500 dark:text-gray-400">
                {{ (product.created_at) }}</span>
            </div>
          </div>

          <!-- @if (isset(Auth::User()->id) && Auth::User()->id == product.user_id) -->
          <button
            class="relative z-10 block w-3 pt-2 pr-2 text-gray-700 border border-transparent rounded-md dark:text-white dark:focus:ring-opacity-40 hover:rotate-1 hover:text-blue-600 focus:outline-none justify-self-end "
            id="user-menu-button2" aria-expanded="false" data-dropdown-toggle="dropdownusermenu">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
            </svg>
          </button>
          <div class="z-50 hidden p-2 m-0 text-base list-none bg-gray-100 border rounded shadow dark:bg-gray-900 "
            id="dropdownusermenu">



            <div>
              <button data-tooltip-target="tooltip-edit" data-modal-toggle="pro-modal">

                <img class="inline-flex items-center w-5 h-5" src="\images\app\edit.png" alt="">
              </button>
              <div
                class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                id="pro-modal" aria-hidden="true">
                <div class="relative w-full h-full max-w-md px-4 md:h-auto">

                  <div class="relative bg-gray-300 rounded-lg shadow dark:bg-gray-600">

                    <div class="flex justify-end p-2">
                      <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="popup-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                        </svg>
                      </button>
                    </div>

                    <div class="p-6 pt-0 text-center">
                      <svg class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                      </svg>
                      <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                        This action is performed in pro account or verified
                        account. Do you want to apply for pro account?</h3>
                      <button data-modal-toggle="pro-modal"
                        class="text-gray-500hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10  dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-green-600 bg-blue-400 dark:bg-blue-600">
                        Yes, I'm sure
                      </button>
                      <button data-modal-toggle="pro-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">No,
                        cancel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tooltip-edit" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 text-sm font-medium text-white transition-opacity duration-300 bg-blue-600 rounded-lg shadow-sm opacity-0 tooltip">
                Edit This post
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
            </div>
          </div>
          <!-- @endif -->
        </div>
        <div class="flex">

          <h3 class="mb-2 text-xl font-bold leading-tight lg:text-3xl">
            <a class="transition duration-150 ease-in-out hover:text-gray-100" href="">
              {{ product.title }}
            </a>
          </h3>
          <div class="right-0 float-right ">
            <!-- <example-component :summary='JSON.stringify(product.reactionSummary())'
              :reacted='JSON.stringify(product.reacted())' /> -->
            <!-- {{ JSON.stringify(yourObject, null, 2) }} -->
          </div>
        </div>
        <!-- <div v-if="user_id">
          you got it-> 
        </div> -->
        <img class="self-center mx-auto align-middle rounded-3xl px-auto" src="" alt="">
        <p class="leading-snug md:leading-normal ">
          descriptiom
          <span class="whitespace-nowrap contents">
            <a href="#"
              class="flex items-center text-blue-500 align-middle hover:font-semibold hover:text-yellow-500 dark:text-blue-600 ">
              Read more
              <svg class="w-3 h-3 pt-1 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>

          </span>
        </p>


        <div class="right-0 flex justify-center pt-2">

          <dd class="flex ml-1 font-light text-gray-500 dark:text-gray-400">

            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" class="mr-1 text-slate-400 dark:text-slate-500" aria-hidden="true">
              <path d="M18 11.034C18 14.897 12 19 12 19s-6-4.103-6-7.966C6 7.655 8.819 5 12 5s6 2.655 6 6.034Z">
              </path>
              <path d="M14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path>
            </svg>
            {{ product.location }}
          </dd>
          <a class="px-2" href="#">
            33 comments &nbsp;
          </a>

          <div class="items-center text-gray-900 small dark:text-gray-400">
            {{ product.view_count }}
            <span>views</span>
          </div>


          <div class="flex px-2 ml-1 font-light text-gray-500 dark:text-gray-400">


            <svg class="w-4 h-4 mx-1 text-slate-400 dark:text-slate-500" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z">
              </path>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <!-- <infinite-loading @distance="1" @infinite="handleLoadMore"></infinite-loading> -->

    <infinite-loading spinner="bubbles" @infinite="infiniteHandler">
      <div class="text-red" slot="no-more">No more users</div>
      <div class="text-red" slot="no-results">No more users</div>
    </infinite-loading>

  </div>
</template>
<!-- <script>
export default {
  data() {
    return {
      Product: [],
      page: 1,
    };
  },
  methods: {
    handleLoadMore($state) {
      this.$http.get('/products?page=' + this.page)
        .then(res => {
          // alert(this.$http.get('?page=' + this.page));
          return res.json();
        }).then(res => {
          $.each(res.data, (key, value) => {
            this.Product.push(value);
          });
          $state.loaded();
          // console.warn(jqxhr.Product);
        });
      this.page = this.page + 1;
    },
  },
}
</script> -->

<script>
export default {
  data: function () {
    return {
      page: 2,
      lastPage: 0,
      isInit: true,
      Product: {},
    }
  },

  created: function () {
    this.fetchUsers()
      .then(response => {
        if (response.data.Product.length > 0) {
          this.Product = response.data.Product;
          this.isInit = false;
        } else {
          console.log('No users found.');
        }
      })
      .catch(e => console.log(e))
  },
  methods: {
    fetchUsers: function () {
      let url = isInit
        ? axios.get('/products')
        : axios.get(`/products?page=${this.page}`);

      return axios.get(url);
    },

    infiniteHandler: function ($state) {
      setTimeout(function () {
        this.fetchUsers()
          .then(response => {
            if (response.data.Product.length > 0) {
              this.lastPage = response.data.pagination.last_page;
              response.data.Product.forEach(Product => {
                this.Product.push(Product);
              });
              if (this.page - 1 === this.lastPage) {
                this.page = 2;
                $state.complete();
              } else {
                this.page += 1;
              }
              $state.loaded();
            } else {
              this.page = 2;
              $state.complete();
            }
          })
          .catch(e => console.log(e));
      }.bind(this), 1000);
    }
  },
}
</script>