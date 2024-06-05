<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="50.000" />
        <x-forms.input label="Location" name="location" placeholder="Winter Gardens, Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url"
            placeholder="https://stracke.com/dicta-ratione-aut-consequatur-itaque-dolores-natus-consequatur.html" />

        <x-forms.checkbox label="Featured (Costs Extra)" name="featured" />
        <x-forms.divider />
        <x-forms.input label="Tags ( comma separated )" name="tags" placeholder="Laracast, Video, Education" />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>

</x-layout>
