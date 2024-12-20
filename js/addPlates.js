let i = 0
const addPlateBUtton = document.querySelector("#addPlateBUtton");
const new_inputs = document.querySelector("#new_inputs");
const error = document.querySelector("#error");
const the_form = document.querySelector("#the_form");
addPlateBUtton.addEventListener("click", (e) => {
    e.preventDefault();
    console.log(i);

    if (i != 3) {
        new_inputs.innerHTML += `
        <div class="form-group mt-[2em]">
        <input type="text" placeholder="plate name" name="plate_name${i}" 
                        class="px-2 py-3 bg-transparent text-gray-200 font-medium w-full text-sm border-b border-gray-400 focus:border-yellow-300 outline-none"/>
                        <input type="text" placeholder="plate descreption" name="plate_descreption${i}"
                        class="px-2 py-3 bg-transparent text-gray-200 font-medium w-full text-sm border-b border-gray-400 focus:border-yellow-300 outline-none"/>
                        </div>`;
        i++;
    } else {
        error.innerHTML = "you have reached the max number of plates";
    }
})
the_form.addEventListener("submit",()=>{
    
})