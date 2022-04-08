<style>
    .main{
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 1px solid black;
        border-radius: 50px;
        padding: 0.5rem;
        margin-left: 150px;
        margin-right: 150px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.34);
    }

    td{
        padding: 5px;
        border-top: 0.1rem solid black;
        
    }

    table { 
	font-family: arial, sans-serif; border-collapse: collapse; width: 100%;}		td, th {border: 1px solid #dddddd; text-align: left; padding: 8px; }	tr:nth-child(even) { background-color: #dddddd; }


</style>

    <div class="main">
        <h1>Landenoverzicht</h1>
        <!-- <h1>Landenoverzicht</h1> -->
            <table>
                <tr>
                    <th>ID</th>
                    <th>Land</th>
                    <th>Hoofdstad</th>
                    <th>Continent</th>
                    <th>aantalInwoners</th>
                </tr>


        <?php if (isset($data)) {
            echo($data['countries']);
        } ?>

            </table>
            <br><br><br>
    </div>


