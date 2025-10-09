# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## 專案概述

這是一個 Caterham 汽車官網專案,使用 Laravel 8 框架與 Dcat Admin 後台管理系統建立。專案採用繁體中文作為主要語言,包含前台展示與後台管理功能。

## 開發環境設定

### 必要指令

```bash
# 安裝 PHP 相依套件
composer install

# 安裝 Node.js 相依套件
npm install

# 複製環境設定檔
cp .env.example .env

# 產生應用程式金鑰
php artisan key:generate

# 執行資料庫遷移
php artisan migrate

# 清除所有快取
php artisan optimize:clear
php artisan cache:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear
```

### 開發伺服器

```bash
# 啟動 Laravel 開發伺服器
php artisan serve

# 編譯前端資源（開發模式）
npm run dev

# 監看檔案變更並自動編譯
npm run watch

# 編譯前端資源（生產模式）
npm run prod
```

### 測試

```bash
# 執行所有測試
php artisan test

# 或使用 PHPUnit
./vendor/bin/phpunit
```

## 架構說明

### 前後台雙系統架構

專案採用前後台分離架構：

1. **前台路由** (`routes/web.php`): 公開的網站頁面，包含首頁、關於我們、車型展示、最新消息、聯絡資訊等
2. **後台路由** (`app/Admin/routes.php`): Dcat Admin 管理後台，預設路徑為 `/admin`

### 核心模組

#### 1. Admin 後台系統 (`app/Admin/`)
- **Controllers**: 後台控制器，對應各資料表的 CRUD 操作
- **Repositories**: 資料存取層，處理資料查詢邏輯
- **bootstrap.php**: Dcat Admin 初始化設定
- **routes.php**: 後台路由定義

重要的後台控制器：
- `PageSettingInfoController`: 頁面設定（橫幅圖片、SEO 資訊）
- `BaseSettingInfoController`: 基礎設定（網站基本資訊）
- `CarModelsInfoController`: 車型資料管理
- `NewsInfoController`: 最新消息管理
- `AboutUsInfoController`: 關於我們頁面內容
- `HomePageInfoController`: 首頁輪播設定

#### 2. 前台控制器 (`app/Http/Controllers/`)
- `IndexController`: 首頁
- `AboutUsController`: 關於我們
- `CarModelsController`: 車型列表與詳情
- `NewsController`: 最新消息（包含 news 和 activity 兩種類型）
- `ContactMailController`: 聯絡表單郵件發送

#### 3. 資料模型 (`app/Models/`)
所有模型對應資料庫表格，主要包含：
- `PageSettingInfo`: 各頁面的橫幅圖片與 SEO 設定
- `BaseSettingInfo`: 網站基礎設定（聯絡資訊、社群連結等）
- `CarModelsInfo`: 車型資料
- `NewsInfo`: 最新消息
- `AboutUsInfo`: 關於我們內容
- `HomePageInfo`: 首頁輪播設定

### 多語系支援

專案支援多語系，語系檔位於 `resources/lang/`：
- `zh_TW/`: 繁體中文（主要語系）
- `zh_CN/`: 簡體中文
- `en/`: 英文

後台欄位名稱透過語系檔管理，例如 `__('page-setting-info.fields.page_url')`

### 檔案上傳處理

- 圖片上傳路徑會依照年月自動分類：`images/banner/YYYYMM/`
- 支援桌面版與手機版分別上傳圖片（`page_banner_img` 與 `page_banner_img_mob`）
- 上傳設定於 `config/admin.php` 中的 `upload` 區段
- 檔案大小限制為 3MB (`maxSize(3072)`)

### 前台視圖架構

視圖檔案位於 `resources/views/`：
- `layouts/master.blade.php`: 主版型
- `layouts/header.blade.php`: 頁首導覽
- `layouts/footer.blade.php`: 頁尾
- `layouts/sub_hero.blade.php`: 子頁面橫幅區塊

## 重要注意事項

### URL 強制方案
在 `app/Providers/AppServiceProvider.php` 中設定 `URL::forceScheme('http')`，依照部署環境需求調整為 `https`

### 資料庫字串長度
Schema 預設字串長度設為 191 字元 (`Schema::defaultStringLength(191)`)，確保與舊版 MySQL 相容

### 分頁樣式
使用 Bootstrap 分頁樣式 (`Paginator::useBootstrap()`)

### 清除快取路由
前台提供 `/clear-cache` 路由用於清除所有快取，可透過瀏覽器直接訪問

### Dcat Admin 設定
- 後台路徑預設為 `/admin`（可透過 `.env` 的 `ADMIN_ROUTE_PREFIX` 調整）
- 後台 Logo 位於 `public/assets/img/caterham-logo.png`
- 上傳磁碟使用 `admin` disk（設定於 `config/filesystem.php`）
- 擴充套件目錄：`dcat-admin-extensions/`
- 已安裝 `pstldz/dcat-admin-grid-sotrable` 套件用於表格排序功能

## 開發慣例

### Controller 命名
- 前台控制器：`XxxController` (e.g., `AboutUsController`)
- 後台控制器：`XxxInfoController` (e.g., `AboutUsInfoController`)

### Repository 使用
後台控制器透過 Repository 存取資料，Repository 繼承自 Dcat Admin 的 Repository 類別

### 圖片欄位處理
- Grid 列表中的圖片欄位使用 `->image()` 顯示
- Form 表單使用 `multipleImage()` 支援多圖上傳
- 圖片支援拖曳排序 (`->sortable()`)

### 表單驗證
使用 Laravel 驗證規則，例如：`->rules('mimes:jpg,jpeg,png,gif|nullable')`

## 除錯與日誌

- 日誌檔案位於 `storage/logs/`
- 可透過 `Log::` facade 記錄日誌
- 開發環境建議設定 `APP_DEBUG=true`
