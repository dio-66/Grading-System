<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="add-subject-modal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          Add new subject
        </h3>
        <button type="button" class="btn-close-modal" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form action="../includes/subjects.inc.php" method="post">
        <div class="p-6 space-y-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="code" class="block mb-2 text-sm font-medium text-gray-900">Subject Code</label>
              <input type="number" name="code" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none block w-full p-2.5" placeholder="0000" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Subject Name</label>
              <input type="text" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none block w-full p-2.5" placeholder="Subject Name" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="desc" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
              <input type="text" name="desc" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none block w-full p-2.5" placeholder="Description" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="unit" class="block mb-2 text-sm font-medium text-gray-900">Units</label>
              <input type="number" name="unit" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none block w-full p-2.5" placeholder="Units" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="level" class="block mb-2 text-sm font-medium text-gray-900">Grade Level</label>
              <select name="level" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none block w-full p-2.5">
                <option value="" disabled selected hidden>Choose Grade Level</option>
                <?php foreach ($options as $data) : ?>
                  <option value="<?= $data['course_name']; ?>"><?= $data['course_name']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="ay" class="block mb-2 text-sm font-medium text-gray-900">Academic Year</label>
              <select name="ay" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none block w-full p-2.5">
                <option value="" disabled selected hidden>Choose Academic Year</option>
                <option value="2021-2022">2021-2022</option>
                <option value="2022-2023">2022-2023</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="sem" class="block mb-2 text-sm font-medium text-gray-900">Semester</label>
              <select name="sem" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none block w-full p-2.5">
                <option value="" disabled selected hidden>Choose Semester</option>
                <option value="First Semester">First Semester</option>
                <option value="Second Semester">Second Semester</option>
                <option value="Summer">Summer</option>
              </select>
            </div>
          </div>
        </div>
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <button type="submit" name="add" class="btn-green-modal">Add subject</button>
        </div>
      </form>
    </div>
  </div>
</div>