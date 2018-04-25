using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(planeTicketBooking.Startup))]
namespace planeTicketBooking
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
