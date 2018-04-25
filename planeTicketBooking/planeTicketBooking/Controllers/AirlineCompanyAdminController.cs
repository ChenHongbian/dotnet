﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
/// <summary>
/// 李世杰创建
/// 
/// 用于：
/// 1、航空公司信息管理页面
/// 1.2、航线管理
/// 1.3、飞机信息管理
/// 1.4、航空公司信息管理
/// </summary>
/// <warning>
/// 为了辨别方便，创建的控制器的名称应该和页面的一致
/// </warning>
namespace planeTicketBooking.Controllers
{
    public class AirlineCompanyAdminController : Controller
    {
        // GET: AirlineCompanyAdmin
        public ActionResult Index()
        {
            return View();
        }
    }
}