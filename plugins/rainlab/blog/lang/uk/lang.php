<?php

return [
    'plugin' => [
        'name' => 'Блог',
        'description' => 'Надійна блогова платформа.'
    ],
    'blog' => [
        'menu_label' => 'Блог',
        'menu_description' => 'Управління Блогом',
        'posts' => 'Записи',
        'create_post' => 'записи',
        'categories' => 'Категорії',
        'create_category' => 'категорії',
        'tab' => 'Блог',
        'access_posts' => 'Керування записами блогу',
        'access_categories' => 'Керування категоріями блогу',
        'access_other_posts' => 'Керування записами інших користувачів',
        'access_import_export' => 'Дозволено імпортувати та експортувати записи',
        'access_publish' => 'Дозволено публікувати записи',
        'manage_settings' => 'Керування налаштуваннями блогу',
        'delete_confirm' => 'Ви впевнені, що хочете зробити це?',
        'chart_published' => 'Опубліковано',
        'chart_drafts' => 'Чернетки',
        'chart_total' => 'Всього',
        'settings_description' => 'Керування налаштуваннями блогу',
        'show_all_posts_label' => 'Показувати всі записи для внутрішніх (бекенд) користувачів',
        'show_all_posts_comment' => 'Показувати опубліковані та неопубліковані записи на фронтенді для внутрішніх (бекенд) користувачів',
        'tab_general' => 'Основні'
    ],
    'posts' => [
        'list_title' => 'Керування записами блогу',
        'filter_category' => 'Категорія',
        'filter_published' => 'Приховати опубліковані',
        'filter_date' => 'Дата',
        'new_post' => 'Новий запис',
        'export_post' => 'Експорт записів',
        'import_post' => 'Імпорт записів'
    ],
    'post' => [
        'title' => 'Заголовок',
        'title_placeholder' => 'Новий заголовок запису',
        'content' => 'Контент',
        'content_html' => 'HTML Контент',
        'slug' => 'URL запису',
        'slug_placeholder' => 'new-post-slug',
        'categories' => 'Категорії',
        'author_email' => 'Email автора',
        'created' => 'Створено',
        'created_date' => 'Дата створення',
        'updated' => 'Оновлено',
        'updated_date' => 'Дата оновлення',
        'published' => 'Опубліковано',
        'published_date' => 'Дата публікації',
        'published_validation' => 'Будь ласка, вкажіть дату публікації.',
        'tab_edit' => 'Редактор',
        'tab_categories' => 'Категорії',
        'categories_comment' => 'Виберіть категорії, до яких належить цей запис',
        'categories_placeholder' => 'Не знайдено жодної категорії, створіть хоча б одну!',
        'tab_manage' => 'Управління',
        'published_on' => 'Опубліковано',
        'excerpt' => 'Уривок',
        'summary' => 'Резюме',
        'featured_images' => 'Тематичні зображення',
        'delete_confirm' => 'Ви дійсно хочете видалити цей запис?',
        'delete_success' => 'Ці записи успішно видалені.',
        'close_confirm' => 'Запис не збережено.',
        'return_to_posts' => 'Повернутись до списку записів'
    ],
    'categories' => [
        'list_title' => 'Керування категоріями блогу',
        'new_category' => 'Нова категорія',
        'uncategorized' => 'Без категорії'
    ],
    'category' => [
        'name' => 'Назва',
        'name_placeholder' => 'Нове ім"я категорії',
        'description' => 'Опис',
        'slug' => 'URL адреса',
        'slug_placeholder' => 'new-category-slug',
        'posts' => 'Записи',
        'delete_confirm' => 'Ви дійсно хочете видалити цю категорію?',
        'delete_success' => 'Ці категорії успішно видалені.',
        'return_to_categories' => 'Повернутись до списку категорій',
        'reorder' => 'Порядок категорій'
    ],
    'menuitem' => [
        'blog_category' => 'Категорія блогу',
        'all_blog_categories' => 'Всі категорії блогу',
        'blog_post' => 'Запис блогу',
        'all_blog_posts' => 'Всі записи блогу',
        'category_blog_posts' => 'Записи категорії блогу'
    ],
    'settings' => [
        'category_title' => 'Список категорій блогу',
        'category_description' => 'Відображає список категорій на сторінці.',
        'category_slug' => 'Параметр URL',
        'category_slug_description' => 'Параметр маршруту, який використовується для пошуку в поточній категорії URL. Ця властивість використовується за замовчуванням компонентом Фрагменти для маркування активної категорії.',
        'category_display_empty' => 'Порожні категорії',
        'category_display_empty_description' => 'Відображати категорії, які не мають записів.',
        'category_page' => 'Сторінка категорій',
        'category_page_description' => 'Назва сторінки категорій. Ця властивість використовується за замовчуванням компонентом Фрагменти.',
        'post_title' => 'Запис блогу',
        'post_description' => 'Відображення запису блогу',
        'post_slug' => 'Параметр URL',
        'post_slug_description' => 'Параметр маршруту, необхідний для вибору конкретного запису.',
        'post_category' => 'Сторінка категорій',
        'post_category_description' => 'Назва сторінки категорій. Ця властивість використовується за замовчуванням компонентом Фрагменти.',
        'posts_title' => 'Список записів блогу',
        'posts_description' => 'Відображає список останніх записів блогу на сторінці.',
        'posts_pagination' => 'Параметр посторінкової навігації',
        'posts_pagination_description' => 'Параметр, необхідний для посторінкової навігації.',
        'posts_filter' => 'Фільтр категорій',
        'posts_filter_description' => 'Введіть URL категорії або параметр URL-адреси для фільтрації записів. Залишіть порожнім, щоб переглянути всі записи.',
        'posts_per_page' => 'Записів на сторінці',
        'posts_per_page_validation' => 'Неприпустимий формат. Очікуваний тип даних - дійсне число.',
        'posts_no_posts' => 'Відсутність записів',
        'posts_no_posts_description' => 'Повідомлення, що відображається в блозі, якщо відсутні записи. Ця властивість використовується за замовчуванням компонентом Фрагменти.',
        'posts_no_posts_default' => 'Записів не знайдено',
        'posts_order' => 'Сортування',
        'posts_order_description' => 'Атрибут, за яким будуть сортуватися записи.',
        'posts_category' => 'Сторінка категорій',
        'posts_category_description' => 'Назва категорії на сторінці запису "розміщена в категорії". Ця властивість використовується за замовчуванням компонентом Фрагменти.',
        'posts_post' => 'Сторінка запису',
        'posts_post_description' => 'Назва сторінки для посилання "детальніше". Ця властивість використовується за замовчуванням компонентом Фрагменти.',
        'posts_except_post' => 'Крім запису',
        'posts_except_post_description' => 'Введіть ID/URL або змінний з ID/URL запис, який ви хочете виключити',
        'posts_except_categories' => 'Крім категорій',
        'posts_except_categories_description' => 'Введіть розділений комами список URL категорій або змінну зі списком категорій, які ви хочете виключити',
        'rssfeed_blog' => 'Сторінка блогу',
        'rssfeed_blog_description' => 'Ім"я основного файлу сторінки блогу для створення посилань. Ця властивість використовується за замовчуванням компонентом Фрагменти.',
        'rssfeed_title' => 'RSS Feed',
        'rssfeed_description' => 'Створює RSS-канал, що містить записи з блогу.',
        'group_links' => 'Посилання',
        'group_exceptions' => 'Винятки'
    ],
    'sorting' => [
        'title_asc' => 'Заголовок (за зростанням)',
        'title_desc' => 'Заголовок (за спаданням)',
        'created_asc' => 'Створено (за зростанням)',
        'created_desc' => 'Створено (за спаданням)',
        'updated_asc' => 'Оновлено (за зростанням)',
        'updated_desc' => 'Оновлено (за спаданням)',
        'published_asc' => 'Опубліковано (за зростанням)',
        'published_desc' => 'Опубліковано (за спаданням)',
        'random' => 'Випадково'
    ],
    'import' => [
        'update_existing_label' => 'Оновити існуючі записи',
        'update_existing_comment' => 'Встановіть цей прапорець, щоб оновлювати записи з однаковим ID, title або URL.',
        'auto_create_categories_label' => 'Створити категорії, вказані в імпортованому файлі',
        'auto_create_categories_comment' => 'Ви повинні зіставити стовпець Категорії, щоб використовувати цю функцію. В іншому випадку виберіть категорію за замовчуванням з пунктів нижче.',
        'categories_label' => 'Категорії',
        'categories_comment' => 'Виберіть категорії, до яких належать імпортовані записи (необов"язково).',
        'default_author_label' => 'Автор запису за замовчуванням (необов"язково)',
        'default_author_comment' => 'Імпорт спробує використовувати існуючого автора, якщо він відповідає стовпцю Email автора, інакше використовується вказаний вище автор.',
        'default_author_placeholder' => '-- виберіть автора --'
    ]
];
