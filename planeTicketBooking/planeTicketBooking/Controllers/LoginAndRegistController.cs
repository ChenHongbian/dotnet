using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web;
using System.Web.Mvc;
/// <summary>
/// 李世杰创建
/// 
/// 用于：
/// 1、登录、注册页面
/// </summary>
/// <warning>
/// 为了辨别方便，创建的控制器的名称应该和页面的一致
/// </warning>
namespace planeTicketBooking.controllers
{
    public class LoginAndRegistController : Controller
    {
        // GET: 绑定登录注册页面的视图
        public ActionResult LoginAndRegist()
        {
            return View();
        }
    }
}