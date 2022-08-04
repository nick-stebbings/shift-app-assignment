<section class="mt-2 w-full flex flex-col items-center justify-center">
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
        <form>
            <div class="mb-3 xl:w-96">
                <select class="form-select appearance-none
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding bg-no-repeat
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="location">
                    <option selected>Choose Location</option>
                    <option value="1">Hamilton</option>
                    <option value="2">Matamata</option>
                </select>
              </div>
              <div class="datepicker relative form-floating mb-3 xl:w-96" data-mdb-toggle-button="false">
                <input type="text"
                  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="Select a date" />
                <label for="floatingInput" class="text-gray-700">Select a date</label>
                <button class="datepicker-toggle-button" data-mdb-toggle="datepicker">
                  <i class="fas fa-calendar datepicker-toggle-icon"></i>
                </button>
              </div>
        
              <div class="timepicker relative form-floating mb-3 xl:w-96">
                <input type="text"
                  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="Select a start time" />
                <label for="floatingInput" class="text-gray-700">Select a start time</label>
                <button tabindex="0" type="button" class="timepicker-toggle-button" data-mdb-toggle="timepicker">
                  <i class="fas fa-clock timepicker-icon"></i>
                </button>
              </div>
              
              <div class="timepicker relative form-floating mb-3 xl:w-96">
                  <input type="text"
                  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="Select an end time" />
                  <label for="floatingInput" class="text-gray-700">Select an end time</label>
                  <button tabindex="0" type="button" class="timepicker-toggle-button" data-mdb-toggle="timepicker">
                      <i class="fas fa-clock timepicker-icon"></i>
                    </button>
                </div>
            </div>
    </div>
    <div class="flex w-1/2 md:w-32 px-2 gap-x-4 items-center justify-center">
    <button type="submit" class="w-48 mt-4
    w-full
    px-6
    py-2.5
    bg-transparent
    border-2
    border-blue-400
    text-blue-400
    text-white
    font-medium
    text-xs
    leading-tight
    uppercase
    rounded
    shadow-md hover:shadow-lg
    focus:border-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
    active:bg-blue-800 active:shadow-lg
    hover:border-blue-600
    hover:text-blue-600
    transition
    duration-150
    ease-in-out">Cancel</button>
<button type="submit" class="w-48 mt-4
w-full
px-6
py-2.5
bg-blue-600
    text-white
    font-medium
    text-xs
    leading-tight
    uppercase
    rounded
    shadow-md
    hover:bg-blue-700 hover:shadow-lg
    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
    active:bg-blue-800 active:shadow-lg
    transition
    duration-150
    ease-in-out">Submit</button>
</div>
</form>
</div>
</section>