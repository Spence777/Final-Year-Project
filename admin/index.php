<?php include('includes/header.php') ?>


<style>
 .card{
    box-shadow: 15px 12px 26px rgba(0, 0, 0, 0.1);
 }

 .custom {
    width: 300px !important;
    justify-content: center;
    align-items: center;
}

</style>


<section style="margin-top: 100px; margin-bottom: 50px; border: 0px;">
    <div class="container">
        <div class="card">
            <div class="card-body d-flex justify-content-center">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="../viewusers.php">
                        <button class="btn btn-primary custom">Review Users</button>
                    </a>
                </div>

                <div class="col-md-4 mb-4">
                    <button class="btn btn-primary custom">Evaluate Projects</button>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="../addcategory.php">
                         <button class="btn btn-primary custom" name="">Review Categories</button>
                    </a>
                </div>

                <div class="col-md-4 mb-4">
                    <a href="../setbaseline.php">
                    <button class="btn btn-primary custom">Set Baseline for Categories</button>
                    </a>
                </div>

                <div class="col-md-4 mb-4">
                    <a href="">
                    <button class="btn btn-primary custom">Generate Reports</button>
                    </a>
                </div>
            </div>
        </div>
            </div>
        </div>
        
    </div>
</section>

<section>
    <div class="container">
        <h4 class="text-center mb-4">Key Performance Indicators (KPI'S)</h4>
        <h4 class="text-center mb-4">Choose a category</h4>

        <div class="col-md-6 d-flex justify-content-center mb-4">
            <label for="inputState" class="form-label"></label>
            <select id="inputState" name="categoryid" class="form-select" required>
            <option value="">Choose Category</option>
            <?php 
                $sql = ("SELECT *FROM categories");
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo " <option value=".$row['categoryid'].">".$row['categoryname']."</option> ";
                    }
                }
            ?>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-5" style="">
                    <div class="card-body">
                        <h5 class="card-title text-center">Number Of Identified Weaknesses</h5>
                        <div id="myfirstchart" style="height: 250px;"></div>
                    </div>
                 </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Number Of Identified Strengths</h5>
                        <div id="donut-example" style="height: 250px;"></div>
                        
                    </div>
                 </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Number Of Process Evaluations</h5>
                        <div id="donut-example-2" style="height: 250px;"></div>
                    </div>
                 </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Level Of Satisfaction Of Participants</h5>
                        <div id="donut-example-3" style="height: 250px;"></div>
                    </div>
                 </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Number Of Participants Reached</h5>
                        <div id="participants" style="height: 250px;"></div>

                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>

<script>
    $(document).ready(function(){
        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { year: '2008', value: 20 },
            { year: '2009', value: 10 },
            { year: '2010', value: 5 },
            { year: '2011', value: 5 },
            { year: '2012', value: 20 }
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Value']
        });
    })
</script>

<script>
    $(document).ready(function(){
        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'participants',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { year: '2008', value: 20 },
            { year: '2009', value: 9 },
            { year: '2010', value: 15 },
            { year: '2011', value: 7 },
            { year: '2012', value: 40 }
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Value']
        });
    })
</script>


<script>
$(document).ready(function(){
Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20}
  ]
});
})
</script>

<script>
$(document).ready(function(){
Morris.Donut({
  element: 'donut-example-2',
  data: [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20}
  ]
});
})
</script>

<script>
$(document).ready(function(){
Morris.Donut({
  element: 'donut-example-3',
  data: [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 10},
    {label: "Extremely Good", value: 15},
    {label: "Average", value: 5}
  ]
});
})
</script>