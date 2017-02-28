var TimeElapsedApplication = React.createClass({
    render: function () {
        var elapsed = Math.round(this.props.elapsed / 100);
        var seconds = elapsed / 10 + (elapsed % 10 ? '' : '.0');
        var message = 'React.js is successfully running (and you have wasted) ' + seconds + ' seconds.';

        return <div className="alert alert-info">
                  <center>
                    <h4><i className="fa fa-circle-o-notch fa-fw fa-lg fa-spin" aria-hidden="true"></i> {message}</h4>
                  </center>
               </div>
      }
  });
var start = new Date().getTime();
setInterval(function () {
    ReactDOM.render(
        <TimeElapsedApplication elapsed={new Date().getTime() - start}/>, document.getElementById('testHead'));
}, 50);

