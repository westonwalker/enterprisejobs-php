<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
<div class="bg-gray-100 shadow sm:rounded-lg my-6">
  <div class="px-6 py-5 inline-flex">
    <h2 class="text-lg font-bold leading-7 text-gray-800 sm:text-xl sm:truncate self-center">
    Subscribe to get an email of all new jobs
    </h2>
    <form class="sm:flex sm:items-center ml-4">
      <div class="w-full sm:max-w-xs">
        <label for="email" class="sr-only">Email</label>
        <input type="text" name="email" id="email" class="shadow-sm w-80 focus:ring-indigo-500 focus:border-indigo-500 block sm:text-md border-gray-300 rounded-md" placeholder="you@example.com">
      </div>
      <button type="submit" class="mt-3 w-full inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm font-bold rounded-md text-white bg-green-400 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-md">
        Subscribe
      </button>
    </form>
  </div>
</div>
