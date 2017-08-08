<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>List Available Servers</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="servers.js"></script>

    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="container box">
        <h1 align="left">List Available Servers</h1>
        <br />
        <div align="right">
            <button type="button" id="modal_button" class="btn btn-info">Add Servers</button>
        </div>
        <br />
        
        <!--    <form name="myForm" action="index.php" method="GET">-->
        <form id="myForm">
            <div class="modal-body">
                <div class="modal-dialog">
                    <label>Country:</label>
                    <select id="country" class="form-control" name="country">
                        <option value="Canada">Canada</option>
                        <option value="USA">USA</option>
                    </select>
                    <br />
                    <label>City:</label>
                    <select id="city" class="form-control" name="city">
                        <option value="Montreal">Montreal</option>
                        <option value="Quebec">Quebec</option>
                        <option value="Sherbrooke">Sherbrooke</option>
                        <option value="All">ALL</option>

                    </select>
                    <br />
                    <label>Manufacturer:</label>
                    <select id="manufacturer" class="form-control" name="manufacturer">
                        <option value="Intel">Intel</option>
                        <option value="AMD">AMD</option>
                    </select>
                    <br />
                    <label>CPU specs: </label>
                    <input type="text" name="cpu" id="cpu" class="form-control" />
                    <br />
                    <label>RAM:</label>
                    <input type="text" name="ram" id="ram" class="form-control" />
                    <br />

                    <label>HDD Capacity:</label>
                    <input type="text" name="hdd_capacity" id="hdd_capacity" class="form-control" />

                    <label>Storage Type:</label>
                    <select id="storage_type" class="form-control" name="storage_type">
                        <option value="HDD">HDD</option>
                        <option value="SSD">SSD</option>
                    </select>
                    <br />
                    <label>RAID:</label>
                    <select id="raid" class="form-control" name="raid">
                        <option value="SW">SW</option>
                        <option value="HW">HW</option>
                        <option value="None">None</option>
                    </select>
                    <br />

                    <label>Bandwidth: </label>
                    <input type="text" name="bandwidth" id="bandwidth" class="form-control" />
                    <br />
                    <label>Network Speed:</label>
                    <select id="network_speed" class="form-control" name="network_speed">
                        <option value="100">100Mbps</option>
                        <option value="1000">1000Mbps</option>

                    </select>
                </div>
            </div>
            <div align="center">
                <input type="button" id="bouton" class="btn btn-info" value='Display' />
            </div>
        </form>
        <div id="result" class="table-responsive">
        </div>
    </div>
</body>

</html>

<div id="customerModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add a New Server</h4>
            </div>
            <div class="modal-body">
                <label>Country:</label>
                <select id="country" class="form-control" name="country">
                    <option value="Canada">Canada</option>
                    <option value="USA">USA</option>
                </select>
                <br />
                <label>City:</label>
                <select id="city" class="form-control" name="city">
                    <option value="Montreal">Montreal</option>
                    <option value="Quebec">Quebec</option>
                    <option value="Sherbrooke">Sherbrooke</option>


                </select>
                <br />
                <label>Manufacturer:</label>
                <select id="manufacturer" class="form-control" name="manufacturer">
                    <option value="Intel">Intel</option>
                    <option value="AMD">AMD</option>
                </select>
                <br />
                <label>CPU specs: </label>
                <input type="text" name="cpu" id="cpu" class="form-control" />
                <br />
                <label>RAM:</label>
                <input type="text" name="ram" id="ram" class="form-control" />
                <br />

                <label>HDD Capacity:</label>
                <input type="text" name="hdd_capacity" id="hdd_capacity" class="form-control" />

                <label>Storage Type:</label>
                <select id="storage_type" class="form-control" name="storage_type">
                    <option value="HDD">HDD</option>
                    <option value="SSD">SSD</option>
                </select>
                <br />
                <label>RAID:</label>
                <select id="raid" class="form-control" name="raid">
                    <option value="SW">SW</option>
                    <option value="HW">HW</option>
                    <option value="None">None</option>
                </select>
                <br />

                <label>Bandwidth: </label>
                <input type="text" name="bandwidth" id="bandwidth" class="form-control" />
                <br />
                <label>Network Speed:</label>
                <select id="network_speed" class="form-control" name="network_speed">
                    <option value="100">100Mbps</option>
                    <option value="1000">1000Mbps</option>

                </select>

            </div>

            <div class="modal-footer">
                <input type="hidden" name="id" id="id" />
                <input type="submit" name="action" id="action" class="btn btn-success" />
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    

    
</script>