var TimeElapsedApplication = React.createClass({
    render: function () {
        var elapsed = Math.round(this.props.elapsed / 100);
        var seconds = elapsed / 10 + (elapsed % 10 ? '' : '.0');
        var message = 'React.js is successfully running (and you have wasted) ' + seconds + ' seconds.';

        return <div className="alert alert-success" role="alert">
                  <br />
                  <p className="text-center"><i className="fa fa-circle-o-notch fa-fw fa-lg fa-spin" aria-hidden="true"></i> {message}</p>
               </div>
      }
  });
var start = new Date().getTime();
setInterval(function () {
    ReactDOM.render(
        <TimeElapsedApplication elapsed={new Date().getTime() - start}/>, document.getElementById('elapsedApp'));
}, 50);

