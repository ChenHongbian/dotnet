using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
/// <summary>
/// 李世杰创建
/// 
/// 用于：
/// 1、订单数据统计页面（后台）
/// </summary>
/// <warning>
/// 为了辨别方便，创建的控制器的名称应该和页面的一致
/// </warning>
namespace planeTicketBooking.Controllers
{
    public class OrderAdminController : Controller
    {
        // GET: OrderAdmin
        public ActionResult Index()
        {
            return View();
        }
    }
}