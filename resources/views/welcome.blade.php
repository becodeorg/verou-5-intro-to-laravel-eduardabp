    @extends('layout')

    @section('title')
        <title>Verou 5 Daily News</title>
    @endsection

    @section('main')
    
        <h3 class="ms-5">Latest News</h3>
        <div class="container text-center mt-4">
            <div class="row gx-5">
                <div class="col border border-danger p-2 m-2">
                    <h4>Basile Leroy is elected Coach of The Year</h4>
                    <p>After an outstading 2023 performance, the Junior Web Dev coach was awarded with the BeCode prize for Best Coach. Now that the prize is officially canceled for next years, some coleagues expressed regret on never winning it. What a pity!</p>
                </div>
                <div class="col border border-danger p-2 m-2">
                    <h4>Fire Alarm is triggered during Tech Talk presentation</h4>
                    <p>This is the third occurence of a false alarm in less than 3 months. Coincidently, all triggers happened during Becca's tech talk.</p>
                </div>
                <div class="col border border-danger p-2 m-2">
                    <h4>Daim shortage affecting Gent campus causing casualities</h4>
                    <p>The effects of the Daim shortage can be seen in a good portion of BeCode students. One of them even took the drastic measure of switching to Salesforce. "I need the money to buy more Daim", said one of the students that asked to remain anonymous on this Monday.</p>
                </div>
            </div>
        </div>
    @endsection
