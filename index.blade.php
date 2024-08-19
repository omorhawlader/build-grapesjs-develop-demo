<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="./vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>demo</title>
  <link rel="stylesheet" crossorigin href="./assets/index-8PMuCpa1.css" />
</head>

<body>
  <div id="root"></div>
  <script>
    window.escapeName = (name) =>
      `${name}`.trim().replace(/([^a-z0-9\w-:/]+)/gi, "-");

    window.projectID = "{{request()->route('project_id') ?? ''}}";
    window.projectEndpointRenderedData = `/seller/landing-page-builder/${projectID}/rendered-data`;
    window.csrf = "{{csrf_token()}}";
  </script>
  <script type="module" crossorigin src="./assets/index-DEWePBPz.js"></script>
</body>

</html>