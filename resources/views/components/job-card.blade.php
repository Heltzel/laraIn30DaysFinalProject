<x-panel class=" flex flex-col text-center ">

    <div class="self-start text-sm">EmployerName</div>
    <div class="py-8">
        <h3 class= "group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">Job Title</h3>
        <p class="text-sm mt-4">Salary</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag size="small">Backend</x-tag>
            <x-tag size="small">Frontend</x-tag>
            <x-tag size="small">Designer</x-tag>

        </div>
        <div><x-employer-logo :width="42" /></div>
    </div>
</x-panel>
