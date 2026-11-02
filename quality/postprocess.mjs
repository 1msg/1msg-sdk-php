import { readFile, writeFile } from "node:fs/promises";
import { resolve } from "node:path";
import { fileURLToPath } from "node:url";

/**
 * Preserve the public sendLocationRequest operation while disambiguating the
 * sendLocation request-builder helper emitted by OpenAPI Generator 7.22.
 * The original output declares the method twice and PHP cannot load the class.
 */
const path = process.argv[2]
  ? resolve(process.argv[2], "lib/Api/MessagingApi.php")
  : fileURLToPath(new URL("../lib/Api/MessagingApi.php", import.meta.url));
const before = await readFile(path, "utf8");
const anchor = "sendLocationRequest($token, $lat, $lng,";
const replacement = "sendLocationHttpRequest($token, $lat, $lng,";
if (!before.includes(replacement)) {
  if (before.split(anchor).length !== 4)
    throw new Error(
      "Unexpected PHP generator layout; review request-builder collision",
    );
  await writeFile(path, before.replaceAll(anchor, replacement));
}
