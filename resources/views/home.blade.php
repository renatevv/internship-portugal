@extends('layouts.admin')
@section('content')

<?php
 
$dataPoints = array( 
    array("label"=>"Open", "color"=>"#F93154", "symbol" => "Open","y"=>number_format($openTickets)),
    array("label"=>"Pending", "color"=>"#FFA900", "symbol" => "Pending","y"=>number_format($pendingTicket)),
    array("label"=>"Closed", "color"=>"#00B74A", "symbol" => "Closed","y"=>number_format($closedTickets)),
)
?>

<div class="content">

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Ticket status
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card text-white bg-primary "  style="height:110px;">
                                <div class="card-body pb-3 box-height">
                                    <div class="text-value ">{{ number_format($totalTickets) }}</div>
                                    <div>Total tickets</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white box-height" style="background-color: #d386c1; border-color: #B23CFD">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($low) }}</div>
                                        <div>Low </br>priority</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white" style="background-color: #e69c2e; border-color: #FFA900">
                                <div class="card-body pb-3 box-height">
                                    <div class="text-value">{{ number_format($medium) }}</div>
                                    <div>Medium priority</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white" style="background-color: #d90b3c; border-color: #F93154; height:110px;">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($high) }}</div>
                                        <div>High priority</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
        <div id="chartContainer" style="height: 225px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            
            <div class="card">
                <div class="card-header">
                    Last Tickets
                </div>
                <div class="card-body">
                    <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Ticket">
                        <thead>
                            <tr>
                                <th>
                                    
                                </th>
                                <th>
                                    {{ trans('cruds.ticket.fields.id') }}
                                </th>
                                <th>
                                    {{ trans('cruds.ticket.fields.title') }}
                                </th>
                                <th>
                                    {{ trans('cruds.ticket.fields.status') }}
                                </th>
                                <th>
                                    {{ trans('cruds.ticket.fields.priority') }}
                                </th>
                                <th>
                                    {{ trans('cruds.ticket.fields.category') }}
                                </th>
                                <th>
                                    {{ trans('cruds.ticket.fields.author_name') }}
                                </th>
                                <th>
                                    {{ trans('cruds.ticket.fields.author_email') }}
                                </th>
                                <th>
                                    {{ trans('cruds.ticket.fields.assigned_to_user') }}
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@parent
<script>
    $(function () {
let filters = `
<form class="form-inline" id="filtersForm">
</form>`;

$('.card-body').on('change', 'select', function() //admin dashboard all ticket table
{ //when selecting a filter
  $('#filtersForm').submit
    (
        function( event ) 
        {
            event.preventDefault(); // prevents reloading of the page when selecting a filter
        }
    )
});

  let dtButtons = []
  let searchParams = new URLSearchParams(window.location.search)
  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: {
      url: "{{ route('admin.tickets.index') }}",
      data: {
        'status': searchParams.get('status'),
        'priority': searchParams.get('priority'),
        'category': searchParams.get('category')
      }
    },
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{
    data: 'title',
    name: 'title', 
    render: function ( data, type, row) {
        return '<a href="'+row.view_link+'">'+data+' ('+row.comments_count+')</a>';
    }
},
{ 
  data: 'status_name', 
  name: 'status.name', 
  render: function ( data, type, row) {
      return '<span style="color:'+row.status_color+'">'+data+'</span>';
  }
},
{ 
  data: 'priority_name', 
  name: 'priority.name', 
  render: function ( data, type, row) {
      return '<span style="background-color:'+row.priority_color+'">'+data+'</span>';
  }
},
{ 
  data: 'category_name', 
  name: 'category.name', 
  render: function ( data, type, row) {
      return '<span style="color:'+row.category_color+'">'+data+'</span>';
  } 
},
{ data: 'author_name', name: 'author_name' },
{ data: 'author_email', name: 'author_email' },
{ data: 'assigned_to_user_name', name: 'assigned_to_user.name' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  };    
$(".datatable-Ticket").one("preInit.dt", function () {
 $(".dataTables_filter").after(filters);
});
  $('.datatable-Ticket').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
});

</script>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Ticket Statistics"
	},
	data: [{
		type: "doughnut",
		indexLabel: "{symbol} - {y}",
		showInLegend: false,
		legendText: "{label} : {y}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
@endsection