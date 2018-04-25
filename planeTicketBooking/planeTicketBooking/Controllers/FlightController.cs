using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
/// <summary>
/// 李世杰创建
/// 
/// 用于：
/// 1、系统的首页
/// 2、航班展示页面
/// </summary>
/// <warning>
/// 为了辨别方便，创建的控制器的名称应该和页面的一致
/// </warning>
namespace planeTicketBooking.Controllers
{
    public class FlightController : Controller
    {
        // GET: Flight
        public ActionResult Index()
        {
            return View();
        }
    }
}