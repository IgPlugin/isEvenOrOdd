<?php

declare(strict_types=1);

namespace NhanAZ\isEvenOrOdd;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use function count;
use function is_numeric;

class Main extends PluginBase {

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
		if ($command->getName() == "isevenorodd" && count($args) == 1) {
			$number = $args[0];
			if (is_numeric($number)) {
				if ($number == 0) {
					$sender->sendMessage("0 is even");
				} elseif ($number == 1) {
					$sender->sendMessage("3 is odd");
				} elseif ($number == 2) {
					$sender->sendMessage("2 is even");
				} elseif ($number == 3) {
					$sender->sendMessage("3 is odd");
				} elseif ($number == 4) {
					$sender->sendMessage("4 is even");
				} elseif ($number == 5) {
					$sender->sendMessage("5 is odd");
				} elseif ($number == 6) {
					$sender->sendMessage("6 is even");
				} elseif ($number == 7) {
					$sender->sendMessage("7 is odd");
				} elseif ($number == 8) {
					$sender->sendMessage("8 is even");
				} elseif ($number == 9) {
					$sender->sendMessage("9 is odd");
				} elseif ($number == 10) {
					$sender->sendMessage("10 is even");
				} elseif ($number == 11) {
					$sender->sendMessage("11 is odd");
				} elseif ($number == 12) {
					$sender->sendMessage("12 is even");
				} elseif ($number == 13) {
					$sender->sendMessage("13 is odd");
				} elseif ($number == 14) {
					$sender->sendMessage("14 is even");
				} elseif ($number == 15) {
					$sender->sendMessage("15 is odd");
				} elseif ($number == 16) {
					$sender->sendMessage("16 is even");
				} elseif ($number == 17) {
					$sender->sendMessage("17 is odd");
				} elseif ($number == 18) {
					$sender->sendMessage("18 is even");
				} elseif ($number == 19) {
					$sender->sendMessage("19 is odd");
				} elseif ($number == 20) {
					$sender->sendMessage("20 is even");
				} elseif ($number == 21) {
					$sender->sendMessage("21 is odd");
				} elseif ($number == 22) {
					$sender->sendMessage("22 is even");
				} elseif ($number == 23) {
					$sender->sendMessage("23 is odd");
				} elseif ($number == 24) {
					$sender->sendMessage("24 is even");
				} elseif ($number == 25) {
					$sender->sendMessage("25 is odd");
				} elseif ($number == 26) {
					$sender->sendMessage("26 is even");
				} elseif ($number == 27) {
					$sender->sendMessage("27 is odd");
				} elseif ($number == 28) {
					$sender->sendMessage("28 is even");
				} elseif ($number == 29) {
					$sender->sendMessage("29 is odd");
				} elseif ($number == 30) {
					$sender->sendMessage("30 is even");
				} elseif ($number == 31) {
					$sender->sendMessage("31 is odd");
				} elseif ($number == 32) {
					$sender->sendMessage("32 is even");
				} elseif ($number == 33) {
					$sender->sendMessage("33 is odd");
				} elseif ($number == 34) {
					$sender->sendMessage("34 is even");
				} elseif ($number == 35) {
					$sender->sendMessage("35 is odd");
				} elseif ($number == 36) {
					$sender->sendMessage("36 is even");
				} elseif ($number == 37) {
					$sender->sendMessage("37 is odd");
				} elseif ($number == 38) {
					$sender->sendMessage("38 is even");
				} elseif ($number == 39) {
					$sender->sendMessage("39 is odd");
				} elseif ($number == 40) {
					$sender->sendMessage("40 is even");
				} elseif ($number == 41) {
					$sender->sendMessage("41 is odd");
				} elseif ($number == 42) {
					$sender->sendMessage("42 is even");
				} elseif ($number == 43) {
					$sender->sendMessage("43 is odd");
				} elseif ($number == 44) {
					$sender->sendMessage("44 is even");
				} elseif ($number == 45) {
					$sender->sendMessage("45 is odd");
				} elseif ($number == 46) {
					$sender->sendMessage("46 is even");
				} elseif ($number == 47) {
					$sender->sendMessage("47 is odd");
				} elseif ($number == 48) {
					$sender->sendMessage("48 is even");
				} elseif ($number == 49) {
					$sender->sendMessage("49 is odd");
				} elseif ($number == 50) {
					$sender->sendMessage("50 is even");
				} elseif ($number == 51) {
					$sender->sendMessage("51 is odd");
				} elseif ($number == 52) {
					$sender->sendMessage("52 is even");
				} elseif ($number == 53) {
					$sender->sendMessage("53 is odd");
				} elseif ($number == 54) {
					$sender->sendMessage("54 is even");
				} elseif ($number == 55) {
					$sender->sendMessage("55 is odd");
				} elseif ($number == 56) {
					$sender->sendMessage("56 is even");
				} elseif ($number == 57) {
					$sender->sendMessage("57 is odd");
				} elseif ($number == 58) {
					$sender->sendMessage("58 is even");
				} elseif ($number == 59) {
					$sender->sendMessage("59 is odd");
				} elseif ($number == 60) {
					$sender->sendMessage("60 is even");
				} elseif ($number == 61) {
					$sender->sendMessage("61 is odd");
				} elseif ($number == 62) {
					$sender->sendMessage("62 is even");
				} elseif ($number == 63) {
					$sender->sendMessage("63 is odd");
				} elseif ($number == 64) {
					$sender->sendMessage("64 is even");
				} elseif ($number == 65) {
					$sender->sendMessage("65 is odd");
				} elseif ($number == 66) {
					$sender->sendMessage("66 is even");
				} elseif ($number == 67) {
					$sender->sendMessage("67 is odd");
				} elseif ($number == 68) {
					$sender->sendMessage("68 is even");
				} elseif ($number == 69) {
					$sender->sendMessage("69 is odd");
				} elseif ($number == 70) {
					$sender->sendMessage("70 is even");
				} elseif ($number == 71) {
					$sender->sendMessage("71 is odd");
				} elseif ($number == 72) {
					$sender->sendMessage("72 is even");
				} elseif ($number == 73) {
					$sender->sendMessage("73 is odd");
				} elseif ($number == 74) {
					$sender->sendMessage("74 is even");
				} elseif ($number == 75) {
					$sender->sendMessage("75 is odd");
				} elseif ($number == 76) {
					$sender->sendMessage("76 is even");
				} elseif ($number == 77) {
					$sender->sendMessage("77 is odd");
				} elseif ($number == 78) {
					$sender->sendMessage("78 is even");
				} elseif ($number == 79) {
					$sender->sendMessage("79 is odd");
				} elseif ($number == 80) {
					$sender->sendMessage("80 is even");
				} elseif ($number == 81) {
					$sender->sendMessage("81 is odd");
				} elseif ($number == 82) {
					$sender->sendMessage("82 is even");
				} elseif ($number == 83) {
					$sender->sendMessage("83 is odd");
				} elseif ($number == 84) {
					$sender->sendMessage("84 is even");
				} elseif ($number == 85) {
					$sender->sendMessage("85 is odd");
				} elseif ($number == 86) {
					$sender->sendMessage("86 is even");
				} elseif ($number == 87) {
					$sender->sendMessage("87 is odd");
				} elseif ($number == 88) {
					$sender->sendMessage("88 is even");
				} elseif ($number == 89) {
					$sender->sendMessage("89 is odd");
				} elseif ($number == 90) {
					$sender->sendMessage("90 is even");
				} elseif ($number == 91) {
					$sender->sendMessage("91 is odd");
				} elseif ($number == 92) {
					$sender->sendMessage("92 is even");
				} elseif ($number == 93) {
					$sender->sendMessage("93 is odd");
				} elseif ($number == 94) {
					$sender->sendMessage("94 is even");
				} elseif ($number == 95) {
					$sender->sendMessage("95 is odd");
				} elseif ($number == 96) {
					$sender->sendMessage("96 is even");
				} elseif ($number == 97) {
					$sender->sendMessage("97 is odd");
				} elseif ($number == 98) {
					$sender->sendMessage("98 is even");
				} elseif ($number == 99) {
					$sender->sendMessage("99 is odd");
				} elseif ($number == 100) {
					$sender->sendMessage("100 is even");
				} elseif ($number == 101) {
					$sender->sendMessage("101 is odd");
				} elseif ($number == 102) {
					$sender->sendMessage("102 is even");
				} elseif ($number == 103) {
					$sender->sendMessage("103 is odd");
				} elseif ($number == 104) {
					$sender->sendMessage("104 is even");
				} elseif ($number == 105) {
					$sender->sendMessage("105 is odd");
				} elseif ($number == 106) {
					$sender->sendMessage("106 is even");
				} elseif ($number == 107) {
					$sender->sendMessage("107 is odd");
				} elseif ($number == 108) {
					$sender->sendMessage("108 is even");
				} elseif ($number == 109) {
					$sender->sendMessage("109 is odd");
				} elseif ($number == 110) {
					$sender->sendMessage("110 is even");
				} elseif ($number == 111) {
					$sender->sendMessage("111 is odd");
				} elseif ($number == 112) {
					$sender->sendMessage("112 is even");
				} elseif ($number == 113) {
					$sender->sendMessage("113 is odd");
				} elseif ($number == 114) {
					$sender->sendMessage("114 is even");
				} elseif ($number == 115) {
					$sender->sendMessage("115 is odd");
				} elseif ($number == 116) {
					$sender->sendMessage("116 is even");
				} elseif ($number == 117) {
					$sender->sendMessage("117 is odd");
				} elseif ($number == 118) {
					$sender->sendMessage("118 is even");
				} elseif ($number == 119) {
					$sender->sendMessage("119 is odd");
				} elseif ($number == 120) {
					$sender->sendMessage("120 is even");
				} elseif ($number == 121) {
					$sender->sendMessage("121 is odd");
				} elseif ($number == 122) {
					$sender->sendMessage("122 is even");
				} elseif ($number == 123) {
					$sender->sendMessage("123 is odd");
				} elseif ($number == 124) {
					$sender->sendMessage("124 is even");
				} elseif ($number == 125) {
					$sender->sendMessage("125 is odd");
				} elseif ($number == 126) {
					$sender->sendMessage("126 is even");
				} elseif ($number == 127) {
					$sender->sendMessage("127 is odd");
				} elseif ($number == 128) {
					$sender->sendMessage("128 is even");
				} elseif ($number == 129) {
					$sender->sendMessage("129 is odd");
				} elseif ($number == 130) {
					$sender->sendMessage("130 is even");
				} elseif ($number == 131) {
					$sender->sendMessage("131 is odd");
				} elseif ($number == 132) {
					$sender->sendMessage("132 is even");
				} elseif ($number == 133) {
					$sender->sendMessage("133 is odd");
				} elseif ($number == 134) {
					$sender->sendMessage("134 is even");
				} elseif ($number == 135) {
					$sender->sendMessage("135 is odd");
				} elseif ($number == 136) {
					$sender->sendMessage("136 is even");
				} elseif ($number == 137) {
					$sender->sendMessage("137 is odd");
				} elseif ($number == 138) {
					$sender->sendMessage("138 is even");
				} elseif ($number == 139) {
					$sender->sendMessage("139 is odd");
				} elseif ($number == 140) {
					$sender->sendMessage("140 is even");
				} elseif ($number == 141) {
					$sender->sendMessage("141 is odd");
				} elseif ($number == 142) {
					$sender->sendMessage("142 is even");
				} elseif ($number == 143) {
					$sender->sendMessage("143 is odd");
				} elseif ($number == 144) {
					$sender->sendMessage("144 is even");
				} elseif ($number == 145) {
					$sender->sendMessage("145 is odd");
				} elseif ($number == 146) {
					$sender->sendMessage("146 is even");
				} elseif ($number == 147) {
					$sender->sendMessage("147 is odd");
				} elseif ($number == 148) {
					$sender->sendMessage("148 is even");
				} elseif ($number == 149) {
					$sender->sendMessage("149 is odd");
				} elseif ($number == 150) {
					$sender->sendMessage("150 is even");
				} elseif ($number == 151) {
					$sender->sendMessage("151 is odd");
				} elseif ($number == 152) {
					$sender->sendMessage("152 is even");
				} elseif ($number == 153) {
					$sender->sendMessage("153 is odd");
				} elseif ($number == 154) {
					$sender->sendMessage("154 is even");
				} elseif ($number == 155) {
					$sender->sendMessage("155 is odd");
				} elseif ($number == 156) {
					$sender->sendMessage("156 is even");
				} elseif ($number == 157) {
					$sender->sendMessage("157 is odd");
				} elseif ($number == 158) {
					$sender->sendMessage("158 is even");
				} elseif ($number == 159) {
					$sender->sendMessage("159 is odd");
				} elseif ($number == 160) {
					$sender->sendMessage("160 is even");
				} elseif ($number == 161) {
					$sender->sendMessage("161 is odd");
				} elseif ($number == 162) {
					$sender->sendMessage("162 is even");
				} elseif ($number == 163) {
					$sender->sendMessage("163 is odd");
				} elseif ($number == 164) {
					$sender->sendMessage("164 is even");
				} elseif ($number == 165) {
					$sender->sendMessage("165 is odd");
				} elseif ($number == 166) {
					$sender->sendMessage("166 is even");
				} elseif ($number == 167) {
					$sender->sendMessage("167 is odd");
				} elseif ($number == 168) {
					$sender->sendMessage("168 is even");
				} elseif ($number == 169) {
					$sender->sendMessage("169 is odd");
				} elseif ($number == 170) {
					$sender->sendMessage("170 is even");
				} elseif ($number == 171) {
					$sender->sendMessage("171 is odd");
				} elseif ($number == 172) {
					$sender->sendMessage("172 is even");
				} elseif ($number == 173) {
					$sender->sendMessage("173 is odd");
				} elseif ($number == 174) {
					$sender->sendMessage("174 is even");
				} elseif ($number == 175) {
					$sender->sendMessage("175 is odd");
				} elseif ($number == 176) {
					$sender->sendMessage("176 is even");
				} elseif ($number == 177) {
					$sender->sendMessage("177 is odd");
				} elseif ($number == 178) {
					$sender->sendMessage("178 is even");
				} elseif ($number == 179) {
					$sender->sendMessage("179 is odd");
				} elseif ($number == 180) {
					$sender->sendMessage("180 is even");
				} elseif ($number == 181) {
					$sender->sendMessage("181 is odd");
				} elseif ($number == 182) {
					$sender->sendMessage("182 is even");
				} elseif ($number == 183) {
					$sender->sendMessage("183 is odd");
				} elseif ($number == 184) {
					$sender->sendMessage("184 is even");
				} elseif ($number == 185) {
					$sender->sendMessage("185 is odd");
				} elseif ($number == 186) {
					$sender->sendMessage("186 is even");
				} elseif ($number == 187) {
					$sender->sendMessage("187 is odd");
				} elseif ($number == 188) {
					$sender->sendMessage("188 is even");
				} elseif ($number == 189) {
					$sender->sendMessage("189 is odd");
				} elseif ($number == 190) {
					$sender->sendMessage("190 is even");
				} elseif ($number == 191) {
					$sender->sendMessage("191 is odd");
				} elseif ($number == 192) {
					$sender->sendMessage("192 is even");
				} elseif ($number == 193) {
					$sender->sendMessage("193 is odd");
				} elseif ($number == 194) {
					$sender->sendMessage("194 is even");
				} elseif ($number == 195) {
					$sender->sendMessage("195 is odd");
				} elseif ($number == 196) {
					$sender->sendMessage("196 is even");
				} elseif ($number == 197) {
					$sender->sendMessage("197 is odd");
				} elseif ($number == 198) {
					$sender->sendMessage("198 is even");
				} elseif ($number == 199) {
					$sender->sendMessage("199 is odd");
				} elseif ($number == 200) {
					$sender->sendMessage("200 is even");
				} elseif ($number == 201) {
					$sender->sendMessage("201 is odd");
				} elseif ($number == 202) {
					$sender->sendMessage("202 is even");
				} elseif ($number == 203) {
					$sender->sendMessage("203 is odd");
				} elseif ($number == 204) {
					$sender->sendMessage("204 is even");
				} elseif ($number == 205) {
					$sender->sendMessage("205 is odd");
				} elseif ($number == 206) {
					$sender->sendMessage("206 is even");
				} elseif ($number == 207) {
					$sender->sendMessage("207 is odd");
				} elseif ($number == 208) {
					$sender->sendMessage("208 is even");
				} elseif ($number == 209) {
					$sender->sendMessage("209 is odd");
				} elseif ($number == 210) {
					$sender->sendMessage("210 is even");
				} elseif ($number == 211) {
					$sender->sendMessage("211 is odd");
				} elseif ($number == 212) {
					$sender->sendMessage("212 is even");
				} elseif ($number == 213) {
					$sender->sendMessage("213 is odd");
				} elseif ($number == 214) {
					$sender->sendMessage("214 is even");
				} elseif ($number == 215) {
					$sender->sendMessage("215 is odd");
				} elseif ($number == 216) {
					$sender->sendMessage("216 is even");
				} elseif ($number == 217) {
					$sender->sendMessage("217 is odd");
				} elseif ($number == 218) {
					$sender->sendMessage("218 is even");
				} elseif ($number == 219) {
					$sender->sendMessage("219 is odd");
				} elseif ($number == 220) {
					$sender->sendMessage("220 is even");
				} elseif ($number == 221) {
					$sender->sendMessage("221 is odd");
				} elseif ($number == 222) {
					$sender->sendMessage("222 is even");
				} elseif ($number == 223) {
					$sender->sendMessage("223 is odd");
				} elseif ($number == 224) {
					$sender->sendMessage("224 is even");
				} elseif ($number == 225) {
					$sender->sendMessage("225 is odd");
				} elseif ($number == 226) {
					$sender->sendMessage("226 is even");
				} elseif ($number == 227) {
					$sender->sendMessage("227 is odd");
				} elseif ($number == 228) {
					$sender->sendMessage("228 is even");
				} elseif ($number == 229) {
					$sender->sendMessage("229 is odd");
				} elseif ($number == 230) {
					$sender->sendMessage("230 is even");
				} elseif ($number == 231) {
					$sender->sendMessage("231 is odd");
				} elseif ($number == 232) {
					$sender->sendMessage("232 is even");
				} elseif ($number == 233) {
					$sender->sendMessage("233 is odd");
				} elseif ($number == 234) {
					$sender->sendMessage("234 is even");
				} elseif ($number == 235) {
					$sender->sendMessage("235 is odd");
				} elseif ($number == 236) {
					$sender->sendMessage("236 is even");
				} elseif ($number == 237) {
					$sender->sendMessage("237 is odd");
				} elseif ($number == 238) {
					$sender->sendMessage("238 is even");
				} elseif ($number == 239) {
					$sender->sendMessage("239 is odd");
				} elseif ($number == 240) {
					$sender->sendMessage("240 is even");
				} elseif ($number == 241) {
					$sender->sendMessage("241 is odd");
				} elseif ($number == 242) {
					$sender->sendMessage("242 is even");
				} elseif ($number == 243) {
					$sender->sendMessage("243 is odd");
				} elseif ($number == 244) {
					$sender->sendMessage("244 is even");
				} elseif ($number == 245) {
					$sender->sendMessage("245 is odd");
				} elseif ($number == 246) {
					$sender->sendMessage("246 is even");
				} elseif ($number == 247) {
					$sender->sendMessage("247 is odd");
				} elseif ($number == 248) {
					$sender->sendMessage("248 is even");
				} elseif ($number == 249) {
					$sender->sendMessage("249 is odd");
				} elseif ($number == 250) {
					$sender->sendMessage("250 is even");
				} elseif ($number == 251) {
					$sender->sendMessage("251 is odd");
				} elseif ($number == 252) {
					$sender->sendMessage("252 is even");
				} elseif ($number == 253) {
					$sender->sendMessage("253 is odd");
				} elseif ($number == 254) {
					$sender->sendMessage("254 is even");
				} elseif ($number == 255) {
					$sender->sendMessage("255 is odd");
				} elseif ($number == 256) {
					$sender->sendMessage("256 is even");
				} elseif ($number == 257) {
					$sender->sendMessage("257 is odd");
				} elseif ($number == 258) {
					$sender->sendMessage("258 is even");
				} elseif ($number == 259) {
					$sender->sendMessage("259 is odd");
				} elseif ($number == 260) {
					$sender->sendMessage("260 is even");
				} elseif ($number == 261) {
					$sender->sendMessage("261 is odd");
				} elseif ($number == 262) {
					$sender->sendMessage("262 is even");
				} elseif ($number == 263) {
					$sender->sendMessage("263 is odd");
				} elseif ($number == 264) {
					$sender->sendMessage("264 is even");
				} elseif ($number == 265) {
					$sender->sendMessage("265 is odd");
				} elseif ($number == 266) {
					$sender->sendMessage("266 is even");
				} elseif ($number == 267) {
					$sender->sendMessage("267 is odd");
				} elseif ($number == 268) {
					$sender->sendMessage("268 is even");
				} elseif ($number == 269) {
					$sender->sendMessage("269 is odd");
				} elseif ($number == 270) {
					$sender->sendMessage("270 is even");
				} elseif ($number == 271) {
					$sender->sendMessage("271 is odd");
				} elseif ($number == 272) {
					$sender->sendMessage("272 is even");
				} elseif ($number == 273) {
					$sender->sendMessage("273 is odd");
				} elseif ($number == 274) {
					$sender->sendMessage("274 is even");
				} elseif ($number == 275) {
					$sender->sendMessage("275 is odd");
				} elseif ($number == 276) {
					$sender->sendMessage("276 is even");
				} elseif ($number == 277) {
					$sender->sendMessage("277 is odd");
				} elseif ($number == 278) {
					$sender->sendMessage("278 is even");
				} elseif ($number == 279) {
					$sender->sendMessage("279 is odd");
				} elseif ($number == 280) {
					$sender->sendMessage("280 is even");
				} elseif ($number == 281) {
					$sender->sendMessage("281 is odd");
				} elseif ($number == 282) {
					$sender->sendMessage("282 is even");
				} elseif ($number == 283) {
					$sender->sendMessage("283 is odd");
				} elseif ($number == 284) {
					$sender->sendMessage("284 is even");
				} elseif ($number == 285) {
					$sender->sendMessage("285 is odd");
				} elseif ($number == 286) {
					$sender->sendMessage("286 is even");
				} elseif ($number == 287) {
					$sender->sendMessage("287 is odd");
				} elseif ($number == 288) {
					$sender->sendMessage("288 is even");
				} elseif ($number == 289) {
					$sender->sendMessage("289 is odd");
				} elseif ($number == 290) {
					$sender->sendMessage("290 is even");
				} elseif ($number == 291) {
					$sender->sendMessage("291 is odd");
				} elseif ($number == 292) {
					$sender->sendMessage("292 is even");
				} elseif ($number == 293) {
					$sender->sendMessage("293 is odd");
				} elseif ($number == 294) {
					$sender->sendMessage("294 is even");
				} elseif ($number == 295) {
					$sender->sendMessage("295 is odd");
				} elseif ($number == 296) {
					$sender->sendMessage("296 is even");
				} elseif ($number == 297) {
					$sender->sendMessage("297 is odd");
				} elseif ($number == 298) {
					$sender->sendMessage("298 is even");
				} elseif ($number == 299) {
					$sender->sendMessage("299 is odd");
				} elseif ($number == 300) {
					$sender->sendMessage("300 is even");
				} elseif ($number == 301) {
					$sender->sendMessage("301 is odd");
				} elseif ($number == 302) {
					$sender->sendMessage("302 is even");
				} elseif ($number == 303) {
					$sender->sendMessage("303 is odd");
				} elseif ($number == 304) {
					$sender->sendMessage("304 is even");
				} elseif ($number == 305) {
					$sender->sendMessage("305 is odd");
				} elseif ($number == 306) {
					$sender->sendMessage("306 is even");
				} elseif ($number == 307) {
					$sender->sendMessage("307 is odd");
				} elseif ($number == 308) {
					$sender->sendMessage("308 is even");
				} elseif ($number == 309) {
					$sender->sendMessage("309 is odd");
				} elseif ($number == 310) {
					$sender->sendMessage("310 is even");
				} elseif ($number == 311) {
					$sender->sendMessage("311 is odd");
				} elseif ($number == 312) {
					$sender->sendMessage("312 is even");
				} elseif ($number == 313) {
					$sender->sendMessage("313 is odd");
				} elseif ($number == 314) {
					$sender->sendMessage("314 is even");
				} elseif ($number == 315) {
					$sender->sendMessage("315 is odd");
				} elseif ($number == 316) {
					$sender->sendMessage("316 is even");
				} elseif ($number == 317) {
					$sender->sendMessage("317 is odd");
				} elseif ($number == 318) {
					$sender->sendMessage("318 is even");
				} elseif ($number == 319) {
					$sender->sendMessage("319 is odd");
				} elseif ($number == 320) {
					$sender->sendMessage("320 is even");
				} elseif ($number == 321) {
					$sender->sendMessage("321 is odd");
				} elseif ($number == 322) {
					$sender->sendMessage("322 is even");
				} elseif ($number == 323) {
					$sender->sendMessage("323 is odd");
				} elseif ($number == 324) {
					$sender->sendMessage("324 is even");
				} elseif ($number == 325) {
					$sender->sendMessage("325 is odd");
				} elseif ($number == 326) {
					$sender->sendMessage("326 is even");
				} elseif ($number == 327) {
					$sender->sendMessage("327 is odd");
				} elseif ($number == 328) {
					$sender->sendMessage("328 is even");
				} elseif ($number == 329) {
					$sender->sendMessage("329 is odd");
				} elseif ($number == 330) {
					$sender->sendMessage("330 is even");
				} elseif ($number == 331) {
					$sender->sendMessage("331 is odd");
				} elseif ($number == 332) {
					$sender->sendMessage("332 is even");
				} elseif ($number == 333) {
					$sender->sendMessage("333 is odd");
				} elseif ($number == 334) {
					$sender->sendMessage("334 is even");
				} elseif ($number == 335) {
					$sender->sendMessage("335 is odd");
				} elseif ($number == 336) {
					$sender->sendMessage("336 is even");
				} elseif ($number == 337) {
					$sender->sendMessage("337 is odd");
				} elseif ($number == 338) {
					$sender->sendMessage("338 is even");
				} elseif ($number == 339) {
					$sender->sendMessage("339 is odd");
				} elseif ($number == 340) {
					$sender->sendMessage("340 is even");
				} elseif ($number == 341) {
					$sender->sendMessage("341 is odd");
				} elseif ($number == 342) {
					$sender->sendMessage("342 is even");
				} elseif ($number == 343) {
					$sender->sendMessage("343 is odd");
				} elseif ($number == 344) {
					$sender->sendMessage("344 is even");
				} elseif ($number == 345) {
					$sender->sendMessage("345 is odd");
				} elseif ($number == 346) {
					$sender->sendMessage("346 is even");
				} elseif ($number == 347) {
					$sender->sendMessage("347 is odd");
				} elseif ($number == 348) {
					$sender->sendMessage("348 is even");
				} elseif ($number == 349) {
					$sender->sendMessage("349 is odd");
				} elseif ($number == 350) {
					$sender->sendMessage("350 is even");
				} elseif ($number == 351) {
					$sender->sendMessage("351 is odd");
				} elseif ($number == 352) {
					$sender->sendMessage("352 is even");
				} elseif ($number == 353) {
					$sender->sendMessage("353 is odd");
				} elseif ($number == 354) {
					$sender->sendMessage("354 is even");
				} elseif ($number == 355) {
					$sender->sendMessage("355 is odd");
				} elseif ($number == 356) {
					$sender->sendMessage("356 is even");
				} elseif ($number == 357) {
					$sender->sendMessage("357 is odd");
				} elseif ($number == 358) {
					$sender->sendMessage("358 is even");
				} elseif ($number == 359) {
					$sender->sendMessage("359 is odd");
				} elseif ($number == 360) {
					$sender->sendMessage("360 is even");
				} elseif ($number == 361) {
					$sender->sendMessage("361 is odd");
				} elseif ($number == 362) {
					$sender->sendMessage("362 is even");
				} elseif ($number == 363) {
					$sender->sendMessage("363 is odd");
				} elseif ($number == 364) {
					$sender->sendMessage("364 is even");
				} elseif ($number == 365) {
					$sender->sendMessage("365 is odd");
				} elseif ($number == 366) {
					$sender->sendMessage("366 is even");
				} elseif ($number == 367) {
					$sender->sendMessage("367 is odd");
				} elseif ($number == 368) {
					$sender->sendMessage("368 is even");
				} elseif ($number == 369) {
					$sender->sendMessage("369 is odd");
				} elseif ($number == 370) {
					$sender->sendMessage("370 is even");
				} elseif ($number == 371) {
					$sender->sendMessage("371 is odd");
				} elseif ($number == 372) {
					$sender->sendMessage("372 is even");
				} elseif ($number == 373) {
					$sender->sendMessage("373 is odd");
				} elseif ($number == 374) {
					$sender->sendMessage("374 is even");
				} elseif ($number == 375) {
					$sender->sendMessage("375 is odd");
				} elseif ($number == 376) {
					$sender->sendMessage("376 is even");
				} elseif ($number == 377) {
					$sender->sendMessage("377 is odd");
				} elseif ($number == 378) {
					$sender->sendMessage("378 is even");
				} elseif ($number == 379) {
					$sender->sendMessage("379 is odd");
				} elseif ($number == 380) {
					$sender->sendMessage("380 is even");
				} elseif ($number == 381) {
					$sender->sendMessage("381 is odd");
				} elseif ($number == 382) {
					$sender->sendMessage("382 is even");
				} elseif ($number == 383) {
					$sender->sendMessage("383 is odd");
				} elseif ($number == 384) {
					$sender->sendMessage("384 is even");
				} elseif ($number == 385) {
					$sender->sendMessage("385 is odd");
				} elseif ($number == 386) {
					$sender->sendMessage("386 is even");
				} elseif ($number == 387) {
					$sender->sendMessage("387 is odd");
				} elseif ($number == 388) {
					$sender->sendMessage("388 is even");
				} elseif ($number == 389) {
					$sender->sendMessage("389 is odd");
				} elseif ($number == 390) {
					$sender->sendMessage("390 is even");
				} elseif ($number == 391) {
					$sender->sendMessage("391 is odd");
				} elseif ($number == 392) {
					$sender->sendMessage("392 is even");
				} elseif ($number == 393) {
					$sender->sendMessage("393 is odd");
				} elseif ($number == 394) {
					$sender->sendMessage("394 is even");
				} elseif ($number == 395) {
					$sender->sendMessage("395 is odd");
				} elseif ($number == 396) {
					$sender->sendMessage("396 is even");
				} elseif ($number == 397) {
					$sender->sendMessage("397 is odd");
				} elseif ($number == 398) {
					$sender->sendMessage("398 is even");
				} elseif ($number == 399) {
					$sender->sendMessage("399 is odd");
				} elseif ($number == 400) {
					$sender->sendMessage("400 is even");
				} elseif ($number == 401) {
					$sender->sendMessage("401 is odd");
				} elseif ($number == 402) {
					$sender->sendMessage("402 is even");
				} elseif ($number == 403) {
					$sender->sendMessage("403 is odd");
				} elseif ($number == 404) {
					$sender->sendMessage("404 is even");
				} elseif ($number == 405) {
					$sender->sendMessage("405 is odd");
				} elseif ($number == 406) {
					$sender->sendMessage("406 is even");
				} elseif ($number == 407) {
					$sender->sendMessage("407 is odd");
				} elseif ($number == 408) {
					$sender->sendMessage("408 is even");
				} elseif ($number == 409) {
					$sender->sendMessage("409 is odd");
				} elseif ($number == 410) {
					$sender->sendMessage("410 is even");
				} elseif ($number == 411) {
					$sender->sendMessage("411 is odd");
				} elseif ($number == 412) {
					$sender->sendMessage("412 is even");
				} elseif ($number == 413) {
					$sender->sendMessage("413 is odd");
				} elseif ($number == 414) {
					$sender->sendMessage("414 is even");
				} elseif ($number == 415) {
					$sender->sendMessage("415 is odd");
				} elseif ($number == 416) {
					$sender->sendMessage("416 is even");
				} elseif ($number == 417) {
					$sender->sendMessage("417 is odd");
				} elseif ($number == 418) {
					$sender->sendMessage("418 is even");
				} elseif ($number == 419) {
					$sender->sendMessage("419 is odd");
				} elseif ($number == 420) {
					$sender->sendMessage("420 is even");
				} elseif ($number == 421) {
					$sender->sendMessage("421 is odd");
				} elseif ($number == 422) {
					$sender->sendMessage("422 is even");
				} elseif ($number == 423) {
					$sender->sendMessage("423 is odd");
				} elseif ($number == 424) {
					$sender->sendMessage("424 is even");
				} elseif ($number == 425) {
					$sender->sendMessage("425 is odd");
				} elseif ($number == 426) {
					$sender->sendMessage("426 is even");
				} elseif ($number == 427) {
					$sender->sendMessage("427 is odd");
				} elseif ($number == 428) {
					$sender->sendMessage("428 is even");
				} elseif ($number == 429) {
					$sender->sendMessage("429 is odd");
				} elseif ($number == 430) {
					$sender->sendMessage("430 is even");
				} elseif ($number == 431) {
					$sender->sendMessage("431 is odd");
				} elseif ($number == 432) {
					$sender->sendMessage("432 is even");
				} elseif ($number == 433) {
					$sender->sendMessage("433 is odd");
				} elseif ($number == 434) {
					$sender->sendMessage("434 is even");
				} elseif ($number == 435) {
					$sender->sendMessage("435 is odd");
				} elseif ($number == 436) {
					$sender->sendMessage("436 is even");
				} elseif ($number == 437) {
					$sender->sendMessage("437 is odd");
				} elseif ($number == 438) {
					$sender->sendMessage("438 is even");
				} elseif ($number == 439) {
					$sender->sendMessage("439 is odd");
				} elseif ($number == 440) {
					$sender->sendMessage("440 is even");
				} elseif ($number == 441) {
					$sender->sendMessage("441 is odd");
				} elseif ($number == 442) {
					$sender->sendMessage("442 is even");
				} elseif ($number == 443) {
					$sender->sendMessage("443 is odd");
				} elseif ($number == 444) {
					$sender->sendMessage("444 is even");
				} elseif ($number == 445) {
					$sender->sendMessage("445 is odd");
				} elseif ($number == 446) {
					$sender->sendMessage("446 is even");
				} elseif ($number == 447) {
					$sender->sendMessage("447 is odd");
				} elseif ($number == 448) {
					$sender->sendMessage("448 is even");
				} elseif ($number == 449) {
					$sender->sendMessage("449 is odd");
				} elseif ($number == 450) {
					$sender->sendMessage("450 is even");
				} elseif ($number == 451) {
					$sender->sendMessage("451 is odd");
				} elseif ($number == 452) {
					$sender->sendMessage("452 is even");
				} elseif ($number == 453) {
					$sender->sendMessage("453 is odd");
				} elseif ($number == 454) {
					$sender->sendMessage("454 is even");
				} elseif ($number == 455) {
					$sender->sendMessage("455 is odd");
				} elseif ($number == 456) {
					$sender->sendMessage("456 is even");
				} elseif ($number == 457) {
					$sender->sendMessage("457 is odd");
				} elseif ($number == 458) {
					$sender->sendMessage("458 is even");
				} elseif ($number == 459) {
					$sender->sendMessage("459 is odd");
				} elseif ($number == 460) {
					$sender->sendMessage("460 is even");
				} elseif ($number == 461) {
					$sender->sendMessage("461 is odd");
				} elseif ($number == 462) {
					$sender->sendMessage("462 is even");
				} elseif ($number == 463) {
					$sender->sendMessage("463 is odd");
				} elseif ($number == 464) {
					$sender->sendMessage("464 is even");
				} elseif ($number == 465) {
					$sender->sendMessage("465 is odd");
				} elseif ($number == 466) {
					$sender->sendMessage("466 is even");
				} elseif ($number == 467) {
					$sender->sendMessage("467 is odd");
				} elseif ($number == 468) {
					$sender->sendMessage("468 is even");
				} elseif ($number == 469) {
					$sender->sendMessage("469 is odd");
				} elseif ($number == 470) {
					$sender->sendMessage("470 is even");
				} elseif ($number == 471) {
					$sender->sendMessage("471 is odd");
				} elseif ($number == 472) {
					$sender->sendMessage("472 is even");
				} elseif ($number == 473) {
					$sender->sendMessage("473 is odd");
				} elseif ($number == 474) {
					$sender->sendMessage("474 is even");
				} elseif ($number == 475) {
					$sender->sendMessage("475 is odd");
				} elseif ($number == 476) {
					$sender->sendMessage("476 is even");
				} elseif ($number == 477) {
					$sender->sendMessage("477 is odd");
				} elseif ($number == 478) {
					$sender->sendMessage("478 is even");
				} elseif ($number == 479) {
					$sender->sendMessage("479 is odd");
				} elseif ($number == 480) {
					$sender->sendMessage("480 is even");
				} elseif ($number == 481) {
					$sender->sendMessage("481 is odd");
				} elseif ($number == 482) {
					$sender->sendMessage("482 is even");
				} elseif ($number == 483) {
					$sender->sendMessage("483 is odd");
				} elseif ($number == 484) {
					$sender->sendMessage("484 is even");
				} elseif ($number == 485) {
					$sender->sendMessage("485 is odd");
				} elseif ($number == 486) {
					$sender->sendMessage("486 is even");
				} elseif ($number == 487) {
					$sender->sendMessage("487 is odd");
				} elseif ($number == 488) {
					$sender->sendMessage("488 is even");
				} elseif ($number == 489) {
					$sender->sendMessage("489 is odd");
				} elseif ($number == 490) {
					$sender->sendMessage("490 is even");
				} elseif ($number == 491) {
					$sender->sendMessage("491 is odd");
				} elseif ($number == 492) {
					$sender->sendMessage("492 is even");
				} elseif ($number == 493) {
					$sender->sendMessage("493 is odd");
				} elseif ($number == 494) {
					$sender->sendMessage("494 is even");
				} elseif ($number == 495) {
					$sender->sendMessage("495 is odd");
				} elseif ($number == 496) {
					$sender->sendMessage("496 is even");
				} elseif ($number == 497) {
					$sender->sendMessage("497 is odd");
				} elseif ($number == 498) {
					$sender->sendMessage("498 is even");
				} elseif ($number == 499) {
					$sender->sendMessage("499 is odd");
				} elseif ($number == 500) {
					$sender->sendMessage("500 is even");
				} elseif ($number == 501) {
					$sender->sendMessage("501 is odd");
				} elseif ($number == 502) {
					$sender->sendMessage("502 is even");
				} elseif ($number == 503) {
					$sender->sendMessage("503 is odd");
				} elseif ($number == 504) {
					$sender->sendMessage("504 is even");
				} elseif ($number == 505) {
					$sender->sendMessage("505 is odd");
				} elseif ($number == 506) {
					$sender->sendMessage("506 is even");
				} elseif ($number == 507) {
					$sender->sendMessage("507 is odd");
				} elseif ($number == 508) {
					$sender->sendMessage("508 is even");
				} elseif ($number == 509) {
					$sender->sendMessage("509 is odd");
				} elseif ($number == 510) {
					$sender->sendMessage("510 is even");
				} elseif ($number == 511) {
					$sender->sendMessage("511 is odd");
				} elseif ($number == 512) {
					$sender->sendMessage("512 is even");
				} elseif ($number == 513) {
					$sender->sendMessage("513 is odd");
				} elseif ($number == 514) {
					$sender->sendMessage("514 is even");
				} elseif ($number == 515) {
					$sender->sendMessage("515 is odd");
				} elseif ($number == 516) {
					$sender->sendMessage("516 is even");
				} elseif ($number == 517) {
					$sender->sendMessage("517 is odd");
				} elseif ($number == 518) {
					$sender->sendMessage("518 is even");
				} elseif ($number == 519) {
					$sender->sendMessage("519 is odd");
				} elseif ($number == 520) {
					$sender->sendMessage("520 is even");
				} elseif ($number == 521) {
					$sender->sendMessage("521 is odd");
				} elseif ($number == 522) {
					$sender->sendMessage("522 is even");
				} elseif ($number == 523) {
					$sender->sendMessage("523 is odd");
				} elseif ($number == 524) {
					$sender->sendMessage("524 is even");
				} elseif ($number == 525) {
					$sender->sendMessage("525 is odd");
				} elseif ($number == 526) {
					$sender->sendMessage("526 is even");
				} elseif ($number == 527) {
					$sender->sendMessage("527 is odd");
				} elseif ($number == 528) {
					$sender->sendMessage("528 is even");
				} elseif ($number == 529) {
					$sender->sendMessage("529 is odd");
				} elseif ($number == 530) {
					$sender->sendMessage("530 is even");
				} elseif ($number == 531) {
					$sender->sendMessage("531 is odd");
				} elseif ($number == 532) {
					$sender->sendMessage("532 is even");
				} elseif ($number == 533) {
					$sender->sendMessage("533 is odd");
				} elseif ($number == 534) {
					$sender->sendMessage("534 is even");
				} elseif ($number == 535) {
					$sender->sendMessage("535 is odd");
				} elseif ($number == 536) {
					$sender->sendMessage("536 is even");
				} elseif ($number == 537) {
					$sender->sendMessage("537 is odd");
				} elseif ($number == 538) {
					$sender->sendMessage("538 is even");
				} elseif ($number == 539) {
					$sender->sendMessage("539 is odd");
				} elseif ($number == 540) {
					$sender->sendMessage("540 is even");
				} elseif ($number == 541) {
					$sender->sendMessage("541 is odd");
				} elseif ($number == 542) {
					$sender->sendMessage("542 is even");
				} elseif ($number == 543) {
					$sender->sendMessage("543 is odd");
				} elseif ($number == 544) {
					$sender->sendMessage("544 is even");
				} elseif ($number == 545) {
					$sender->sendMessage("545 is odd");
				} elseif ($number == 546) {
					$sender->sendMessage("546 is even");
				} elseif ($number == 547) {
					$sender->sendMessage("547 is odd");
				} elseif ($number == 548) {
					$sender->sendMessage("548 is even");
				} elseif ($number == 549) {
					$sender->sendMessage("549 is odd");
				} elseif ($number == 550) {
					$sender->sendMessage("550 is even");
				} elseif ($number == 551) {
					$sender->sendMessage("551 is odd");
				} elseif ($number == 552) {
					$sender->sendMessage("552 is even");
				} elseif ($number == 553) {
					$sender->sendMessage("553 is odd");
				} elseif ($number == 554) {
					$sender->sendMessage("554 is even");
				} elseif ($number == 555) {
					$sender->sendMessage("555 is odd");
				} elseif ($number == 556) {
					$sender->sendMessage("556 is even");
				} elseif ($number == 557) {
					$sender->sendMessage("557 is odd");
				} elseif ($number == 558) {
					$sender->sendMessage("558 is even");
				} elseif ($number == 559) {
					$sender->sendMessage("559 is odd");
				} elseif ($number == 560) {
					$sender->sendMessage("560 is even");
				} elseif ($number == 561) {
					$sender->sendMessage("561 is odd");
				} elseif ($number == 562) {
					$sender->sendMessage("562 is even");
				} elseif ($number == 563) {
					$sender->sendMessage("563 is odd");
				} elseif ($number == 564) {
					$sender->sendMessage("564 is even");
				} elseif ($number == 565) {
					$sender->sendMessage("565 is odd");
				} elseif ($number == 566) {
					$sender->sendMessage("566 is even");
				} elseif ($number == 567) {
					$sender->sendMessage("567 is odd");
				} elseif ($number == 568) {
					$sender->sendMessage("568 is even");
				} elseif ($number == 569) {
					$sender->sendMessage("569 is odd");
				} elseif ($number == 570) {
					$sender->sendMessage("570 is even");
				} elseif ($number == 571) {
					$sender->sendMessage("571 is odd");
				} elseif ($number == 572) {
					$sender->sendMessage("572 is even");
				} elseif ($number == 573) {
					$sender->sendMessage("573 is odd");
				} elseif ($number == 574) {
					$sender->sendMessage("574 is even");
				} elseif ($number == 575) {
					$sender->sendMessage("575 is odd");
				} elseif ($number == 576) {
					$sender->sendMessage("576 is even");
				} elseif ($number == 577) {
					$sender->sendMessage("577 is odd");
				} elseif ($number == 578) {
					$sender->sendMessage("578 is even");
				} elseif ($number == 579) {
					$sender->sendMessage("579 is odd");
				} elseif ($number == 580) {
					$sender->sendMessage("580 is even");
				} elseif ($number == 581) {
					$sender->sendMessage("581 is odd");
				} elseif ($number == 582) {
					$sender->sendMessage("582 is even");
				} elseif ($number == 583) {
					$sender->sendMessage("583 is odd");
				} elseif ($number == 584) {
					$sender->sendMessage("584 is even");
				} elseif ($number == 585) {
					$sender->sendMessage("585 is odd");
				} elseif ($number == 586) {
					$sender->sendMessage("586 is even");
				} elseif ($number == 587) {
					$sender->sendMessage("587 is odd");
				} elseif ($number == 588) {
					$sender->sendMessage("588 is even");
				} elseif ($number == 589) {
					$sender->sendMessage("589 is odd");
				} elseif ($number == 590) {
					$sender->sendMessage("590 is even");
				} elseif ($number == 591) {
					$sender->sendMessage("591 is odd");
				} elseif ($number == 592) {
					$sender->sendMessage("592 is even");
				} elseif ($number == 593) {
					$sender->sendMessage("593 is odd");
				} elseif ($number == 594) {
					$sender->sendMessage("594 is even");
				} elseif ($number == 595) {
					$sender->sendMessage("595 is odd");
				} elseif ($number == 596) {
					$sender->sendMessage("596 is even");
				} elseif ($number == 597) {
					$sender->sendMessage("597 is odd");
				} elseif ($number == 598) {
					$sender->sendMessage("598 is even");
				} elseif ($number == 599) {
					$sender->sendMessage("599 is odd");
				} elseif ($number == 600) {
					$sender->sendMessage("600 is even");
				} elseif ($number == 601) {
					$sender->sendMessage("601 is odd");
				} elseif ($number == 602) {
					$sender->sendMessage("602 is even");
				} elseif ($number == 603) {
					$sender->sendMessage("603 is odd");
				} elseif ($number == 604) {
					$sender->sendMessage("604 is even");
				} elseif ($number == 605) {
					$sender->sendMessage("605 is odd");
				} elseif ($number == 606) {
					$sender->sendMessage("606 is even");
				} elseif ($number == 607) {
					$sender->sendMessage("607 is odd");
				} elseif ($number == 608) {
					$sender->sendMessage("608 is even");
				} elseif ($number == 609) {
					$sender->sendMessage("609 is odd");
				} elseif ($number == 610) {
					$sender->sendMessage("610 is even");
				} elseif ($number == 611) {
					$sender->sendMessage("611 is odd");
				} elseif ($number == 612) {
					$sender->sendMessage("612 is even");
				} elseif ($number == 613) {
					$sender->sendMessage("613 is odd");
				} elseif ($number == 614) {
					$sender->sendMessage("614 is even");
				} elseif ($number == 615) {
					$sender->sendMessage("615 is odd");
				} elseif ($number == 616) {
					$sender->sendMessage("616 is even");
				} elseif ($number == 617) {
					$sender->sendMessage("617 is odd");
				} elseif ($number == 618) {
					$sender->sendMessage("618 is even");
				} elseif ($number == 619) {
					$sender->sendMessage("619 is odd");
				} elseif ($number == 620) {
					$sender->sendMessage("620 is even");
				} elseif ($number == 621) {
					$sender->sendMessage("621 is odd");
				} elseif ($number == 622) {
					$sender->sendMessage("622 is even");
				} elseif ($number == 623) {
					$sender->sendMessage("623 is odd");
				} elseif ($number == 624) {
					$sender->sendMessage("624 is even");
				} elseif ($number == 625) {
					$sender->sendMessage("625 is odd");
				} elseif ($number == 626) {
					$sender->sendMessage("626 is even");
				} elseif ($number == 627) {
					$sender->sendMessage("627 is odd");
				} elseif ($number == 628) {
					$sender->sendMessage("628 is even");
				} elseif ($number == 629) {
					$sender->sendMessage("629 is odd");
				} elseif ($number == 630) {
					$sender->sendMessage("630 is even");
				} elseif ($number == 631) {
					$sender->sendMessage("631 is odd");
				} elseif ($number == 632) {
					$sender->sendMessage("632 is even");
				} elseif ($number == 633) {
					$sender->sendMessage("633 is odd");
				} elseif ($number == 634) {
					$sender->sendMessage("634 is even");
				} elseif ($number == 635) {
					$sender->sendMessage("635 is odd");
				} elseif ($number == 636) {
					$sender->sendMessage("636 is even");
				} elseif ($number == 637) {
					$sender->sendMessage("637 is odd");
				} elseif ($number == 638) {
					$sender->sendMessage("638 is even");
				} elseif ($number == 639) {
					$sender->sendMessage("639 is odd");
				} elseif ($number == 640) {
					$sender->sendMessage("640 is even");
				} elseif ($number == 641) {
					$sender->sendMessage("641 is odd");
				} elseif ($number == 642) {
					$sender->sendMessage("642 is even");
				} elseif ($number == 643) {
					$sender->sendMessage("643 is odd");
				} elseif ($number == 644) {
					$sender->sendMessage("644 is even");
				} elseif ($number == 645) {
					$sender->sendMessage("645 is odd");
				} elseif ($number == 646) {
					$sender->sendMessage("646 is even");
				} elseif ($number == 647) {
					$sender->sendMessage("647 is odd");
				} elseif ($number == 648) {
					$sender->sendMessage("648 is even");
				} elseif ($number == 649) {
					$sender->sendMessage("649 is odd");
				} elseif ($number == 650) {
					$sender->sendMessage("650 is even");
				} elseif ($number == 651) {
					$sender->sendMessage("651 is odd");
				} elseif ($number == 652) {
					$sender->sendMessage("652 is even");
				} elseif ($number == 653) {
					$sender->sendMessage("653 is odd");
				} elseif ($number == 654) {
					$sender->sendMessage("654 is even");
				} elseif ($number == 655) {
					$sender->sendMessage("655 is odd");
				} elseif ($number == 656) {
					$sender->sendMessage("656 is even");
				} elseif ($number == 657) {
					$sender->sendMessage("657 is odd");
				} elseif ($number == 658) {
					$sender->sendMessage("658 is even");
				} elseif ($number == 659) {
					$sender->sendMessage("659 is odd");
				} elseif ($number == 660) {
					$sender->sendMessage("660 is even");
				} elseif ($number == 661) {
					$sender->sendMessage("661 is odd");
				} elseif ($number == 662) {
					$sender->sendMessage("662 is even");
				} elseif ($number == 663) {
					$sender->sendMessage("663 is odd");
				} elseif ($number == 664) {
					$sender->sendMessage("664 is even");
				} elseif ($number == 665) {
					$sender->sendMessage("665 is odd");
				} elseif ($number == 666) {
					$sender->sendMessage("666 is even");
				} elseif ($number == 667) {
					$sender->sendMessage("667 is odd");
				} elseif ($number == 668) {
					$sender->sendMessage("668 is even");
				} elseif ($number == 669) {
					$sender->sendMessage("669 is odd");
				} elseif ($number == 670) {
					$sender->sendMessage("670 is even");
				} elseif ($number == 671) {
					$sender->sendMessage("671 is odd");
				} elseif ($number == 672) {
					$sender->sendMessage("672 is even");
				} elseif ($number == 673) {
					$sender->sendMessage("673 is odd");
				} elseif ($number == 674) {
					$sender->sendMessage("674 is even");
				} elseif ($number == 675) {
					$sender->sendMessage("675 is odd");
				} elseif ($number == 676) {
					$sender->sendMessage("676 is even");
				} elseif ($number == 677) {
					$sender->sendMessage("677 is odd");
				} elseif ($number == 678) {
					$sender->sendMessage("678 is even");
				} elseif ($number == 679) {
					$sender->sendMessage("679 is odd");
				} elseif ($number == 680) {
					$sender->sendMessage("680 is even");
				} elseif ($number == 681) {
					$sender->sendMessage("681 is odd");
				} elseif ($number == 682) {
					$sender->sendMessage("682 is even");
				} elseif ($number == 683) {
					$sender->sendMessage("683 is odd");
				} elseif ($number == 684) {
					$sender->sendMessage("684 is even");
				} elseif ($number == 685) {
					$sender->sendMessage("685 is odd");
				} elseif ($number == 686) {
					$sender->sendMessage("686 is even");
				} elseif ($number == 687) {
					$sender->sendMessage("687 is odd");
				} elseif ($number == 688) {
					$sender->sendMessage("688 is even");
				} elseif ($number == 689) {
					$sender->sendMessage("689 is odd");
				} elseif ($number == 690) {
					$sender->sendMessage("690 is even");
				} elseif ($number == 691) {
					$sender->sendMessage("691 is odd");
				} elseif ($number == 692) {
					$sender->sendMessage("692 is even");
				} elseif ($number == 693) {
					$sender->sendMessage("693 is odd");
				} elseif ($number == 694) {
					$sender->sendMessage("694 is even");
				} elseif ($number == 695) {
					$sender->sendMessage("695 is odd");
				} elseif ($number == 696) {
					$sender->sendMessage("696 is even");
				} elseif ($number == 697) {
					$sender->sendMessage("697 is odd");
				} elseif ($number == 698) {
					$sender->sendMessage("698 is even");
				} elseif ($number == 699) {
					$sender->sendMessage("699 is odd");
				} elseif ($number == 700) {
					$sender->sendMessage("700 is even");
				} elseif ($number == 701) {
					$sender->sendMessage("701 is odd");
				} elseif ($number == 702) {
					$sender->sendMessage("702 is even");
				} elseif ($number == 703) {
					$sender->sendMessage("703 is odd");
				} elseif ($number == 704) {
					$sender->sendMessage("704 is even");
				} elseif ($number == 705) {
					$sender->sendMessage("705 is odd");
				} elseif ($number == 706) {
					$sender->sendMessage("706 is even");
				} elseif ($number == 707) {
					$sender->sendMessage("707 is odd");
				} elseif ($number == 708) {
					$sender->sendMessage("708 is even");
				} elseif ($number == 709) {
					$sender->sendMessage("709 is odd");
				} elseif ($number == 710) {
					$sender->sendMessage("710 is even");
				} elseif ($number == 711) {
					$sender->sendMessage("711 is odd");
				} elseif ($number == 712) {
					$sender->sendMessage("712 is even");
				} elseif ($number == 713) {
					$sender->sendMessage("713 is odd");
				} elseif ($number == 714) {
					$sender->sendMessage("714 is even");
				} elseif ($number == 715) {
					$sender->sendMessage("715 is odd");
				} elseif ($number == 716) {
					$sender->sendMessage("716 is even");
				} elseif ($number == 717) {
					$sender->sendMessage("717 is odd");
				} elseif ($number == 718) {
					$sender->sendMessage("718 is even");
				} elseif ($number == 719) {
					$sender->sendMessage("719 is odd");
				} elseif ($number == 720) {
					$sender->sendMessage("720 is even");
				} elseif ($number == 721) {
					$sender->sendMessage("721 is odd");
				} elseif ($number == 722) {
					$sender->sendMessage("722 is even");
				} elseif ($number == 723) {
					$sender->sendMessage("723 is odd");
				} elseif ($number == 724) {
					$sender->sendMessage("724 is even");
				} elseif ($number == 725) {
					$sender->sendMessage("725 is odd");
				} elseif ($number == 726) {
					$sender->sendMessage("726 is even");
				} elseif ($number == 727) {
					$sender->sendMessage("727 is odd");
				} elseif ($number == 728) {
					$sender->sendMessage("728 is even");
				} elseif ($number == 729) {
					$sender->sendMessage("729 is odd");
				} elseif ($number == 730) {
					$sender->sendMessage("730 is even");
				} elseif ($number == 731) {
					$sender->sendMessage("731 is odd");
				} elseif ($number == 732) {
					$sender->sendMessage("732 is even");
				} elseif ($number == 733) {
					$sender->sendMessage("733 is odd");
				} elseif ($number == 734) {
					$sender->sendMessage("734 is even");
				} elseif ($number == 735) {
					$sender->sendMessage("735 is odd");
				} elseif ($number == 736) {
					$sender->sendMessage("736 is even");
				} elseif ($number == 737) {
					$sender->sendMessage("737 is odd");
				} elseif ($number == 738) {
					$sender->sendMessage("738 is even");
				} elseif ($number == 739) {
					$sender->sendMessage("739 is odd");
				} elseif ($number == 740) {
					$sender->sendMessage("740 is even");
				} elseif ($number == 741) {
					$sender->sendMessage("741 is odd");
				} elseif ($number == 742) {
					$sender->sendMessage("742 is even");
				} elseif ($number == 743) {
					$sender->sendMessage("743 is odd");
				} elseif ($number == 744) {
					$sender->sendMessage("744 is even");
				} elseif ($number == 745) {
					$sender->sendMessage("745 is odd");
				} elseif ($number == 746) {
					$sender->sendMessage("746 is even");
				} elseif ($number == 747) {
					$sender->sendMessage("747 is odd");
				} elseif ($number == 748) {
					$sender->sendMessage("748 is even");
				} elseif ($number == 749) {
					$sender->sendMessage("749 is odd");
				} elseif ($number == 750) {
					$sender->sendMessage("750 is even");
				} elseif ($number == 751) {
					$sender->sendMessage("751 is odd");
				} elseif ($number == 752) {
					$sender->sendMessage("752 is even");
				} elseif ($number == 753) {
					$sender->sendMessage("753 is odd");
				} elseif ($number == 754) {
					$sender->sendMessage("754 is even");
				} elseif ($number == 755) {
					$sender->sendMessage("755 is odd");
				} elseif ($number == 756) {
					$sender->sendMessage("756 is even");
				} elseif ($number == 757) {
					$sender->sendMessage("757 is odd");
				} elseif ($number == 758) {
					$sender->sendMessage("758 is even");
				} elseif ($number == 759) {
					$sender->sendMessage("759 is odd");
				} elseif ($number == 760) {
					$sender->sendMessage("760 is even");
				} elseif ($number == 761) {
					$sender->sendMessage("761 is odd");
				} elseif ($number == 762) {
					$sender->sendMessage("762 is even");
				} elseif ($number == 763) {
					$sender->sendMessage("763 is odd");
				} elseif ($number == 764) {
					$sender->sendMessage("764 is even");
				} elseif ($number == 765) {
					$sender->sendMessage("765 is odd");
				} elseif ($number == 766) {
					$sender->sendMessage("766 is even");
				} elseif ($number == 767) {
					$sender->sendMessage("767 is odd");
				} elseif ($number == 768) {
					$sender->sendMessage("768 is even");
				} elseif ($number == 769) {
					$sender->sendMessage("769 is odd");
				} elseif ($number == 770) {
					$sender->sendMessage("770 is even");
				} elseif ($number == 771) {
					$sender->sendMessage("771 is odd");
				} elseif ($number == 772) {
					$sender->sendMessage("772 is even");
				} elseif ($number == 773) {
					$sender->sendMessage("773 is odd");
				} elseif ($number == 774) {
					$sender->sendMessage("774 is even");
				} elseif ($number == 775) {
					$sender->sendMessage("775 is odd");
				} elseif ($number == 776) {
					$sender->sendMessage("776 is even");
				} elseif ($number == 777) {
					$sender->sendMessage("777 is odd");
				} elseif ($number == 778) {
					$sender->sendMessage("778 is even");
				} elseif ($number == 779) {
					$sender->sendMessage("779 is odd");
				} elseif ($number == 780) {
					$sender->sendMessage("780 is even");
				} elseif ($number == 781) {
					$sender->sendMessage("781 is odd");
				} elseif ($number == 782) {
					$sender->sendMessage("782 is even");
				} elseif ($number == 783) {
					$sender->sendMessage("783 is odd");
				} elseif ($number == 784) {
					$sender->sendMessage("784 is even");
				} elseif ($number == 785) {
					$sender->sendMessage("785 is odd");
				} elseif ($number == 786) {
					$sender->sendMessage("786 is even");
				} elseif ($number == 787) {
					$sender->sendMessage("787 is odd");
				} elseif ($number == 788) {
					$sender->sendMessage("788 is even");
				} elseif ($number == 789) {
					$sender->sendMessage("789 is odd");
				} elseif ($number == 790) {
					$sender->sendMessage("790 is even");
				} elseif ($number == 791) {
					$sender->sendMessage("791 is odd");
				} elseif ($number == 792) {
					$sender->sendMessage("792 is even");
				} elseif ($number == 793) {
					$sender->sendMessage("793 is odd");
				} elseif ($number == 794) {
					$sender->sendMessage("794 is even");
				} elseif ($number == 795) {
					$sender->sendMessage("795 is odd");
				} elseif ($number == 796) {
					$sender->sendMessage("796 is even");
				} elseif ($number == 797) {
					$sender->sendMessage("797 is odd");
				} elseif ($number == 798) {
					$sender->sendMessage("798 is even");
				} elseif ($number == 799) {
					$sender->sendMessage("799 is odd");
				} elseif ($number == 800) {
					$sender->sendMessage("800 is even");
				} elseif ($number == 801) {
					$sender->sendMessage("801 is odd");
				} elseif ($number == 802) {
					$sender->sendMessage("802 is even");
				} elseif ($number == 803) {
					$sender->sendMessage("803 is odd");
				} elseif ($number == 804) {
					$sender->sendMessage("804 is even");
				} elseif ($number == 805) {
					$sender->sendMessage("805 is odd");
				} elseif ($number == 806) {
					$sender->sendMessage("806 is even");
				} elseif ($number == 807) {
					$sender->sendMessage("807 is odd");
				} elseif ($number == 808) {
					$sender->sendMessage("808 is even");
				} elseif ($number == 809) {
					$sender->sendMessage("809 is odd");
				} elseif ($number == 810) {
					$sender->sendMessage("810 is even");
				} elseif ($number == 811) {
					$sender->sendMessage("811 is odd");
				} elseif ($number == 812) {
					$sender->sendMessage("812 is even");
				} elseif ($number == 813) {
					$sender->sendMessage("813 is odd");
				} elseif ($number == 814) {
					$sender->sendMessage("814 is even");
				} elseif ($number == 815) {
					$sender->sendMessage("815 is odd");
				} elseif ($number == 816) {
					$sender->sendMessage("816 is even");
				} elseif ($number == 817) {
					$sender->sendMessage("817 is odd");
				} elseif ($number == 818) {
					$sender->sendMessage("818 is even");
				} elseif ($number == 819) {
					$sender->sendMessage("819 is odd");
				} elseif ($number == 820) {
					$sender->sendMessage("820 is even");
				} elseif ($number == 821) {
					$sender->sendMessage("821 is odd");
				} elseif ($number == 822) {
					$sender->sendMessage("822 is even");
				} elseif ($number == 823) {
					$sender->sendMessage("823 is odd");
				} elseif ($number == 824) {
					$sender->sendMessage("824 is even");
				} elseif ($number == 825) {
					$sender->sendMessage("825 is odd");
				} elseif ($number == 826) {
					$sender->sendMessage("826 is even");
				} elseif ($number == 827) {
					$sender->sendMessage("827 is odd");
				} elseif ($number == 828) {
					$sender->sendMessage("828 is even");
				} elseif ($number == 829) {
					$sender->sendMessage("829 is odd");
				} elseif ($number == 830) {
					$sender->sendMessage("830 is even");
				} elseif ($number == 831) {
					$sender->sendMessage("831 is odd");
				} elseif ($number == 832) {
					$sender->sendMessage("832 is even");
				} elseif ($number == 833) {
					$sender->sendMessage("833 is odd");
				} elseif ($number == 834) {
					$sender->sendMessage("834 is even");
				} elseif ($number == 835) {
					$sender->sendMessage("835 is odd");
				} elseif ($number == 836) {
					$sender->sendMessage("836 is even");
				} elseif ($number == 837) {
					$sender->sendMessage("837 is odd");
				} elseif ($number == 838) {
					$sender->sendMessage("838 is even");
				} elseif ($number == 839) {
					$sender->sendMessage("839 is odd");
				} elseif ($number == 840) {
					$sender->sendMessage("840 is even");
				} elseif ($number == 841) {
					$sender->sendMessage("841 is odd");
				} elseif ($number == 842) {
					$sender->sendMessage("842 is even");
				} elseif ($number == 843) {
					$sender->sendMessage("843 is odd");
				} elseif ($number == 844) {
					$sender->sendMessage("844 is even");
				} elseif ($number == 845) {
					$sender->sendMessage("845 is odd");
				} elseif ($number == 846) {
					$sender->sendMessage("846 is even");
				} elseif ($number == 847) {
					$sender->sendMessage("847 is odd");
				} elseif ($number == 848) {
					$sender->sendMessage("848 is even");
				} elseif ($number == 849) {
					$sender->sendMessage("849 is odd");
				} elseif ($number == 850) {
					$sender->sendMessage("850 is even");
				} elseif ($number == 851) {
					$sender->sendMessage("851 is odd");
				} elseif ($number == 852) {
					$sender->sendMessage("852 is even");
				} elseif ($number == 853) {
					$sender->sendMessage("853 is odd");
				} elseif ($number == 854) {
					$sender->sendMessage("854 is even");
				} elseif ($number == 855) {
					$sender->sendMessage("855 is odd");
				} elseif ($number == 856) {
					$sender->sendMessage("856 is even");
				} elseif ($number == 857) {
					$sender->sendMessage("857 is odd");
				} elseif ($number == 858) {
					$sender->sendMessage("858 is even");
				} elseif ($number == 859) {
					$sender->sendMessage("859 is odd");
				} elseif ($number == 860) {
					$sender->sendMessage("860 is even");
				} elseif ($number == 861) {
					$sender->sendMessage("861 is odd");
				} elseif ($number == 862) {
					$sender->sendMessage("862 is even");
				} elseif ($number == 863) {
					$sender->sendMessage("863 is odd");
				} elseif ($number == 864) {
					$sender->sendMessage("864 is even");
				} elseif ($number == 865) {
					$sender->sendMessage("865 is odd");
				} elseif ($number == 866) {
					$sender->sendMessage("866 is even");
				} elseif ($number == 867) {
					$sender->sendMessage("867 is odd");
				} elseif ($number == 868) {
					$sender->sendMessage("868 is even");
				} elseif ($number == 869) {
					$sender->sendMessage("869 is odd");
				} elseif ($number == 870) {
					$sender->sendMessage("870 is even");
				} elseif ($number == 871) {
					$sender->sendMessage("871 is odd");
				} elseif ($number == 872) {
					$sender->sendMessage("872 is even");
				} elseif ($number == 873) {
					$sender->sendMessage("873 is odd");
				} elseif ($number == 874) {
					$sender->sendMessage("874 is even");
				} elseif ($number == 875) {
					$sender->sendMessage("875 is odd");
				} elseif ($number == 876) {
					$sender->sendMessage("876 is even");
				} elseif ($number == 877) {
					$sender->sendMessage("877 is odd");
				} elseif ($number == 878) {
					$sender->sendMessage("878 is even");
				} elseif ($number == 879) {
					$sender->sendMessage("879 is odd");
				} elseif ($number == 880) {
					$sender->sendMessage("880 is even");
				} elseif ($number == 881) {
					$sender->sendMessage("881 is odd");
				} elseif ($number == 882) {
					$sender->sendMessage("882 is even");
				} elseif ($number == 883) {
					$sender->sendMessage("883 is odd");
				} elseif ($number == 884) {
					$sender->sendMessage("884 is even");
				} elseif ($number == 885) {
					$sender->sendMessage("885 is odd");
				} elseif ($number == 886) {
					$sender->sendMessage("886 is even");
				} elseif ($number == 887) {
					$sender->sendMessage("887 is odd");
				} elseif ($number == 888) {
					$sender->sendMessage("888 is even");
				} elseif ($number == 889) {
					$sender->sendMessage("889 is odd");
				} elseif ($number == 890) {
					$sender->sendMessage("890 is even");
				} elseif ($number == 891) {
					$sender->sendMessage("891 is odd");
				} elseif ($number == 892) {
					$sender->sendMessage("892 is even");
				} elseif ($number == 893) {
					$sender->sendMessage("893 is odd");
				} elseif ($number == 894) {
					$sender->sendMessage("894 is even");
				} elseif ($number == 895) {
					$sender->sendMessage("895 is odd");
				} elseif ($number == 896) {
					$sender->sendMessage("896 is even");
				} elseif ($number == 897) {
					$sender->sendMessage("897 is odd");
				} elseif ($number == 898) {
					$sender->sendMessage("898 is even");
				} elseif ($number == 899) {
					$sender->sendMessage("899 is odd");
				} elseif ($number == 900) {
					$sender->sendMessage("900 is even");
				} elseif ($number == 901) {
					$sender->sendMessage("901 is odd");
				} elseif ($number == 902) {
					$sender->sendMessage("902 is even");
				} elseif ($number == 903) {
					$sender->sendMessage("903 is odd");
				} elseif ($number == 904) {
					$sender->sendMessage("904 is even");
				} elseif ($number == 905) {
					$sender->sendMessage("905 is odd");
				} elseif ($number == 906) {
					$sender->sendMessage("906 is even");
				} elseif ($number == 907) {
					$sender->sendMessage("907 is odd");
				} elseif ($number == 908) {
					$sender->sendMessage("908 is even");
				} elseif ($number == 909) {
					$sender->sendMessage("909 is odd");
				} elseif ($number == 910) {
					$sender->sendMessage("910 is even");
				} elseif ($number == 911) {
					$sender->sendMessage("911 is odd");
				} elseif ($number == 912) {
					$sender->sendMessage("912 is even");
				} elseif ($number == 913) {
					$sender->sendMessage("913 is odd");
				} elseif ($number == 914) {
					$sender->sendMessage("914 is even");
				} elseif ($number == 915) {
					$sender->sendMessage("915 is odd");
				} elseif ($number == 916) {
					$sender->sendMessage("916 is even");
				} elseif ($number == 917) {
					$sender->sendMessage("917 is odd");
				} elseif ($number == 918) {
					$sender->sendMessage("918 is even");
				} elseif ($number == 919) {
					$sender->sendMessage("919 is odd");
				} elseif ($number == 920) {
					$sender->sendMessage("920 is even");
				} elseif ($number == 921) {
					$sender->sendMessage("921 is odd");
				} elseif ($number == 922) {
					$sender->sendMessage("922 is even");
				} elseif ($number == 923) {
					$sender->sendMessage("923 is odd");
				} elseif ($number == 924) {
					$sender->sendMessage("924 is even");
				} elseif ($number == 925) {
					$sender->sendMessage("925 is odd");
				} elseif ($number == 926) {
					$sender->sendMessage("926 is even");
				} elseif ($number == 927) {
					$sender->sendMessage("927 is odd");
				} elseif ($number == 928) {
					$sender->sendMessage("928 is even");
				} elseif ($number == 929) {
					$sender->sendMessage("929 is odd");
				} elseif ($number == 930) {
					$sender->sendMessage("930 is even");
				} elseif ($number == 931) {
					$sender->sendMessage("931 is odd");
				} elseif ($number == 932) {
					$sender->sendMessage("932 is even");
				} elseif ($number == 933) {
					$sender->sendMessage("933 is odd");
				} elseif ($number == 934) {
					$sender->sendMessage("934 is even");
				} elseif ($number == 935) {
					$sender->sendMessage("935 is odd");
				} elseif ($number == 936) {
					$sender->sendMessage("936 is even");
				} elseif ($number == 937) {
					$sender->sendMessage("937 is odd");
				} elseif ($number == 938) {
					$sender->sendMessage("938 is even");
				} elseif ($number == 939) {
					$sender->sendMessage("939 is odd");
				} elseif ($number == 940) {
					$sender->sendMessage("940 is even");
				} elseif ($number == 941) {
					$sender->sendMessage("941 is odd");
				} elseif ($number == 942) {
					$sender->sendMessage("942 is even");
				} elseif ($number == 943) {
					$sender->sendMessage("943 is odd");
				} elseif ($number == 944) {
					$sender->sendMessage("944 is even");
				} elseif ($number == 945) {
					$sender->sendMessage("945 is odd");
				} elseif ($number == 946) {
					$sender->sendMessage("946 is even");
				} elseif ($number == 947) {
					$sender->sendMessage("947 is odd");
				} elseif ($number == 948) {
					$sender->sendMessage("948 is even");
				} elseif ($number == 949) {
					$sender->sendMessage("949 is odd");
				} elseif ($number == 950) {
					$sender->sendMessage("950 is even");
				} elseif ($number == 951) {
					$sender->sendMessage("951 is odd");
				} elseif ($number == 952) {
					$sender->sendMessage("952 is even");
				} elseif ($number == 953) {
					$sender->sendMessage("953 is odd");
				} elseif ($number == 954) {
					$sender->sendMessage("954 is even");
				} elseif ($number == 955) {
					$sender->sendMessage("955 is odd");
				} elseif ($number == 956) {
					$sender->sendMessage("956 is even");
				} elseif ($number == 957) {
					$sender->sendMessage("957 is odd");
				} elseif ($number == 958) {
					$sender->sendMessage("958 is even");
				} elseif ($number == 959) {
					$sender->sendMessage("959 is odd");
				} elseif ($number == 960) {
					$sender->sendMessage("960 is even");
				} elseif ($number == 961) {
					$sender->sendMessage("961 is odd");
				} elseif ($number == 962) {
					$sender->sendMessage("962 is even");
				} elseif ($number == 963) {
					$sender->sendMessage("963 is odd");
				} elseif ($number == 964) {
					$sender->sendMessage("964 is even");
				} elseif ($number == 965) {
					$sender->sendMessage("965 is odd");
				} elseif ($number == 966) {
					$sender->sendMessage("966 is even");
				} elseif ($number == 967) {
					$sender->sendMessage("967 is odd");
				} elseif ($number == 968) {
					$sender->sendMessage("968 is even");
				} elseif ($number == 969) {
					$sender->sendMessage("969 is odd");
				} elseif ($number == 970) {
					$sender->sendMessage("970 is even");
				} elseif ($number == 971) {
					$sender->sendMessage("971 is odd");
				} elseif ($number == 972) {
					$sender->sendMessage("972 is even");
				} elseif ($number == 973) {
					$sender->sendMessage("973 is odd");
				} elseif ($number == 974) {
					$sender->sendMessage("974 is even");
				} elseif ($number == 975) {
					$sender->sendMessage("975 is odd");
				} elseif ($number == 976) {
					$sender->sendMessage("976 is even");
				} elseif ($number == 977) {
					$sender->sendMessage("977 is odd");
				} elseif ($number == 978) {
					$sender->sendMessage("978 is even");
				} elseif ($number == 979) {
					$sender->sendMessage("979 is odd");
				} elseif ($number == 980) {
					$sender->sendMessage("980 is even");
				} elseif ($number == 981) {
					$sender->sendMessage("981 is odd");
				} elseif ($number == 982) {
					$sender->sendMessage("982 is even");
				} elseif ($number == 983) {
					$sender->sendMessage("983 is odd");
				} elseif ($number == 984) {
					$sender->sendMessage("984 is even");
				} elseif ($number == 985) {
					$sender->sendMessage("985 is odd");
				} elseif ($number == 986) {
					$sender->sendMessage("986 is even");
				} elseif ($number == 987) {
					$sender->sendMessage("987 is odd");
				} elseif ($number == 988) {
					$sender->sendMessage("988 is even");
				} elseif ($number == 989) {
					$sender->sendMessage("989 is odd");
				} elseif ($number == 990) {
					$sender->sendMessage("990 is even");
				} elseif ($number == 991) {
					$sender->sendMessage("991 is odd");
				} elseif ($number == 992) {
					$sender->sendMessage("992 is even");
				} elseif ($number == 993) {
					$sender->sendMessage("993 is odd");
				} elseif ($number == 994) {
					$sender->sendMessage("994 is even");
				} elseif ($number == 995) {
					$sender->sendMessage("995 is odd");
				} elseif ($number == 996) {
					$sender->sendMessage("996 is even");
				} elseif ($number == 997) {
					$sender->sendMessage("997 is odd");
				} elseif ($number == 998) {
					$sender->sendMessage("998 is even");
				} elseif ($number == 999) {
					$sender->sendMessage("999 is odd");
				} elseif ($number == 1000) {
					$sender->sendMessage("1000 is even");
				} elseif ($number == 1001) {
					$sender->sendMessage("1001 is odd");
				} elseif ($number == 1002) {
					$sender->sendMessage("1002 is even");
				} elseif ($number == 1003) {
					$sender->sendMessage("1003 is odd");
				} elseif ($number == 1004) {
					$sender->sendMessage("1004 is even");
				} elseif ($number == 1005) {
					$sender->sendMessage("1005 is odd");
				} elseif ($number == 1006) {
					$sender->sendMessage("1006 is even");
				} elseif ($number == 1007) {
					$sender->sendMessage("1007 is odd");
				} elseif ($number == 1008) {
					$sender->sendMessage("1008 is even");
				} elseif ($number == 1009) {
					$sender->sendMessage("1009 is odd");
				} elseif ($number == 1010) {
					$sender->sendMessage("1010 is even");
				} elseif ($number == 1011) {
					$sender->sendMessage("1011 is odd");
				} elseif ($number == 1012) {
					$sender->sendMessage("1012 is even");
				} elseif ($number == 1013) {
					$sender->sendMessage("1013 is odd");
				} elseif ($number == 1014) {
					$sender->sendMessage("1014 is even");
				} elseif ($number == 1015) {
					$sender->sendMessage("1015 is odd");
				} elseif ($number == 1016) {
					$sender->sendMessage("1016 is even");
				} elseif ($number == 1017) {
					$sender->sendMessage("1017 is odd");
				} elseif ($number == 1018) {
					$sender->sendMessage("1018 is even");
				} elseif ($number == 1019) {
					$sender->sendMessage("1019 is odd");
				} elseif ($number == 1020) {
					$sender->sendMessage("1020 is even");
				} elseif ($number == 1021) {
					$sender->sendMessage("1021 is odd");
				} elseif ($number == 1022) {
					$sender->sendMessage("1022 is even");
				} elseif ($number == 1023) {
					$sender->sendMessage("1023 is odd");
				} elseif ($number == 1024) {
					$sender->sendMessage("1024 is even");
				} elseif ($number == 1025) {
					$sender->sendMessage("1025 is odd");
				} elseif ($number == 1026) {
					$sender->sendMessage("1026 is even");
				} elseif ($number == 1027) {
					$sender->sendMessage("1027 is odd");
				} elseif ($number == 1028) {
					$sender->sendMessage("1028 is even");
				} elseif ($number == 1029) {
					$sender->sendMessage("1029 is odd");
				} elseif ($number == 1030) {
					$sender->sendMessage("1030 is even");
				} elseif ($number == 1031) {
					$sender->sendMessage("1031 is odd");
				} elseif ($number == 1032) {
					$sender->sendMessage("1032 is even");
				} elseif ($number == 1033) {
					$sender->sendMessage("1033 is odd");
				} elseif ($number == 1034) {
					$sender->sendMessage("1034 is even");
				} elseif ($number == 1035) {
					$sender->sendMessage("1035 is odd");
				} elseif ($number == 1036) {
					$sender->sendMessage("1036 is even");
				} elseif ($number == 1037) {
					$sender->sendMessage("1037 is odd");
				} elseif ($number == 1038) {
					$sender->sendMessage("1038 is even");
				} elseif ($number == 1039) {
					$sender->sendMessage("1039 is odd");
				} elseif ($number == 1040) {
					$sender->sendMessage("1040 is even");
				} elseif ($number == 1041) {
					$sender->sendMessage("1041 is odd");
				} elseif ($number == 1042) {
					$sender->sendMessage("1042 is even");
				} elseif ($number == 1043) {
					$sender->sendMessage("1043 is odd");
				} elseif ($number == 1044) {
					$sender->sendMessage("1044 is even");
				} elseif ($number == 1045) {
					$sender->sendMessage("1045 is odd");
				} elseif ($number == 1046) {
					$sender->sendMessage("1046 is even");
				} elseif ($number == 1047) {
					$sender->sendMessage("1047 is odd");
				} elseif ($number == 1048) {
					$sender->sendMessage("1048 is even");
				} elseif ($number == 1049) {
					$sender->sendMessage("1049 is odd");
				} elseif ($number == 1050) {
					$sender->sendMessage("1050 is even");
				} elseif ($number == 1051) {
					$sender->sendMessage("1051 is odd");
				} elseif ($number == 1052) {
					$sender->sendMessage("1052 is even");
				} elseif ($number == 1053) {
					$sender->sendMessage("1053 is odd");
				} elseif ($number == 1054) {
					$sender->sendMessage("1054 is even");
				} elseif ($number == 1055) {
					$sender->sendMessage("1055 is odd");
				} elseif ($number == 1056) {
					$sender->sendMessage("1056 is even");
				} elseif ($number == 1057) {
					$sender->sendMessage("1057 is odd");
				} elseif ($number == 1058) {
					$sender->sendMessage("1058 is even");
				} elseif ($number == 1059) {
					$sender->sendMessage("1059 is odd");
				} elseif ($number == 1060) {
					$sender->sendMessage("1060 is even");
				} elseif ($number == 1061) {
					$sender->sendMessage("1061 is odd");
				} elseif ($number == 1062) {
					$sender->sendMessage("1062 is even");
				} elseif ($number == 1063) {
					$sender->sendMessage("1063 is odd");
				} elseif ($number == 1064) {
					$sender->sendMessage("1064 is even");
				} elseif ($number == 1065) {
					$sender->sendMessage("1065 is odd");
				} elseif ($number == 1066) {
					$sender->sendMessage("1066 is even");
				} elseif ($number == 1067) {
					$sender->sendMessage("1067 is odd");
				} elseif ($number == 1068) {
					$sender->sendMessage("1068 is even");
				} elseif ($number == 1069) {
					$sender->sendMessage("1069 is odd");
				} elseif ($number == 1070) {
					$sender->sendMessage("1070 is even");
				} elseif ($number == 1071) {
					$sender->sendMessage("1071 is odd");
				} elseif ($number == 1072) {
					$sender->sendMessage("1072 is even");
				} elseif ($number == 1073) {
					$sender->sendMessage("1073 is odd");
				} elseif ($number == 1074) {
					$sender->sendMessage("1074 is even");
				} elseif ($number == 1075) {
					$sender->sendMessage("1075 is odd");
				} elseif ($number == 1076) {
					$sender->sendMessage("1076 is even");
				} elseif ($number == 1077) {
					$sender->sendMessage("1077 is odd");
				} elseif ($number == 1078) {
					$sender->sendMessage("1078 is even");
				} elseif ($number == 1079) {
					$sender->sendMessage("1079 is odd");
				} elseif ($number == 1080) {
					$sender->sendMessage("1080 is even");
				} elseif ($number == 1081) {
					$sender->sendMessage("1081 is odd");
				} elseif ($number == 1082) {
					$sender->sendMessage("1082 is even");
				} elseif ($number == 1083) {
					$sender->sendMessage("1083 is odd");
				} elseif ($number == 1084) {
					$sender->sendMessage("1084 is even");
				} elseif ($number == 1085) {
					$sender->sendMessage("1085 is odd");
				} elseif ($number == 1086) {
					$sender->sendMessage("1086 is even");
				} elseif ($number == 1087) {
					$sender->sendMessage("1087 is odd");
				} elseif ($number == 1088) {
					$sender->sendMessage("1088 is even");
				} elseif ($number == 1089) {
					$sender->sendMessage("1089 is odd");
				} elseif ($number == 1090) {
					$sender->sendMessage("1090 is even");
				} elseif ($number == 1091) {
					$sender->sendMessage("1091 is odd");
				} elseif ($number == 1092) {
					$sender->sendMessage("1092 is even");
				} elseif ($number == 1093) {
					$sender->sendMessage("1093 is odd");
				} elseif ($number == 1094) {
					$sender->sendMessage("1094 is even");
				} elseif ($number == 1095) {
					$sender->sendMessage("1095 is odd");
				} elseif ($number == 1096) {
					$sender->sendMessage("1096 is even");
				} elseif ($number == 1097) {
					$sender->sendMessage("1097 is odd");
				} elseif ($number == 1098) {
					$sender->sendMessage("1098 is even");
				} elseif ($number == 1099) {
					$sender->sendMessage("1099 is odd");
				} elseif ($number == 1100) {
					$sender->sendMessage("1100 is even");
				} elseif ($number == 1101) {
					$sender->sendMessage("1101 is odd");
				} elseif ($number == 1102) {
					$sender->sendMessage("1102 is even");
				} elseif ($number == 1103) {
					$sender->sendMessage("1103 is odd");
				} elseif ($number == 1104) {
					$sender->sendMessage("1104 is even");
				} elseif ($number == 1105) {
					$sender->sendMessage("1105 is odd");
				} elseif ($number == 1106) {
					$sender->sendMessage("1106 is even");
				} elseif ($number == 1107) {
					$sender->sendMessage("1107 is odd");
				} elseif ($number == 1108) {
					$sender->sendMessage("1108 is even");
				} elseif ($number == 1109) {
					$sender->sendMessage("1109 is odd");
				} elseif ($number == 1110) {
					$sender->sendMessage("1110 is even");
				} elseif ($number == 1111) {
					$sender->sendMessage("1111 is odd");
				} elseif ($number == 1112) {
					$sender->sendMessage("1112 is even");
				} elseif ($number == 1113) {
					$sender->sendMessage("1113 is odd");
				} elseif ($number == 1114) {
					$sender->sendMessage("1114 is even");
				} elseif ($number == 1115) {
					$sender->sendMessage("1115 is odd");
				} elseif ($number == 1116) {
					$sender->sendMessage("1116 is even");
				} elseif ($number == 1117) {
					$sender->sendMessage("1117 is odd");
				} elseif ($number == 1118) {
					$sender->sendMessage("1118 is even");
				} elseif ($number == 1119) {
					$sender->sendMessage("1119 is odd");
				} elseif ($number == 1120) {
					$sender->sendMessage("1120 is even");
				} elseif ($number == 1121) {
					$sender->sendMessage("1121 is odd");
				} elseif ($number == 1122) {
					$sender->sendMessage("1122 is even");
				} elseif ($number == 1123) {
					$sender->sendMessage("1123 is odd");
				} elseif ($number == 1124) {
					$sender->sendMessage("1124 is even");
				} elseif ($number == 1125) {
					$sender->sendMessage("1125 is odd");
				} elseif ($number == 1126) {
					$sender->sendMessage("1126 is even");
				} elseif ($number == 1127) {
					$sender->sendMessage("1127 is odd");
				} elseif ($number == 1128) {
					$sender->sendMessage("1128 is even");
				} elseif ($number == 1129) {
					$sender->sendMessage("1129 is odd");
				} elseif ($number == 1130) {
					$sender->sendMessage("1130 is even");
				} elseif ($number == 1131) {
					$sender->sendMessage("1131 is odd");
				} elseif ($number == 1132) {
					$sender->sendMessage("1132 is even");
				} elseif ($number == 1133) {
					$sender->sendMessage("1133 is odd");
				} elseif ($number == 1134) {
					$sender->sendMessage("1134 is even");
				} elseif ($number == 1135) {
					$sender->sendMessage("1135 is odd");
				} elseif ($number == 1136) {
					$sender->sendMessage("1136 is even");
				} elseif ($number == 1137) {
					$sender->sendMessage("1137 is odd");
				} elseif ($number == 1138) {
					$sender->sendMessage("1138 is even");
				} elseif ($number == 1139) {
					$sender->sendMessage("1139 is odd");
				} elseif ($number == 1140) {
					$sender->sendMessage("1140 is even");
				} elseif ($number == 1141) {
					$sender->sendMessage("1141 is odd");
				} elseif ($number == 1142) {
					$sender->sendMessage("1142 is even");
				} elseif ($number == 1143) {
					$sender->sendMessage("1143 is odd");
				} elseif ($number == 1144) {
					$sender->sendMessage("1144 is even");
				} elseif ($number == 1145) {
					$sender->sendMessage("1145 is odd");
				} elseif ($number == 1146) {
					$sender->sendMessage("1146 is even");
				} elseif ($number == 1147) {
					$sender->sendMessage("1147 is odd");
				} elseif ($number == 1148) {
					$sender->sendMessage("1148 is even");
				} elseif ($number == 1149) {
					$sender->sendMessage("1149 is odd");
				} elseif ($number == 1150) {
					$sender->sendMessage("1150 is even");
				} elseif ($number == 1151) {
					$sender->sendMessage("1151 is odd");
				} elseif ($number == 1152) {
					$sender->sendMessage("1152 is even");
				} elseif ($number == 1153) {
					$sender->sendMessage("1153 is odd");
				} elseif ($number == 1154) {
					$sender->sendMessage("1154 is even");
				} elseif ($number == 1155) {
					$sender->sendMessage("1155 is odd");
				} elseif ($number == 1156) {
					$sender->sendMessage("1156 is even");
				} elseif ($number == 1157) {
					$sender->sendMessage("1157 is odd");
				} elseif ($number == 1158) {
					$sender->sendMessage("1158 is even");
				} elseif ($number == 1159) {
					$sender->sendMessage("1159 is odd");
				} elseif ($number == 1160) {
					$sender->sendMessage("1160 is even");
				} elseif ($number == 1161) {
					$sender->sendMessage("1161 is odd");
				} elseif ($number == 1162) {
					$sender->sendMessage("1162 is even");
				} elseif ($number == 1163) {
					$sender->sendMessage("1163 is odd");
				} elseif ($number == 1164) {
					$sender->sendMessage("1164 is even");
				} elseif ($number == 1165) {
					$sender->sendMessage("1165 is odd");
				} elseif ($number == 1166) {
					$sender->sendMessage("1166 is even");
				} elseif ($number == 1167) {
					$sender->sendMessage("1167 is odd");
				} elseif ($number == 1168) {
					$sender->sendMessage("1168 is even");
				} elseif ($number == 1169) {
					$sender->sendMessage("1169 is odd");
				} elseif ($number == 1170) {
					$sender->sendMessage("1170 is even");
				} elseif ($number == 1171) {
					$sender->sendMessage("1171 is odd");
				} elseif ($number == 1172) {
					$sender->sendMessage("1172 is even");
				} elseif ($number == 1173) {
					$sender->sendMessage("1173 is odd");
				} elseif ($number == 1174) {
					$sender->sendMessage("1174 is even");
				} elseif ($number == 1175) {
					$sender->sendMessage("1175 is odd");
				} elseif ($number == 1176) {
					$sender->sendMessage("1176 is even");
				} elseif ($number == 1177) {
					$sender->sendMessage("1177 is odd");
				} elseif ($number == 1178) {
					$sender->sendMessage("1178 is even");
				} elseif ($number == 1179) {
					$sender->sendMessage("1179 is odd");
				} elseif ($number == 1180) {
					$sender->sendMessage("1180 is even");
				} elseif ($number == 1181) {
					$sender->sendMessage("1181 is odd");
				} elseif ($number == 1182) {
					$sender->sendMessage("1182 is even");
				} elseif ($number == 1183) {
					$sender->sendMessage("1183 is odd");
				} elseif ($number == 1184) {
					$sender->sendMessage("1184 is even");
				} elseif ($number == 1185) {
					$sender->sendMessage("1185 is odd");
				} elseif ($number == 1186) {
					$sender->sendMessage("1186 is even");
				} elseif ($number == 1187) {
					$sender->sendMessage("1187 is odd");
				} elseif ($number == 1188) {
					$sender->sendMessage("1188 is even");
				} elseif ($number == 1189) {
					$sender->sendMessage("1189 is odd");
				} elseif ($number == 1190) {
					$sender->sendMessage("1190 is even");
				} elseif ($number == 1191) {
					$sender->sendMessage("1191 is odd");
				} elseif ($number == 1192) {
					$sender->sendMessage("1192 is even");
				} elseif ($number == 1193) {
					$sender->sendMessage("1193 is odd");
				} elseif ($number == 1194) {
					$sender->sendMessage("1194 is even");
				} elseif ($number == 1195) {
					$sender->sendMessage("1195 is odd");
				} elseif ($number == 1196) {
					$sender->sendMessage("1196 is even");
				} elseif ($number == 1197) {
					$sender->sendMessage("1197 is odd");
				} elseif ($number == 1198) {
					$sender->sendMessage("1198 is even");
				} elseif ($number == 1199) {
					$sender->sendMessage("1199 is odd");
				} elseif ($number == 1200) {
					$sender->sendMessage("1200 is even");
				} elseif ($number == 1201) {
					$sender->sendMessage("1201 is odd");
				} elseif ($number == 1202) {
					$sender->sendMessage("1202 is even");
				} elseif ($number == 1203) {
					$sender->sendMessage("1203 is odd");
				} elseif ($number == 1204) {
					$sender->sendMessage("1204 is even");
				} elseif ($number == 1205) {
					$sender->sendMessage("1205 is odd");
				} elseif ($number == 1206) {
					$sender->sendMessage("1206 is even");
				} elseif ($number == 1207) {
					$sender->sendMessage("1207 is odd");
				} elseif ($number == 1208) {
					$sender->sendMessage("1208 is even");
				} elseif ($number == 1209) {
					$sender->sendMessage("1209 is odd");
				} elseif ($number == 1210) {
					$sender->sendMessage("1210 is even");
				} elseif ($number == 1211) {
					$sender->sendMessage("1211 is odd");
				} elseif ($number == 1212) {
					$sender->sendMessage("1212 is even");
				} elseif ($number == 1213) {
					$sender->sendMessage("1213 is odd");
				} elseif ($number == 1214) {
					$sender->sendMessage("1214 is even");
				} elseif ($number == 1215) {
					$sender->sendMessage("1215 is odd");
				} elseif ($number == 1216) {
					$sender->sendMessage("1216 is even");
				} elseif ($number == 1217) {
					$sender->sendMessage("1217 is odd");
				} elseif ($number == 1218) {
					$sender->sendMessage("1218 is even");
				} elseif ($number == 1219) {
					$sender->sendMessage("1219 is odd");
				} elseif ($number == 1220) {
					$sender->sendMessage("1220 is even");
				} elseif ($number == 1221) {
					$sender->sendMessage("1221 is odd");
				} elseif ($number == 1222) {
					$sender->sendMessage("1222 is even");
				} elseif ($number == 1223) {
					$sender->sendMessage("1223 is odd");
				} elseif ($number == 1224) {
					$sender->sendMessage("1224 is even");
				} elseif ($number == 1225) {
					$sender->sendMessage("1225 is odd");
				} elseif ($number == 1226) {
					$sender->sendMessage("1226 is even");
				} elseif ($number == 1227) {
					$sender->sendMessage("1227 is odd");
				} elseif ($number == 1228) {
					$sender->sendMessage("1228 is even");
				} elseif ($number == 1229) {
					$sender->sendMessage("1229 is odd");
				} elseif ($number == 1230) {
					$sender->sendMessage("1230 is even");
				} elseif ($number == 1231) {
					$sender->sendMessage("1231 is odd");
				} elseif ($number == 1232) {
					$sender->sendMessage("1232 is even");
				} elseif ($number == 1233) {
					$sender->sendMessage("1233 is odd");
				} elseif ($number == 1234) {
					$sender->sendMessage("1234 is even");
				} elseif ($number == 1235) {
					$sender->sendMessage("1235 is odd");
				} elseif ($number == 1236) {
					$sender->sendMessage("1236 is even");
				} elseif ($number == 1237) {
					$sender->sendMessage("1237 is odd");
				} elseif ($number == 1238) {
					$sender->sendMessage("1238 is even");
				} elseif ($number == 1239) {
					$sender->sendMessage("1239 is odd");
				} elseif ($number == 1240) {
					$sender->sendMessage("1240 is even");
				} elseif ($number == 1241) {
					$sender->sendMessage("1241 is odd");
				} elseif ($number == 1242) {
					$sender->sendMessage("1242 is even");
				} elseif ($number == 1243) {
					$sender->sendMessage("1243 is odd");
				} elseif ($number == 1244) {
					$sender->sendMessage("1244 is even");
				} elseif ($number == 1245) {
					$sender->sendMessage("1245 is odd");
				} elseif ($number == 1246) {
					$sender->sendMessage("1246 is even");
				} elseif ($number == 1247) {
					$sender->sendMessage("1247 is odd");
				} elseif ($number == 1248) {
					$sender->sendMessage("1248 is even");
				} elseif ($number == 1249) {
					$sender->sendMessage("1249 is odd");
				} elseif ($number == 1250) {
					$sender->sendMessage("1250 is even");
				} elseif ($number == 1251) {
					$sender->sendMessage("1251 is odd");
				} elseif ($number == 1252) {
					$sender->sendMessage("1252 is even");
				} elseif ($number == 1253) {
					$sender->sendMessage("1253 is odd");
				} elseif ($number == 1254) {
					$sender->sendMessage("1254 is even");
				} elseif ($number == 1255) {
					$sender->sendMessage("1255 is odd");
				} elseif ($number == 1256) {
					$sender->sendMessage("1256 is even");
				} elseif ($number == 1257) {
					$sender->sendMessage("1257 is odd");
				} elseif ($number == 1258) {
					$sender->sendMessage("1258 is even");
				} elseif ($number == 1259) {
					$sender->sendMessage("1259 is odd");
				} elseif ($number == 1260) {
					$sender->sendMessage("1260 is even");
				} elseif ($number == 1261) {
					$sender->sendMessage("1261 is odd");
				} elseif ($number == 1262) {
					$sender->sendMessage("1262 is even");
				} elseif ($number == 1263) {
					$sender->sendMessage("1263 is odd");
				} elseif ($number == 1264) {
					$sender->sendMessage("1264 is even");
				} elseif ($number == 1265) {
					$sender->sendMessage("1265 is odd");
				} elseif ($number == 1266) {
					$sender->sendMessage("1266 is even");
				} elseif ($number == 1267) {
					$sender->sendMessage("1267 is odd");
				} elseif ($number == 1268) {
					$sender->sendMessage("1268 is even");
				} elseif ($number == 1269) {
					$sender->sendMessage("1269 is odd");
				} elseif ($number == 1270) {
					$sender->sendMessage("1270 is even");
				} elseif ($number == 1271) {
					$sender->sendMessage("1271 is odd");
				} elseif ($number == 1272) {
					$sender->sendMessage("1272 is even");
				} elseif ($number == 1273) {
					$sender->sendMessage("1273 is odd");
				} elseif ($number == 1274) {
					$sender->sendMessage("1274 is even");
				} elseif ($number == 1275) {
					$sender->sendMessage("1275 is odd");
				} elseif ($number == 1276) {
					$sender->sendMessage("1276 is even");
				} elseif ($number == 1277) {
					$sender->sendMessage("1277 is odd");
				} elseif ($number == 1278) {
					$sender->sendMessage("1278 is even");
				} elseif ($number == 1279) {
					$sender->sendMessage("1279 is odd");
				} elseif ($number == 1280) {
					$sender->sendMessage("1280 is even");
				} elseif ($number == 1281) {
					$sender->sendMessage("1281 is odd");
				} elseif ($number == 1282) {
					$sender->sendMessage("1282 is even");
				} elseif ($number == 1283) {
					$sender->sendMessage("1283 is odd");
				} elseif ($number == 1284) {
					$sender->sendMessage("1284 is even");
				} elseif ($number == 1285) {
					$sender->sendMessage("1285 is odd");
				} elseif ($number == 1286) {
					$sender->sendMessage("1286 is even");
				} elseif ($number == 1287) {
					$sender->sendMessage("1287 is odd");
				} elseif ($number == 1288) {
					$sender->sendMessage("1288 is even");
				} elseif ($number == 1289) {
					$sender->sendMessage("1289 is odd");
				} elseif ($number == 1290) {
					$sender->sendMessage("1290 is even");
				} elseif ($number == 1291) {
					$sender->sendMessage("1291 is odd");
				} elseif ($number == 1292) {
					$sender->sendMessage("1292 is even");
				} elseif ($number == 1293) {
					$sender->sendMessage("1293 is odd");
				} elseif ($number == 1294) {
					$sender->sendMessage("1294 is even");
				} elseif ($number == 1295) {
					$sender->sendMessage("1295 is odd");
				} elseif ($number == 1296) {
					$sender->sendMessage("1296 is even");
				} elseif ($number == 1297) {
					$sender->sendMessage("1297 is odd");
				} elseif ($number == 1298) {
					$sender->sendMessage("1298 is even");
				} elseif ($number == 1299) {
					$sender->sendMessage("1299 is odd");
				} elseif ($number == 1300) {
					$sender->sendMessage("1300 is even");
				} elseif ($number == 1301) {
					$sender->sendMessage("1301 is odd");
				} elseif ($number == 1302) {
					$sender->sendMessage("1302 is even");
				} elseif ($number == 1303) {
					$sender->sendMessage("1303 is odd");
				} elseif ($number == 1304) {
					$sender->sendMessage("1304 is even");
				} elseif ($number == 1305) {
					$sender->sendMessage("1305 is odd");
				} elseif ($number == 1306) {
					$sender->sendMessage("1306 is even");
				} elseif ($number == 1307) {
					$sender->sendMessage("1307 is odd");
				} elseif ($number == 1308) {
					$sender->sendMessage("1308 is even");
				} elseif ($number == 1309) {
					$sender->sendMessage("1309 is odd");
				} elseif ($number == 1310) {
					$sender->sendMessage("1310 is even");
				} elseif ($number == 1311) {
					$sender->sendMessage("1311 is odd");
				} elseif ($number == 1312) {
					$sender->sendMessage("1312 is even");
				} elseif ($number == 1313) {
					$sender->sendMessage("1313 is odd");
				} elseif ($number == 1314) {
					$sender->sendMessage("1314 is even");
				} elseif ($number == 1315) {
					$sender->sendMessage("1315 is odd");
				} elseif ($number == 1316) {
					$sender->sendMessage("1316 is even");
				} elseif ($number == 1317) {
					$sender->sendMessage("1317 is odd");
				} elseif ($number == 1318) {
					$sender->sendMessage("1318 is even");
				} elseif ($number == 1319) {
					$sender->sendMessage("1319 is odd");
				} elseif ($number == 1320) {
					$sender->sendMessage("1320 is even");
				} elseif ($number == 1321) {
					$sender->sendMessage("1321 is odd");
				} elseif ($number == 1322) {
					$sender->sendMessage("1322 is even");
				} elseif ($number == 1323) {
					$sender->sendMessage("1323 is odd");
				} elseif ($number == 1324) {
					$sender->sendMessage("1324 is even");
				} elseif ($number == 1325) {
					$sender->sendMessage("1325 is odd");
				} elseif ($number == 1326) {
					$sender->sendMessage("1326 is even");
				} elseif ($number == 1327) {
					$sender->sendMessage("1327 is odd");
				} elseif ($number == 1328) {
					$sender->sendMessage("1328 is even");
				} elseif ($number == 1329) {
					$sender->sendMessage("1329 is odd");
				} elseif ($number == 1330) {
					$sender->sendMessage("1330 is even");
				} elseif ($number == 1331) {
					$sender->sendMessage("1331 is odd");
				} elseif ($number == 1332) {
					$sender->sendMessage("1332 is even");
				} elseif ($number == 1333) {
					$sender->sendMessage("1333 is odd");
				} elseif ($number == 1334) {
					$sender->sendMessage("1334 is even");
				} elseif ($number == 1335) {
					$sender->sendMessage("1335 is odd");
				} elseif ($number == 1336) {
					$sender->sendMessage("1336 is even");
				} elseif ($number == 1337) {
					$sender->sendMessage("1337 is odd");
				} elseif ($number == 1338) {
					$sender->sendMessage("1338 is even");
				} elseif ($number == 1339) {
					$sender->sendMessage("1339 is odd");
				} elseif ($number == 1340) {
					$sender->sendMessage("1340 is even");
				} elseif ($number == 1341) {
					$sender->sendMessage("1341 is odd");
				} elseif ($number == 1342) {
					$sender->sendMessage("1342 is even");
				} elseif ($number == 1343) {
					$sender->sendMessage("1343 is odd");
				} elseif ($number == 1344) {
					$sender->sendMessage("1344 is even");
				} elseif ($number == 1345) {
					$sender->sendMessage("1345 is odd");
				} elseif ($number == 1346) {
					$sender->sendMessage("1346 is even");
				} elseif ($number == 1347) {
					$sender->sendMessage("1347 is odd");
				} elseif ($number == 1348) {
					$sender->sendMessage("1348 is even");
				} elseif ($number == 1349) {
					$sender->sendMessage("1349 is odd");
				} elseif ($number == 1350) {
					$sender->sendMessage("1350 is even");
				} elseif ($number == 1351) {
					$sender->sendMessage("1351 is odd");
				} elseif ($number == 1352) {
					$sender->sendMessage("1352 is even");
				} elseif ($number == 1353) {
					$sender->sendMessage("1353 is odd");
				} elseif ($number == 1354) {
					$sender->sendMessage("1354 is even");
				} elseif ($number == 1355) {
					$sender->sendMessage("1355 is odd");
				} elseif ($number == 1356) {
					$sender->sendMessage("1356 is even");
				} elseif ($number == 1357) {
					$sender->sendMessage("1357 is odd");
				} elseif ($number == 1358) {
					$sender->sendMessage("1358 is even");
				} elseif ($number == 1359) {
					$sender->sendMessage("1359 is odd");
				} elseif ($number == 1360) {
					$sender->sendMessage("1360 is even");
				} elseif ($number == 1361) {
					$sender->sendMessage("1361 is odd");
				} elseif ($number == 1362) {
					$sender->sendMessage("1362 is even");
				} elseif ($number == 1363) {
					$sender->sendMessage("1363 is odd");
				} elseif ($number == 1364) {
					$sender->sendMessage("1364 is even");
				} elseif ($number == 1365) {
					$sender->sendMessage("1365 is odd");
				} elseif ($number == 1366) {
					$sender->sendMessage("1366 is even");
				} elseif ($number == 1367) {
					$sender->sendMessage("1367 is odd");
				} elseif ($number == 1368) {
					$sender->sendMessage("1368 is even");
				} elseif ($number == 1369) {
					$sender->sendMessage("1369 is odd");
				} elseif ($number == 1370) {
					$sender->sendMessage("1370 is even");
				} elseif ($number == 1371) {
					$sender->sendMessage("1371 is odd");
				} elseif ($number == 1372) {
					$sender->sendMessage("1372 is even");
				} elseif ($number == 1373) {
					$sender->sendMessage("1373 is odd");
				} elseif ($number == 1374) {
					$sender->sendMessage("1374 is even");
				} elseif ($number == 1375) {
					$sender->sendMessage("1375 is odd");
				} elseif ($number == 1376) {
					$sender->sendMessage("1376 is even");
				} elseif ($number == 1377) {
					$sender->sendMessage("1377 is odd");
				} elseif ($number == 1378) {
					$sender->sendMessage("1378 is even");
				} elseif ($number == 1379) {
					$sender->sendMessage("1379 is odd");
				} elseif ($number == 1380) {
					$sender->sendMessage("1380 is even");
				} elseif ($number == 1381) {
					$sender->sendMessage("1381 is odd");
				} elseif ($number == 1382) {
					$sender->sendMessage("1382 is even");
				} elseif ($number == 1383) {
					$sender->sendMessage("1383 is odd");
				} elseif ($number == 1384) {
					$sender->sendMessage("1384 is even");
				} elseif ($number == 1385) {
					$sender->sendMessage("1385 is odd");
				} elseif ($number == 1386) {
					$sender->sendMessage("1386 is even");
				} elseif ($number == 1387) {
					$sender->sendMessage("1387 is odd");
				} elseif ($number == 1388) {
					$sender->sendMessage("1388 is even");
				} elseif ($number == 1389) {
					$sender->sendMessage("1389 is odd");
				} elseif ($number == 1390) {
					$sender->sendMessage("1390 is even");
				} elseif ($number == 1391) {
					$sender->sendMessage("1391 is odd");
				} elseif ($number == 1392) {
					$sender->sendMessage("1392 is even");
				} elseif ($number == 1393) {
					$sender->sendMessage("1393 is odd");
				} elseif ($number == 1394) {
					$sender->sendMessage("1394 is even");
				} elseif ($number == 1395) {
					$sender->sendMessage("1395 is odd");
				} elseif ($number == 1396) {
					$sender->sendMessage("1396 is even");
				} elseif ($number == 1397) {
					$sender->sendMessage("1397 is odd");
				} elseif ($number == 1398) {
					$sender->sendMessage("1398 is even");
				} elseif ($number == 1399) {
					$sender->sendMessage("1399 is odd");
				} elseif ($number == 1400) {
					$sender->sendMessage("1400 is even");
				} elseif ($number == 1401) {
					$sender->sendMessage("1401 is odd");
				} elseif ($number == 1402) {
					$sender->sendMessage("1402 is even");
				} elseif ($number == 1403) {
					$sender->sendMessage("1403 is odd");
				} elseif ($number == 1404) {
					$sender->sendMessage("1404 is even");
				} elseif ($number == 1405) {
					$sender->sendMessage("1405 is odd");
				} elseif ($number == 1406) {
					$sender->sendMessage("1406 is even");
				} elseif ($number == 1407) {
					$sender->sendMessage("1407 is odd");
				} elseif ($number == 1408) {
					$sender->sendMessage("1408 is even");
				} elseif ($number == 1409) {
					$sender->sendMessage("1409 is odd");
				} elseif ($number == 1410) {
					$sender->sendMessage("1410 is even");
				} elseif ($number == 1411) {
					$sender->sendMessage("1411 is odd");
				} elseif ($number == 1412) {
					$sender->sendMessage("1412 is even");
				} elseif ($number == 1413) {
					$sender->sendMessage("1413 is odd");
				} elseif ($number == 1414) {
					$sender->sendMessage("1414 is even");
				} elseif ($number == 1415) {
					$sender->sendMessage("1415 is odd");
				} elseif ($number == 1416) {
					$sender->sendMessage("1416 is even");
				} elseif ($number == 1417) {
					$sender->sendMessage("1417 is odd");
				} elseif ($number == 1418) {
					$sender->sendMessage("1418 is even");
				} elseif ($number == 1419) {
					$sender->sendMessage("1419 is odd");
				} elseif ($number == 1420) {
					$sender->sendMessage("1420 is even");
				} elseif ($number == 1421) {
					$sender->sendMessage("1421 is odd");
				} elseif ($number == 1422) {
					$sender->sendMessage("1422 is even");
				} elseif ($number == 1423) {
					$sender->sendMessage("1423 is odd");
				} elseif ($number == 1424) {
					$sender->sendMessage("1424 is even");
				} elseif ($number == 1425) {
					$sender->sendMessage("1425 is odd");
				} elseif ($number == 1426) {
					$sender->sendMessage("1426 is even");
				} elseif ($number == 1427) {
					$sender->sendMessage("1427 is odd");
				} elseif ($number == 1428) {
					$sender->sendMessage("1428 is even");
				} elseif ($number == 1429) {
					$sender->sendMessage("1429 is odd");
				} elseif ($number == 1430) {
					$sender->sendMessage("1430 is even");
				} elseif ($number == 1431) {
					$sender->sendMessage("1431 is odd");
				} elseif ($number == 1432) {
					$sender->sendMessage("1432 is even");
				} elseif ($number == 1433) {
					$sender->sendMessage("1433 is odd");
				} elseif ($number == 1434) {
					$sender->sendMessage("1434 is even");
				} elseif ($number == 1435) {
					$sender->sendMessage("1435 is odd");
				} elseif ($number == 1436) {
					$sender->sendMessage("1436 is even");
				} elseif ($number == 1437) {
					$sender->sendMessage("1437 is odd");
				} elseif ($number == 1438) {
					$sender->sendMessage("1438 is even");
				} elseif ($number == 1439) {
					$sender->sendMessage("1439 is odd");
				} elseif ($number == 1440) {
					$sender->sendMessage("1440 is even");
				} elseif ($number == 1441) {
					$sender->sendMessage("1441 is odd");
				} elseif ($number == 1442) {
					$sender->sendMessage("1442 is even");
				} elseif ($number == 1443) {
					$sender->sendMessage("1443 is odd");
				} elseif ($number == 1444) {
					$sender->sendMessage("1444 is even");
				} elseif ($number == 1445) {
					$sender->sendMessage("1445 is odd");
				} elseif ($number == 1446) {
					$sender->sendMessage("1446 is even");
				} elseif ($number == 1447) {
					$sender->sendMessage("1447 is odd");
				} elseif ($number == 1448) {
					$sender->sendMessage("1448 is even");
				} elseif ($number == 1449) {
					$sender->sendMessage("1449 is odd");
				} elseif ($number == 1450) {
					$sender->sendMessage("1450 is even");
				} elseif ($number == 1451) {
					$sender->sendMessage("1451 is odd");
				} elseif ($number == 1452) {
					$sender->sendMessage("1452 is even");
				} elseif ($number == 1453) {
					$sender->sendMessage("1453 is odd");
				} elseif ($number == 1454) {
					$sender->sendMessage("1454 is even");
				} elseif ($number == 1455) {
					$sender->sendMessage("1455 is odd");
				} elseif ($number == 1456) {
					$sender->sendMessage("1456 is even");
				} elseif ($number == 1457) {
					$sender->sendMessage("1457 is odd");
				} elseif ($number == 1458) {
					$sender->sendMessage("1458 is even");
				} elseif ($number == 1459) {
					$sender->sendMessage("1459 is odd");
				} elseif ($number == 1460) {
					$sender->sendMessage("1460 is even");
				} elseif ($number == 1461) {
					$sender->sendMessage("1461 is odd");
				} elseif ($number == 1462) {
					$sender->sendMessage("1462 is even");
				} elseif ($number == 1463) {
					$sender->sendMessage("1463 is odd");
				} elseif ($number == 1464) {
					$sender->sendMessage("1464 is even");
				} elseif ($number == 1465) {
					$sender->sendMessage("1465 is odd");
				} elseif ($number == 1466) {
					$sender->sendMessage("1466 is even");
				} elseif ($number == 1467) {
					$sender->sendMessage("1467 is odd");
				} elseif ($number == 1468) {
					$sender->sendMessage("1468 is even");
				} elseif ($number == 1469) {
					$sender->sendMessage("1469 is odd");
				} elseif ($number == 1470) {
					$sender->sendMessage("1470 is even");
				} elseif ($number == 1471) {
					$sender->sendMessage("1471 is odd");
				} elseif ($number == 1472) {
					$sender->sendMessage("1472 is even");
				} elseif ($number == 1473) {
					$sender->sendMessage("1473 is odd");
				} elseif ($number == 1474) {
					$sender->sendMessage("1474 is even");
				} elseif ($number == 1475) {
					$sender->sendMessage("1475 is odd");
				} elseif ($number == 1476) {
					$sender->sendMessage("1476 is even");
				} elseif ($number == 1477) {
					$sender->sendMessage("1477 is odd");
				} elseif ($number == 1478) {
					$sender->sendMessage("1478 is even");
				} elseif ($number == 1479) {
					$sender->sendMessage("1479 is odd");
				} elseif ($number == 1480) {
					$sender->sendMessage("1480 is even");
				} elseif ($number == 1481) {
					$sender->sendMessage("1481 is odd");
				} elseif ($number == 1482) {
					$sender->sendMessage("1482 is even");
				} elseif ($number == 1483) {
					$sender->sendMessage("1483 is odd");
				} elseif ($number == 1484) {
					$sender->sendMessage("1484 is even");
				} elseif ($number == 1485) {
					$sender->sendMessage("1485 is odd");
				} elseif ($number == 1486) {
					$sender->sendMessage("1486 is even");
				} elseif ($number == 1487) {
					$sender->sendMessage("1487 is odd");
				} elseif ($number == 1488) {
					$sender->sendMessage("1488 is even");
				} elseif ($number == 1489) {
					$sender->sendMessage("1489 is odd");
				} elseif ($number == 1490) {
					$sender->sendMessage("1490 is even");
				} elseif ($number == 1491) {
					$sender->sendMessage("1491 is odd");
				} elseif ($number == 1492) {
					$sender->sendMessage("1492 is even");
				} elseif ($number == 1493) {
					$sender->sendMessage("1493 is odd");
				} elseif ($number == 1494) {
					$sender->sendMessage("1494 is even");
				} elseif ($number == 1495) {
					$sender->sendMessage("1495 is odd");
				} elseif ($number == 1496) {
					$sender->sendMessage("1496 is even");
				} elseif ($number == 1497) {
					$sender->sendMessage("1497 is odd");
				} elseif ($number == 1498) {
					$sender->sendMessage("1498 is even");
				} elseif ($number == 1499) {
					$sender->sendMessage("1499 is odd");
				} elseif ($number == 1500) {
					$sender->sendMessage("1500 is even");
				} elseif ($number == 1501) {
					$sender->sendMessage("1501 is odd");
				} elseif ($number == 1502) {
					$sender->sendMessage("1502 is even");
				} elseif ($number == 1503) {
					$sender->sendMessage("1503 is odd");
				} elseif ($number == 1504) {
					$sender->sendMessage("1504 is even");
				} elseif ($number == 1505) {
					$sender->sendMessage("1505 is odd");
				} elseif ($number == 1506) {
					$sender->sendMessage("1506 is even");
				} elseif ($number == 1507) {
					$sender->sendMessage("1507 is odd");
				} elseif ($number == 1508) {
					$sender->sendMessage("1508 is even");
				} elseif ($number == 1509) {
					$sender->sendMessage("1509 is odd");
				} elseif ($number == 1510) {
					$sender->sendMessage("1510 is even");
				} elseif ($number == 1511) {
					$sender->sendMessage("1511 is odd");
				} elseif ($number == 1512) {
					$sender->sendMessage("1512 is even");
				} elseif ($number == 1513) {
					$sender->sendMessage("1513 is odd");
				} elseif ($number == 1514) {
					$sender->sendMessage("1514 is even");
				} elseif ($number == 1515) {
					$sender->sendMessage("1515 is odd");
				} elseif ($number == 1516) {
					$sender->sendMessage("1516 is even");
				} elseif ($number == 1517) {
					$sender->sendMessage("1517 is odd");
				} elseif ($number == 1518) {
					$sender->sendMessage("1518 is even");
				} elseif ($number == 1519) {
					$sender->sendMessage("1519 is odd");
				} elseif ($number == 1520) {
					$sender->sendMessage("1520 is even");
				} elseif ($number == 1521) {
					$sender->sendMessage("1521 is odd");
				} elseif ($number == 1522) {
					$sender->sendMessage("1522 is even");
				} elseif ($number == 1523) {
					$sender->sendMessage("1523 is odd");
				} elseif ($number == 1524) {
					$sender->sendMessage("1524 is even");
				} elseif ($number == 1525) {
					$sender->sendMessage("1525 is odd");
				} elseif ($number == 1526) {
					$sender->sendMessage("1526 is even");
				} elseif ($number == 1527) {
					$sender->sendMessage("1527 is odd");
				} elseif ($number == 1528) {
					$sender->sendMessage("1528 is even");
				} elseif ($number == 1529) {
					$sender->sendMessage("1529 is odd");
				} elseif ($number == 1530) {
					$sender->sendMessage("1530 is even");
				} elseif ($number == 1531) {
					$sender->sendMessage("1531 is odd");
				} elseif ($number == 1532) {
					$sender->sendMessage("1532 is even");
				} elseif ($number == 1533) {
					$sender->sendMessage("1533 is odd");
				} elseif ($number == 1534) {
					$sender->sendMessage("1534 is even");
				} elseif ($number == 1535) {
					$sender->sendMessage("1535 is odd");
				} elseif ($number == 1536) {
					$sender->sendMessage("1536 is even");
				} elseif ($number == 1537) {
					$sender->sendMessage("1537 is odd");
				} elseif ($number == 1538) {
					$sender->sendMessage("1538 is even");
				} elseif ($number == 1539) {
					$sender->sendMessage("1539 is odd");
				} elseif ($number == 1540) {
					$sender->sendMessage("1540 is even");
				} elseif ($number == 1541) {
					$sender->sendMessage("1541 is odd");
				} elseif ($number == 1542) {
					$sender->sendMessage("1542 is even");
				} elseif ($number == 1543) {
					$sender->sendMessage("1543 is odd");
				} elseif ($number == 1544) {
					$sender->sendMessage("1544 is even");
				} elseif ($number == 1545) {
					$sender->sendMessage("1545 is odd");
				} elseif ($number == 1546) {
					$sender->sendMessage("1546 is even");
				} elseif ($number == 1547) {
					$sender->sendMessage("1547 is odd");
				} elseif ($number == 1548) {
					$sender->sendMessage("1548 is even");
				} elseif ($number == 1549) {
					$sender->sendMessage("1549 is odd");
				} elseif ($number == 1550) {
					$sender->sendMessage("1550 is even");
				} elseif ($number == 1551) {
					$sender->sendMessage("1551 is odd");
				} elseif ($number == 1552) {
					$sender->sendMessage("1552 is even");
				} elseif ($number == 1553) {
					$sender->sendMessage("1553 is odd");
				} elseif ($number == 1554) {
					$sender->sendMessage("1554 is even");
				} elseif ($number == 1555) {
					$sender->sendMessage("1555 is odd");
				} elseif ($number == 1556) {
					$sender->sendMessage("1556 is even");
				} elseif ($number == 1557) {
					$sender->sendMessage("1557 is odd");
				} elseif ($number == 1558) {
					$sender->sendMessage("1558 is even");
				} elseif ($number == 1559) {
					$sender->sendMessage("1559 is odd");
				} elseif ($number == 1560) {
					$sender->sendMessage("1560 is even");
				} elseif ($number == 1561) {
					$sender->sendMessage("1561 is odd");
				} elseif ($number == 1562) {
					$sender->sendMessage("1562 is even");
				} elseif ($number == 1563) {
					$sender->sendMessage("1563 is odd");
				} elseif ($number == 1564) {
					$sender->sendMessage("1564 is even");
				} elseif ($number == 1565) {
					$sender->sendMessage("1565 is odd");
				} elseif ($number == 1566) {
					$sender->sendMessage("1566 is even");
				} elseif ($number == 1567) {
					$sender->sendMessage("1567 is odd");
				} elseif ($number == 1568) {
					$sender->sendMessage("1568 is even");
				} elseif ($number == 1569) {
					$sender->sendMessage("1569 is odd");
				} elseif ($number == 1570) {
					$sender->sendMessage("1570 is even");
				} elseif ($number == 1571) {
					$sender->sendMessage("1571 is odd");
				} elseif ($number == 1572) {
					$sender->sendMessage("1572 is even");
				} elseif ($number == 1573) {
					$sender->sendMessage("1573 is odd");
				} elseif ($number == 1574) {
					$sender->sendMessage("1574 is even");
				} elseif ($number == 1575) {
					$sender->sendMessage("1575 is odd");
				} elseif ($number == 1576) {
					$sender->sendMessage("1576 is even");
				} elseif ($number == 1577) {
					$sender->sendMessage("1577 is odd");
				} elseif ($number == 1578) {
					$sender->sendMessage("1578 is even");
				} elseif ($number == 1579) {
					$sender->sendMessage("1579 is odd");
				} elseif ($number == 1580) {
					$sender->sendMessage("1580 is even");
				} elseif ($number == 1581) {
					$sender->sendMessage("1581 is odd");
				} elseif ($number == 1582) {
					$sender->sendMessage("1582 is even");
				} elseif ($number == 1583) {
					$sender->sendMessage("1583 is odd");
				} elseif ($number == 1584) {
					$sender->sendMessage("1584 is even");
				} elseif ($number == 1585) {
					$sender->sendMessage("1585 is odd");
				} elseif ($number == 1586) {
					$sender->sendMessage("1586 is even");
				} elseif ($number == 1587) {
					$sender->sendMessage("1587 is odd");
				} elseif ($number == 1588) {
					$sender->sendMessage("1588 is even");
				} elseif ($number == 1589) {
					$sender->sendMessage("1589 is odd");
				} elseif ($number == 1590) {
					$sender->sendMessage("1590 is even");
				} elseif ($number == 1591) {
					$sender->sendMessage("1591 is odd");
				} elseif ($number == 1592) {
					$sender->sendMessage("1592 is even");
				} elseif ($number == 1593) {
					$sender->sendMessage("1593 is odd");
				} elseif ($number == 1594) {
					$sender->sendMessage("1594 is even");
				} elseif ($number == 1595) {
					$sender->sendMessage("1595 is odd");
				} elseif ($number == 1596) {
					$sender->sendMessage("1596 is even");
				} elseif ($number == 1597) {
					$sender->sendMessage("1597 is odd");
				} elseif ($number == 1598) {
					$sender->sendMessage("1598 is even");
				} elseif ($number == 1599) {
					$sender->sendMessage("1599 is odd");
				} elseif ($number == 1600) {
					$sender->sendMessage("1600 is even");
				} elseif ($number == 1601) {
					$sender->sendMessage("1601 is odd");
				} elseif ($number == 1602) {
					$sender->sendMessage("1602 is even");
				} elseif ($number == 1603) {
					$sender->sendMessage("1603 is odd");
				} elseif ($number == 1604) {
					$sender->sendMessage("1604 is even");
				} elseif ($number == 1605) {
					$sender->sendMessage("1605 is odd");
				} elseif ($number == 1606) {
					$sender->sendMessage("1606 is even");
				} elseif ($number == 1607) {
					$sender->sendMessage("1607 is odd");
				} elseif ($number == 1608) {
					$sender->sendMessage("1608 is even");
				} elseif ($number == 1609) {
					$sender->sendMessage("1609 is odd");
				} elseif ($number == 1610) {
					$sender->sendMessage("1610 is even");
				} elseif ($number == 1611) {
					$sender->sendMessage("1611 is odd");
				} elseif ($number == 1612) {
					$sender->sendMessage("1612 is even");
				} elseif ($number == 1613) {
					$sender->sendMessage("1613 is odd");
				} elseif ($number == 1614) {
					$sender->sendMessage("1614 is even");
				} elseif ($number == 1615) {
					$sender->sendMessage("1615 is odd");
				} elseif ($number == 1616) {
					$sender->sendMessage("1616 is even");
				} elseif ($number == 1617) {
					$sender->sendMessage("1617 is odd");
				} elseif ($number == 1618) {
					$sender->sendMessage("1618 is even");
				} elseif ($number == 1619) {
					$sender->sendMessage("1619 is odd");
				} elseif ($number == 1620) {
					$sender->sendMessage("1620 is even");
				} elseif ($number == 1621) {
					$sender->sendMessage("1621 is odd");
				} elseif ($number == 1622) {
					$sender->sendMessage("1622 is even");
				} elseif ($number == 1623) {
					$sender->sendMessage("1623 is odd");
				} elseif ($number == 1624) {
					$sender->sendMessage("1624 is even");
				} elseif ($number == 1625) {
					$sender->sendMessage("1625 is odd");
				} elseif ($number == 1626) {
					$sender->sendMessage("1626 is even");
				} elseif ($number == 1627) {
					$sender->sendMessage("1627 is odd");
				} elseif ($number == 1628) {
					$sender->sendMessage("1628 is even");
				} elseif ($number == 1629) {
					$sender->sendMessage("1629 is odd");
				} elseif ($number == 1630) {
					$sender->sendMessage("1630 is even");
				} elseif ($number == 1631) {
					$sender->sendMessage("1631 is odd");
				} elseif ($number == 1632) {
					$sender->sendMessage("1632 is even");
				} elseif ($number == 1633) {
					$sender->sendMessage("1633 is odd");
				} elseif ($number == 1634) {
					$sender->sendMessage("1634 is even");
				} elseif ($number == 1635) {
					$sender->sendMessage("1635 is odd");
				} elseif ($number == 1636) {
					$sender->sendMessage("1636 is even");
				} elseif ($number == 1637) {
					$sender->sendMessage("1637 is odd");
				} elseif ($number == 1638) {
					$sender->sendMessage("1638 is even");
				} elseif ($number == 1639) {
					$sender->sendMessage("1639 is odd");
				} elseif ($number == 1640) {
					$sender->sendMessage("1640 is even");
				} elseif ($number == 1641) {
					$sender->sendMessage("1641 is odd");
				} elseif ($number == 1642) {
					$sender->sendMessage("1642 is even");
				} elseif ($number == 1643) {
					$sender->sendMessage("1643 is odd");
				} elseif ($number == 1644) {
					$sender->sendMessage("1644 is even");
				} elseif ($number == 1645) {
					$sender->sendMessage("1645 is odd");
				} elseif ($number == 1646) {
					$sender->sendMessage("1646 is even");
				} elseif ($number == 1647) {
					$sender->sendMessage("1647 is odd");
				} elseif ($number == 1648) {
					$sender->sendMessage("1648 is even");
				} elseif ($number == 1649) {
					$sender->sendMessage("1649 is odd");
				} elseif ($number == 1650) {
					$sender->sendMessage("1650 is even");
				} elseif ($number == 1651) {
					$sender->sendMessage("1651 is odd");
				} elseif ($number == 1652) {
					$sender->sendMessage("1652 is even");
				} elseif ($number == 1653) {
					$sender->sendMessage("1653 is odd");
				} elseif ($number == 1654) {
					$sender->sendMessage("1654 is even");
				} elseif ($number == 1655) {
					$sender->sendMessage("1655 is odd");
				} elseif ($number == 1656) {
					$sender->sendMessage("1656 is even");
				} elseif ($number == 1657) {
					$sender->sendMessage("1657 is odd");
				} elseif ($number == 1658) {
					$sender->sendMessage("1658 is even");
				} elseif ($number == 1659) {
					$sender->sendMessage("1659 is odd");
				} elseif ($number == 1660) {
					$sender->sendMessage("1660 is even");
				} elseif ($number == 1661) {
					$sender->sendMessage("1661 is odd");
				} elseif ($number == 1662) {
					$sender->sendMessage("1662 is even");
				} elseif ($number == 1663) {
					$sender->sendMessage("1663 is odd");
				} elseif ($number == 1664) {
					$sender->sendMessage("1664 is even");
				} elseif ($number == 1665) {
					$sender->sendMessage("1665 is odd");
				} elseif ($number == 1666) {
					$sender->sendMessage("1666 is even");
				} elseif ($number == 1667) {
					$sender->sendMessage("1667 is odd");
				} elseif ($number == 1668) {
					$sender->sendMessage("1668 is even");
				} elseif ($number == 1669) {
					$sender->sendMessage("1669 is odd");
				} elseif ($number == 1670) {
					$sender->sendMessage("1670 is even");
				} elseif ($number == 1671) {
					$sender->sendMessage("1671 is odd");
				} elseif ($number == 1672) {
					$sender->sendMessage("1672 is even");
				} elseif ($number == 1673) {
					$sender->sendMessage("1673 is odd");
				} elseif ($number == 1674) {
					$sender->sendMessage("1674 is even");
				} elseif ($number == 1675) {
					$sender->sendMessage("1675 is odd");
				} elseif ($number == 1676) {
					$sender->sendMessage("1676 is even");
				} elseif ($number == 1677) {
					$sender->sendMessage("1677 is odd");
				} elseif ($number == 1678) {
					$sender->sendMessage("1678 is even");
				} elseif ($number == 1679) {
					$sender->sendMessage("1679 is odd");
				} elseif ($number == 1680) {
					$sender->sendMessage("1680 is even");
				} elseif ($number == 1681) {
					$sender->sendMessage("1681 is odd");
				} elseif ($number == 1682) {
					$sender->sendMessage("1682 is even");
				} elseif ($number == 1683) {
					$sender->sendMessage("1683 is odd");
				} elseif ($number == 1684) {
					$sender->sendMessage("1684 is even");
				} elseif ($number == 1685) {
					$sender->sendMessage("1685 is odd");
				} elseif ($number == 1686) {
					$sender->sendMessage("1686 is even");
				} elseif ($number == 1687) {
					$sender->sendMessage("1687 is odd");
				} elseif ($number == 1688) {
					$sender->sendMessage("1688 is even");
				} elseif ($number == 1689) {
					$sender->sendMessage("1689 is odd");
				} elseif ($number == 1690) {
					$sender->sendMessage("1690 is even");
				} elseif ($number == 1691) {
					$sender->sendMessage("1691 is odd");
				} elseif ($number == 1692) {
					$sender->sendMessage("1692 is even");
				} elseif ($number == 1693) {
					$sender->sendMessage("1693 is odd");
				} elseif ($number == 1694) {
					$sender->sendMessage("1694 is even");
				} elseif ($number == 1695) {
					$sender->sendMessage("1695 is odd");
				} elseif ($number == 1696) {
					$sender->sendMessage("1696 is even");
				} elseif ($number == 1697) {
					$sender->sendMessage("1697 is odd");
				} elseif ($number == 1698) {
					$sender->sendMessage("1698 is even");
				} elseif ($number == 1699) {
					$sender->sendMessage("1699 is odd");
				} elseif ($number == 1700) {
					$sender->sendMessage("1700 is even");
				} elseif ($number == 1701) {
					$sender->sendMessage("1701 is odd");
				} elseif ($number == 1702) {
					$sender->sendMessage("1702 is even");
				} elseif ($number == 1703) {
					$sender->sendMessage("1703 is odd");
				} elseif ($number == 1704) {
					$sender->sendMessage("1704 is even");
				} elseif ($number == 1705) {
					$sender->sendMessage("1705 is odd");
				} elseif ($number == 1706) {
					$sender->sendMessage("1706 is even");
				} elseif ($number == 1707) {
					$sender->sendMessage("1707 is odd");
				} elseif ($number == 1708) {
					$sender->sendMessage("1708 is even");
				} elseif ($number == 1709) {
					$sender->sendMessage("1709 is odd");
				} elseif ($number == 1710) {
					$sender->sendMessage("1710 is even");
				} elseif ($number == 1711) {
					$sender->sendMessage("1711 is odd");
				} elseif ($number == 1712) {
					$sender->sendMessage("1712 is even");
				} elseif ($number == 1713) {
					$sender->sendMessage("1713 is odd");
				} elseif ($number == 1714) {
					$sender->sendMessage("1714 is even");
				} elseif ($number == 1715) {
					$sender->sendMessage("1715 is odd");
				} elseif ($number == 1716) {
					$sender->sendMessage("1716 is even");
				} elseif ($number == 1717) {
					$sender->sendMessage("1717 is odd");
				} elseif ($number == 1718) {
					$sender->sendMessage("1718 is even");
				} elseif ($number == 1719) {
					$sender->sendMessage("1719 is odd");
				} elseif ($number == 1720) {
					$sender->sendMessage("1720 is even");
				} elseif ($number == 1721) {
					$sender->sendMessage("1721 is odd");
				} elseif ($number == 1722) {
					$sender->sendMessage("1722 is even");
				} elseif ($number == 1723) {
					$sender->sendMessage("1723 is odd");
				} elseif ($number == 1724) {
					$sender->sendMessage("1724 is even");
				} elseif ($number == 1725) {
					$sender->sendMessage("1725 is odd");
				} elseif ($number == 1726) {
					$sender->sendMessage("1726 is even");
				} elseif ($number == 1727) {
					$sender->sendMessage("1727 is odd");
				} elseif ($number == 1728) {
					$sender->sendMessage("1728 is even");
				} elseif ($number == 1729) {
					$sender->sendMessage("1729 is odd");
				} elseif ($number == 1730) {
					$sender->sendMessage("1730 is even");
				} elseif ($number == 1731) {
					$sender->sendMessage("1731 is odd");
				} elseif ($number == 1732) {
					$sender->sendMessage("1732 is even");
				} elseif ($number == 1733) {
					$sender->sendMessage("1733 is odd");
				} elseif ($number == 1734) {
					$sender->sendMessage("1734 is even");
				} elseif ($number == 1735) {
					$sender->sendMessage("1735 is odd");
				} elseif ($number == 1736) {
					$sender->sendMessage("1736 is even");
				} elseif ($number == 1737) {
					$sender->sendMessage("1737 is odd");
				} elseif ($number == 1738) {
					$sender->sendMessage("1738 is even");
				} elseif ($number == 1739) {
					$sender->sendMessage("1739 is odd");
				} elseif ($number == 1740) {
					$sender->sendMessage("1740 is even");
				} elseif ($number == 1741) {
					$sender->sendMessage("1741 is odd");
				} elseif ($number == 1742) {
					$sender->sendMessage("1742 is even");
				} elseif ($number == 1743) {
					$sender->sendMessage("1743 is odd");
				} elseif ($number == 1744) {
					$sender->sendMessage("1744 is even");
				} elseif ($number == 1745) {
					$sender->sendMessage("1745 is odd");
				} elseif ($number == 1746) {
					$sender->sendMessage("1746 is even");
				} elseif ($number == 1747) {
					$sender->sendMessage("1747 is odd");
				} elseif ($number == 1748) {
					$sender->sendMessage("1748 is even");
				} elseif ($number == 1749) {
					$sender->sendMessage("1749 is odd");
				} elseif ($number == 1750) {
					$sender->sendMessage("1750 is even");
				} elseif ($number == 1751) {
					$sender->sendMessage("1751 is odd");
				} elseif ($number == 1752) {
					$sender->sendMessage("1752 is even");
				} elseif ($number == 1753) {
					$sender->sendMessage("1753 is odd");
				} elseif ($number == 1754) {
					$sender->sendMessage("1754 is even");
				} elseif ($number == 1755) {
					$sender->sendMessage("1755 is odd");
				} elseif ($number == 1756) {
					$sender->sendMessage("1756 is even");
				} elseif ($number == 1757) {
					$sender->sendMessage("1757 is odd");
				} elseif ($number == 1758) {
					$sender->sendMessage("1758 is even");
				} elseif ($number == 1759) {
					$sender->sendMessage("1759 is odd");
				} elseif ($number == 1760) {
					$sender->sendMessage("1760 is even");
				} elseif ($number == 1761) {
					$sender->sendMessage("1761 is odd");
				} elseif ($number == 1762) {
					$sender->sendMessage("1762 is even");
				} elseif ($number == 1763) {
					$sender->sendMessage("1763 is odd");
				} elseif ($number == 1764) {
					$sender->sendMessage("1764 is even");
				} elseif ($number == 1765) {
					$sender->sendMessage("1765 is odd");
				} elseif ($number == 1766) {
					$sender->sendMessage("1766 is even");
				} elseif ($number == 1767) {
					$sender->sendMessage("1767 is odd");
				} elseif ($number == 1768) {
					$sender->sendMessage("1768 is even");
				} elseif ($number == 1769) {
					$sender->sendMessage("1769 is odd");
				} elseif ($number == 1770) {
					$sender->sendMessage("1770 is even");
				} elseif ($number == 1771) {
					$sender->sendMessage("1771 is odd");
				} elseif ($number == 1772) {
					$sender->sendMessage("1772 is even");
				} elseif ($number == 1773) {
					$sender->sendMessage("1773 is odd");
				} elseif ($number == 1774) {
					$sender->sendMessage("1774 is even");
				} elseif ($number == 1775) {
					$sender->sendMessage("1775 is odd");
				} elseif ($number == 1776) {
					$sender->sendMessage("1776 is even");
				} elseif ($number == 1777) {
					$sender->sendMessage("1777 is odd");
				} elseif ($number == 1778) {
					$sender->sendMessage("1778 is even");
				} elseif ($number == 1779) {
					$sender->sendMessage("1779 is odd");
				} elseif ($number == 1780) {
					$sender->sendMessage("1780 is even");
				} elseif ($number == 1781) {
					$sender->sendMessage("1781 is odd");
				} elseif ($number == 1782) {
					$sender->sendMessage("1782 is even");
				} elseif ($number == 1783) {
					$sender->sendMessage("1783 is odd");
				} elseif ($number == 1784) {
					$sender->sendMessage("1784 is even");
				} elseif ($number == 1785) {
					$sender->sendMessage("1785 is odd");
				} elseif ($number == 1786) {
					$sender->sendMessage("1786 is even");
				} elseif ($number == 1787) {
					$sender->sendMessage("1787 is odd");
				} elseif ($number == 1788) {
					$sender->sendMessage("1788 is even");
				} elseif ($number == 1789) {
					$sender->sendMessage("1789 is odd");
				} elseif ($number == 1790) {
					$sender->sendMessage("1790 is even");
				} elseif ($number == 1791) {
					$sender->sendMessage("1791 is odd");
				} elseif ($number == 1792) {
					$sender->sendMessage("1792 is even");
				} elseif ($number == 1793) {
					$sender->sendMessage("1793 is odd");
				} elseif ($number == 1794) {
					$sender->sendMessage("1794 is even");
				} elseif ($number == 1795) {
					$sender->sendMessage("1795 is odd");
				} elseif ($number == 1796) {
					$sender->sendMessage("1796 is even");
				} elseif ($number == 1797) {
					$sender->sendMessage("1797 is odd");
				} elseif ($number == 1798) {
					$sender->sendMessage("1798 is even");
				} elseif ($number == 1799) {
					$sender->sendMessage("1799 is odd");
				} elseif ($number == 1800) {
					$sender->sendMessage("1800 is even");
				} elseif ($number == 1801) {
					$sender->sendMessage("1801 is odd");
				} elseif ($number == 1802) {
					$sender->sendMessage("1802 is even");
				} elseif ($number == 1803) {
					$sender->sendMessage("1803 is odd");
				} elseif ($number == 1804) {
					$sender->sendMessage("1804 is even");
				} elseif ($number == 1805) {
					$sender->sendMessage("1805 is odd");
				} elseif ($number == 1806) {
					$sender->sendMessage("1806 is even");
				} elseif ($number == 1807) {
					$sender->sendMessage("1807 is odd");
				} elseif ($number == 1808) {
					$sender->sendMessage("1808 is even");
				} elseif ($number == 1809) {
					$sender->sendMessage("1809 is odd");
				} elseif ($number == 1810) {
					$sender->sendMessage("1810 is even");
				} elseif ($number == 1811) {
					$sender->sendMessage("1811 is odd");
				} elseif ($number == 1812) {
					$sender->sendMessage("1812 is even");
				} elseif ($number == 1813) {
					$sender->sendMessage("1813 is odd");
				} elseif ($number == 1814) {
					$sender->sendMessage("1814 is even");
				} elseif ($number == 1815) {
					$sender->sendMessage("1815 is odd");
				} elseif ($number == 1816) {
					$sender->sendMessage("1816 is even");
				} elseif ($number == 1817) {
					$sender->sendMessage("1817 is odd");
				} elseif ($number == 1818) {
					$sender->sendMessage("1818 is even");
				} elseif ($number == 1819) {
					$sender->sendMessage("1819 is odd");
				} elseif ($number == 1820) {
					$sender->sendMessage("1820 is even");
				} elseif ($number == 1821) {
					$sender->sendMessage("1821 is odd");
				} elseif ($number == 1822) {
					$sender->sendMessage("1822 is even");
				} elseif ($number == 1823) {
					$sender->sendMessage("1823 is odd");
				} elseif ($number == 1824) {
					$sender->sendMessage("1824 is even");
				} elseif ($number == 1825) {
					$sender->sendMessage("1825 is odd");
				} elseif ($number == 1826) {
					$sender->sendMessage("1826 is even");
				} elseif ($number == 1827) {
					$sender->sendMessage("1827 is odd");
				} elseif ($number == 1828) {
					$sender->sendMessage("1828 is even");
				} elseif ($number == 1829) {
					$sender->sendMessage("1829 is odd");
				} elseif ($number == 1830) {
					$sender->sendMessage("1830 is even");
				} elseif ($number == 1831) {
					$sender->sendMessage("1831 is odd");
				} elseif ($number == 1832) {
					$sender->sendMessage("1832 is even");
				} elseif ($number == 1833) {
					$sender->sendMessage("1833 is odd");
				} elseif ($number == 1834) {
					$sender->sendMessage("1834 is even");
				} elseif ($number == 1835) {
					$sender->sendMessage("1835 is odd");
				} elseif ($number == 1836) {
					$sender->sendMessage("1836 is even");
				} elseif ($number == 1837) {
					$sender->sendMessage("1837 is odd");
				} elseif ($number == 1838) {
					$sender->sendMessage("1838 is even");
				} elseif ($number == 1839) {
					$sender->sendMessage("1839 is odd");
				} elseif ($number == 1840) {
					$sender->sendMessage("1840 is even");
				} elseif ($number == 1841) {
					$sender->sendMessage("1841 is odd");
				} elseif ($number == 1842) {
					$sender->sendMessage("1842 is even");
				} elseif ($number == 1843) {
					$sender->sendMessage("1843 is odd");
				} elseif ($number == 1844) {
					$sender->sendMessage("1844 is even");
				} elseif ($number == 1845) {
					$sender->sendMessage("1845 is odd");
				} elseif ($number == 1846) {
					$sender->sendMessage("1846 is even");
				} elseif ($number == 1847) {
					$sender->sendMessage("1847 is odd");
				} elseif ($number == 1848) {
					$sender->sendMessage("1848 is even");
				} elseif ($number == 1849) {
					$sender->sendMessage("1849 is odd");
				} elseif ($number == 1850) {
					$sender->sendMessage("1850 is even");
				} elseif ($number == 1851) {
					$sender->sendMessage("1851 is odd");
				} elseif ($number == 1852) {
					$sender->sendMessage("1852 is even");
				} elseif ($number == 1853) {
					$sender->sendMessage("1853 is odd");
				} elseif ($number == 1854) {
					$sender->sendMessage("1854 is even");
				} elseif ($number == 1855) {
					$sender->sendMessage("1855 is odd");
				} elseif ($number == 1856) {
					$sender->sendMessage("1856 is even");
				} elseif ($number == 1857) {
					$sender->sendMessage("1857 is odd");
				} elseif ($number == 1858) {
					$sender->sendMessage("1858 is even");
				} elseif ($number == 1859) {
					$sender->sendMessage("1859 is odd");
				} elseif ($number == 1860) {
					$sender->sendMessage("1860 is even");
				} elseif ($number == 1861) {
					$sender->sendMessage("1861 is odd");
				} elseif ($number == 1862) {
					$sender->sendMessage("1862 is even");
				} elseif ($number == 1863) {
					$sender->sendMessage("1863 is odd");
				} elseif ($number == 1864) {
					$sender->sendMessage("1864 is even");
				} elseif ($number == 1865) {
					$sender->sendMessage("1865 is odd");
				} elseif ($number == 1866) {
					$sender->sendMessage("1866 is even");
				} elseif ($number == 1867) {
					$sender->sendMessage("1867 is odd");
				} elseif ($number == 1868) {
					$sender->sendMessage("1868 is even");
				} elseif ($number == 1869) {
					$sender->sendMessage("1869 is odd");
				} elseif ($number == 1870) {
					$sender->sendMessage("1870 is even");
				} elseif ($number == 1871) {
					$sender->sendMessage("1871 is odd");
				} elseif ($number == 1872) {
					$sender->sendMessage("1872 is even");
				} elseif ($number == 1873) {
					$sender->sendMessage("1873 is odd");
				} elseif ($number == 1874) {
					$sender->sendMessage("1874 is even");
				} elseif ($number == 1875) {
					$sender->sendMessage("1875 is odd");
				} elseif ($number == 1876) {
					$sender->sendMessage("1876 is even");
				} elseif ($number == 1877) {
					$sender->sendMessage("1877 is odd");
				} elseif ($number == 1878) {
					$sender->sendMessage("1878 is even");
				} elseif ($number == 1879) {
					$sender->sendMessage("1879 is odd");
				} elseif ($number == 1880) {
					$sender->sendMessage("1880 is even");
				} elseif ($number == 1881) {
					$sender->sendMessage("1881 is odd");
				} elseif ($number == 1882) {
					$sender->sendMessage("1882 is even");
				} elseif ($number == 1883) {
					$sender->sendMessage("1883 is odd");
				} elseif ($number == 1884) {
					$sender->sendMessage("1884 is even");
				} elseif ($number == 1885) {
					$sender->sendMessage("1885 is odd");
				} elseif ($number == 1886) {
					$sender->sendMessage("1886 is even");
				} elseif ($number == 1887) {
					$sender->sendMessage("1887 is odd");
				} elseif ($number == 1888) {
					$sender->sendMessage("1888 is even");
				} elseif ($number == 1889) {
					$sender->sendMessage("1889 is odd");
				} elseif ($number == 1890) {
					$sender->sendMessage("1890 is even");
				} elseif ($number == 1891) {
					$sender->sendMessage("1891 is odd");
				} elseif ($number == 1892) {
					$sender->sendMessage("1892 is even");
				} elseif ($number == 1893) {
					$sender->sendMessage("1893 is odd");
				} elseif ($number == 1894) {
					$sender->sendMessage("1894 is even");
				} elseif ($number == 1895) {
					$sender->sendMessage("1895 is odd");
				} elseif ($number == 1896) {
					$sender->sendMessage("1896 is even");
				} elseif ($number == 1897) {
					$sender->sendMessage("1897 is odd");
				} elseif ($number == 1898) {
					$sender->sendMessage("1898 is even");
				} elseif ($number == 1899) {
					$sender->sendMessage("1899 is odd");
				} elseif ($number == 1900) {
					$sender->sendMessage("1900 is even");
				} elseif ($number == 1901) {
					$sender->sendMessage("1901 is odd");
				} elseif ($number == 1902) {
					$sender->sendMessage("1902 is even");
				} elseif ($number == 1903) {
					$sender->sendMessage("1903 is odd");
				} elseif ($number == 1904) {
					$sender->sendMessage("1904 is even");
				} elseif ($number == 1905) {
					$sender->sendMessage("1905 is odd");
				} elseif ($number == 1906) {
					$sender->sendMessage("1906 is even");
				} elseif ($number == 1907) {
					$sender->sendMessage("1907 is odd");
				} elseif ($number == 1908) {
					$sender->sendMessage("1908 is even");
				} elseif ($number == 1909) {
					$sender->sendMessage("1909 is odd");
				} elseif ($number == 1910) {
					$sender->sendMessage("1910 is even");
				} elseif ($number == 1911) {
					$sender->sendMessage("1911 is odd");
				} elseif ($number == 1912) {
					$sender->sendMessage("1912 is even");
				} elseif ($number == 1913) {
					$sender->sendMessage("1913 is odd");
				} elseif ($number == 1914) {
					$sender->sendMessage("1914 is even");
				} elseif ($number == 1915) {
					$sender->sendMessage("1915 is odd");
				} elseif ($number == 1916) {
					$sender->sendMessage("1916 is even");
				} elseif ($number == 1917) {
					$sender->sendMessage("1917 is odd");
				} elseif ($number == 1918) {
					$sender->sendMessage("1918 is even");
				} elseif ($number == 1919) {
					$sender->sendMessage("1919 is odd");
				} elseif ($number == 1920) {
					$sender->sendMessage("1920 is even");
				} elseif ($number == 1921) {
					$sender->sendMessage("1921 is odd");
				} elseif ($number == 1922) {
					$sender->sendMessage("1922 is even");
				} elseif ($number == 1923) {
					$sender->sendMessage("1923 is odd");
				} elseif ($number == 1924) {
					$sender->sendMessage("1924 is even");
				} elseif ($number == 1925) {
					$sender->sendMessage("1925 is odd");
				} elseif ($number == 1926) {
					$sender->sendMessage("1926 is even");
				} elseif ($number == 1927) {
					$sender->sendMessage("1927 is odd");
				} elseif ($number == 1928) {
					$sender->sendMessage("1928 is even");
				} elseif ($number == 1929) {
					$sender->sendMessage("1929 is odd");
				} elseif ($number == 1930) {
					$sender->sendMessage("1930 is even");
				} elseif ($number == 1931) {
					$sender->sendMessage("1931 is odd");
				} elseif ($number == 1932) {
					$sender->sendMessage("1932 is even");
				} elseif ($number == 1933) {
					$sender->sendMessage("1933 is odd");
				} elseif ($number == 1934) {
					$sender->sendMessage("1934 is even");
				} elseif ($number == 1935) {
					$sender->sendMessage("1935 is odd");
				} elseif ($number == 1936) {
					$sender->sendMessage("1936 is even");
				} elseif ($number == 1937) {
					$sender->sendMessage("1937 is odd");
				} elseif ($number == 1938) {
					$sender->sendMessage("1938 is even");
				} elseif ($number == 1939) {
					$sender->sendMessage("1939 is odd");
				} elseif ($number == 1940) {
					$sender->sendMessage("1940 is even");
				} elseif ($number == 1941) {
					$sender->sendMessage("1941 is odd");
				} elseif ($number == 1942) {
					$sender->sendMessage("1942 is even");
				} elseif ($number == 1943) {
					$sender->sendMessage("1943 is odd");
				} elseif ($number == 1944) {
					$sender->sendMessage("1944 is even");
				} elseif ($number == 1945) {
					$sender->sendMessage("1945 is odd");
				} elseif ($number == 1946) {
					$sender->sendMessage("1946 is even");
				} elseif ($number == 1947) {
					$sender->sendMessage("1947 is odd");
				} elseif ($number == 1948) {
					$sender->sendMessage("1948 is even");
				} elseif ($number == 1949) {
					$sender->sendMessage("1949 is odd");
				} elseif ($number == 1950) {
					$sender->sendMessage("1950 is even");
				} elseif ($number == 1951) {
					$sender->sendMessage("1951 is odd");
				} elseif ($number == 1952) {
					$sender->sendMessage("1952 is even");
				} elseif ($number == 1953) {
					$sender->sendMessage("1953 is odd");
				} elseif ($number == 1954) {
					$sender->sendMessage("1954 is even");
				} elseif ($number == 1955) {
					$sender->sendMessage("1955 is odd");
				} elseif ($number == 1956) {
					$sender->sendMessage("1956 is even");
				} elseif ($number == 1957) {
					$sender->sendMessage("1957 is odd");
				} elseif ($number == 1958) {
					$sender->sendMessage("1958 is even");
				} elseif ($number == 1959) {
					$sender->sendMessage("1959 is odd");
				} elseif ($number == 1960) {
					$sender->sendMessage("1960 is even");
				} elseif ($number == 1961) {
					$sender->sendMessage("1961 is odd");
				} elseif ($number == 1962) {
					$sender->sendMessage("1962 is even");
				} elseif ($number == 1963) {
					$sender->sendMessage("1963 is odd");
				} elseif ($number == 1964) {
					$sender->sendMessage("1964 is even");
				} elseif ($number == 1965) {
					$sender->sendMessage("1965 is odd");
				} elseif ($number == 1966) {
					$sender->sendMessage("1966 is even");
				} elseif ($number == 1967) {
					$sender->sendMessage("1967 is odd");
				} elseif ($number == 1968) {
					$sender->sendMessage("1968 is even");
				} elseif ($number == 1969) {
					$sender->sendMessage("1969 is odd");
				} elseif ($number == 1970) {
					$sender->sendMessage("1970 is even");
				} elseif ($number == 1971) {
					$sender->sendMessage("1971 is odd");
				} elseif ($number == 1972) {
					$sender->sendMessage("1972 is even");
				} elseif ($number == 1973) {
					$sender->sendMessage("1973 is odd");
				} elseif ($number == 1974) {
					$sender->sendMessage("1974 is even");
				} elseif ($number == 1975) {
					$sender->sendMessage("1975 is odd");
				} elseif ($number == 1976) {
					$sender->sendMessage("1976 is even");
				} elseif ($number == 1977) {
					$sender->sendMessage("1977 is odd");
				} elseif ($number == 1978) {
					$sender->sendMessage("1978 is even");
				} elseif ($number == 1979) {
					$sender->sendMessage("1979 is odd");
				} elseif ($number == 1980) {
					$sender->sendMessage("1980 is even");
				} elseif ($number == 1981) {
					$sender->sendMessage("1981 is odd");
				} elseif ($number == 1982) {
					$sender->sendMessage("1982 is even");
				} elseif ($number == 1983) {
					$sender->sendMessage("1983 is odd");
				} elseif ($number == 1984) {
					$sender->sendMessage("1984 is even");
				} elseif ($number == 1985) {
					$sender->sendMessage("1985 is odd");
				} elseif ($number == 1986) {
					$sender->sendMessage("1986 is even");
				} elseif ($number == 1987) {
					$sender->sendMessage("1987 is odd");
				} elseif ($number == 1988) {
					$sender->sendMessage("1988 is even");
				} elseif ($number == 1989) {
					$sender->sendMessage("1989 is odd");
				} elseif ($number == 1990) {
					$sender->sendMessage("1990 is even");
				} elseif ($number == 1991) {
					$sender->sendMessage("1991 is odd");
				} elseif ($number == 1992) {
					$sender->sendMessage("1992 is even");
				} elseif ($number == 1993) {
					$sender->sendMessage("1993 is odd");
				} elseif ($number == 1994) {
					$sender->sendMessage("1994 is even");
				} elseif ($number == 1995) {
					$sender->sendMessage("1995 is odd");
				} elseif ($number == 1996) {
					$sender->sendMessage("1996 is even");
				} elseif ($number == 1997) {
					$sender->sendMessage("1997 is odd");
				} elseif ($number == 1998) {
					$sender->sendMessage("1998 is even");
				} elseif ($number == 1999) {
					$sender->sendMessage("1999 is odd");
				} elseif ($number == 2000) {
					$sender->sendMessage("2000 is even");
				} elseif ($number == 2001) {
					$sender->sendMessage("2001 is odd");
				} elseif ($number == 2002) {
					$sender->sendMessage("2002 is even");
				} elseif ($number == 2003) {
					$sender->sendMessage("2003 is odd");
				} elseif ($number == 2004) {
					$sender->sendMessage("2004 is even");
				} elseif ($number == 2005) {
					$sender->sendMessage("2005 is odd");
				} elseif ($number == 2006) {
					$sender->sendMessage("2006 is even");
				} elseif ($number == 2007) {
					$sender->sendMessage("2007 is odd");
				} elseif ($number == 2008) {
					$sender->sendMessage("2008 is even");
				} elseif ($number == 2009) {
					$sender->sendMessage("2009 is odd");
				} elseif ($number == 2010) {
					$sender->sendMessage("2010 is even");
				} elseif ($number == 2011) {
					$sender->sendMessage("2011 is odd");
				} elseif ($number == 2012) {
					$sender->sendMessage("2012 is even");
				} elseif ($number == 2013) {
					$sender->sendMessage("2013 is odd");
				} elseif ($number == 2014) {
					$sender->sendMessage("2014 is even");
				} elseif ($number == 2015) {
					$sender->sendMessage("2015 is odd");
				} elseif ($number == 2016) {
					$sender->sendMessage("2016 is even");
				} elseif ($number == 2017) {
					$sender->sendMessage("2017 is odd");
				} elseif ($number == 2018) {
					$sender->sendMessage("2018 is even");
				} elseif ($number == 2019) {
					$sender->sendMessage("2019 is odd");
				} elseif ($number == 2020) {
					$sender->sendMessage("2020 is even");
				} elseif ($number == 2021) {
					$sender->sendMessage("2021 is odd");
				} elseif ($number == 2022) {
					$sender->sendMessage("2022 is even");
				} elseif ($number == 2023) {
					$sender->sendMessage("2023 is odd");
				} elseif ($number == 2024) {
					$sender->sendMessage("2024 is even");
				} elseif ($number == 2025) {
					$sender->sendMessage("2025 is odd");
				} elseif ($number == 2026) {
					$sender->sendMessage("2026 is even");
				} elseif ($number == 2027) {
					$sender->sendMessage("2027 is odd");
				} elseif ($number == 2028) {
					$sender->sendMessage("2028 is even");
				} elseif ($number == 2029) {
					$sender->sendMessage("2029 is odd");
				} elseif ($number == 2030) {
					$sender->sendMessage("2030 is even");
				} elseif ($number == 2031) {
					$sender->sendMessage("2031 is odd");
				} elseif ($number == 2032) {
					$sender->sendMessage("2032 is even");
				} elseif ($number == 2033) {
					$sender->sendMessage("2033 is odd");
				} elseif ($number == 2034) {
					$sender->sendMessage("2034 is even");
				} elseif ($number == 2035) {
					$sender->sendMessage("2035 is odd");
				} elseif ($number == 2036) {
					$sender->sendMessage("2036 is even");
				} elseif ($number == 2037) {
					$sender->sendMessage("2037 is odd");
				} elseif ($number == 2038) {
					$sender->sendMessage("2038 is even");
				} elseif ($number == 2039) {
					$sender->sendMessage("2039 is odd");
				} elseif ($number == 2040) {
					$sender->sendMessage("2040 is even");
				} elseif ($number == 2041) {
					$sender->sendMessage("2041 is odd");
				} elseif ($number == 2042) {
					$sender->sendMessage("2042 is even");
				} elseif ($number == 2043) {
					$sender->sendMessage("2043 is odd");
				} elseif ($number == 2044) {
					$sender->sendMessage("2044 is even");
				} elseif ($number == 2045) {
					$sender->sendMessage("2045 is odd");
				} elseif ($number == 2046) {
					$sender->sendMessage("2046 is even");
				} elseif ($number == 2047) {
					$sender->sendMessage("2047 is odd");
				} elseif ($number == 2048) {
					$sender->sendMessage("2048 is even");
				} elseif ($number == 2049) {
					$sender->sendMessage("2049 is odd");
				} elseif ($number == 2050) {
					$sender->sendMessage("2050 is even");
				} elseif ($number == 2051) {
					$sender->sendMessage("2051 is odd");
				} elseif ($number == 2052) {
					$sender->sendMessage("2052 is even");
				} elseif ($number == 2053) {
					$sender->sendMessage("2053 is odd");
				} elseif ($number == 2054) {
					$sender->sendMessage("2054 is even");
				} elseif ($number == 2055) {
					$sender->sendMessage("2055 is odd");
				} elseif ($number == 2056) {
					$sender->sendMessage("2056 is even");
				} elseif ($number == 2057) {
					$sender->sendMessage("2057 is odd");
				} elseif ($number == 2058) {
					$sender->sendMessage("2058 is even");
				} elseif ($number == 2059) {
					$sender->sendMessage("2059 is odd");
				} elseif ($number == 2060) {
					$sender->sendMessage("2060 is even");
				} elseif ($number == 2061) {
					$sender->sendMessage("2061 is odd");
				} elseif ($number == 2062) {
					$sender->sendMessage("2062 is even");
				} elseif ($number == 2063) {
					$sender->sendMessage("2063 is odd");
				} elseif ($number == 2064) {
					$sender->sendMessage("2064 is even");
				} elseif ($number == 2065) {
					$sender->sendMessage("2065 is odd");
				} elseif ($number == 2066) {
					$sender->sendMessage("2066 is even");
				} elseif ($number == 2067) {
					$sender->sendMessage("2067 is odd");
				} elseif ($number == 2068) {
					$sender->sendMessage("2068 is even");
				} elseif ($number == 2069) {
					$sender->sendMessage("2069 is odd");
				} elseif ($number == 2070) {
					$sender->sendMessage("2070 is even");
				} elseif ($number == 2071) {
					$sender->sendMessage("2071 is odd");
				} elseif ($number == 2072) {
					$sender->sendMessage("2072 is even");
				} elseif ($number == 2073) {
					$sender->sendMessage("2073 is odd");
				} elseif ($number == 2074) {
					$sender->sendMessage("2074 is even");
				} elseif ($number == 2075) {
					$sender->sendMessage("2075 is odd");
				} elseif ($number == 2076) {
					$sender->sendMessage("2076 is even");
				} elseif ($number == 2077) {
					$sender->sendMessage("2077 is odd");
				} elseif ($number == 2078) {
					$sender->sendMessage("2078 is even");
				} elseif ($number == 2079) {
					$sender->sendMessage("2079 is odd");
				} elseif ($number == 2080) {
					$sender->sendMessage("2080 is even");
				} elseif ($number == 2081) {
					$sender->sendMessage("2081 is odd");
				} elseif ($number == 2082) {
					$sender->sendMessage("2082 is even");
				} elseif ($number == 2083) {
					$sender->sendMessage("2083 is odd");
				} elseif ($number == 2084) {
					$sender->sendMessage("2084 is even");
				} elseif ($number == 2085) {
					$sender->sendMessage("2085 is odd");
				} elseif ($number == 2086) {
					$sender->sendMessage("2086 is even");
				} elseif ($number == 2087) {
					$sender->sendMessage("2087 is odd");
				} elseif ($number == 2088) {
					$sender->sendMessage("2088 is even");
				} elseif ($number == 2089) {
					$sender->sendMessage("2089 is odd");
				} elseif ($number == 2090) {
					$sender->sendMessage("2090 is even");
				} elseif ($number == 2091) {
					$sender->sendMessage("2091 is odd");
				} elseif ($number == 2092) {
					$sender->sendMessage("2092 is even");
				} elseif ($number == 2093) {
					$sender->sendMessage("2093 is odd");
				} elseif ($number == 2094) {
					$sender->sendMessage("2094 is even");
				} elseif ($number == 2095) {
					$sender->sendMessage("2095 is odd");
				} elseif ($number == 2096) {
					$sender->sendMessage("2096 is even");
				} elseif ($number == 2097) {
					$sender->sendMessage("2097 is odd");
				} elseif ($number == 2098) {
					$sender->sendMessage("2098 is even");
				} elseif ($number == 2099) {
					$sender->sendMessage("2099 is odd");
				} elseif ($number == 2100) {
					$sender->sendMessage("2100 is even");
				} elseif ($number == 2101) {
					$sender->sendMessage("2101 is odd");
				} elseif ($number == 2102) {
					$sender->sendMessage("2102 is even");
				} elseif ($number == 2103) {
					$sender->sendMessage("2103 is odd");
				} elseif ($number == 2104) {
					$sender->sendMessage("2104 is even");
				} elseif ($number == 2105) {
					$sender->sendMessage("2105 is odd");
				} elseif ($number == 2106) {
					$sender->sendMessage("2106 is even");
				} elseif ($number == 2107) {
					$sender->sendMessage("2107 is odd");
				} elseif ($number == 2108) {
					$sender->sendMessage("2108 is even");
				} elseif ($number == 2109) {
					$sender->sendMessage("2109 is odd");
				} elseif ($number == 2110) {
					$sender->sendMessage("2110 is even");
				} elseif ($number == 2111) {
					$sender->sendMessage("2111 is odd");
				} elseif ($number == 2112) {
					$sender->sendMessage("2112 is even");
				} elseif ($number == 2113) {
					$sender->sendMessage("2113 is odd");
				} elseif ($number == 2114) {
					$sender->sendMessage("2114 is even");
				} elseif ($number == 2115) {
					$sender->sendMessage("2115 is odd");
				} elseif ($number == 2116) {
					$sender->sendMessage("2116 is even");
				} elseif ($number == 2117) {
					$sender->sendMessage("2117 is odd");
				} elseif ($number == 2118) {
					$sender->sendMessage("2118 is even");
				} elseif ($number == 2119) {
					$sender->sendMessage("2119 is odd");
				} elseif ($number == 2120) {
					$sender->sendMessage("2120 is even");
				} elseif ($number == 2121) {
					$sender->sendMessage("2121 is odd");
				} elseif ($number == 2122) {
					$sender->sendMessage("2122 is even");
				} elseif ($number == 2123) {
					$sender->sendMessage("2123 is odd");
				} elseif ($number == 2124) {
					$sender->sendMessage("2124 is even");
				} elseif ($number == 2125) {
					$sender->sendMessage("2125 is odd");
				} elseif ($number == 2126) {
					$sender->sendMessage("2126 is even");
				} elseif ($number == 2127) {
					$sender->sendMessage("2127 is odd");
				} elseif ($number == 2128) {
					$sender->sendMessage("2128 is even");
				} elseif ($number == 2129) {
					$sender->sendMessage("2129 is odd");
				} elseif ($number == 2130) {
					$sender->sendMessage("2130 is even");
				} elseif ($number == 2131) {
					$sender->sendMessage("2131 is odd");
				} elseif ($number == 2132) {
					$sender->sendMessage("2132 is even");
				} elseif ($number == 2133) {
					$sender->sendMessage("2133 is odd");
				} elseif ($number == 2134) {
					$sender->sendMessage("2134 is even");
				} elseif ($number == 2135) {
					$sender->sendMessage("2135 is odd");
				} elseif ($number == 2136) {
					$sender->sendMessage("2136 is even");
				} elseif ($number == 2137) {
					$sender->sendMessage("2137 is odd");
				} elseif ($number == 2138) {
					$sender->sendMessage("2138 is even");
				} elseif ($number == 2139) {
					$sender->sendMessage("2139 is odd");
				} elseif ($number == 2140) {
					$sender->sendMessage("2140 is even");
				} elseif ($number == 2141) {
					$sender->sendMessage("2141 is odd");
				} elseif ($number == 2142) {
					$sender->sendMessage("2142 is even");
				} elseif ($number == 2143) {
					$sender->sendMessage("2143 is odd");
				} elseif ($number == 2144) {
					$sender->sendMessage("2144 is even");
				} elseif ($number == 2145) {
					$sender->sendMessage("2145 is odd");
				} elseif ($number == 2146) {
					$sender->sendMessage("2146 is even");
				} elseif ($number == 2147) {
					$sender->sendMessage("2147 is odd");
				} elseif ($number == 2148) {
					$sender->sendMessage("2148 is even");
				} elseif ($number == 2149) {
					$sender->sendMessage("2149 is odd");
				} elseif ($number == 2150) {
					$sender->sendMessage("2150 is even");
				} elseif ($number == 2151) {
					$sender->sendMessage("2151 is odd");
				} elseif ($number == 2152) {
					$sender->sendMessage("2152 is even");
				} elseif ($number == 2153) {
					$sender->sendMessage("2153 is odd");
				} elseif ($number == 2154) {
					$sender->sendMessage("2154 is even");
				} elseif ($number == 2155) {
					$sender->sendMessage("2155 is odd");
				} elseif ($number == 2156) {
					$sender->sendMessage("2156 is even");
				} elseif ($number == 2157) {
					$sender->sendMessage("2157 is odd");
				} elseif ($number == 2158) {
					$sender->sendMessage("2158 is even");
				} elseif ($number == 2159) {
					$sender->sendMessage("2159 is odd");
				} elseif ($number == 2160) {
					$sender->sendMessage("2160 is even");
				} elseif ($number == 2161) {
					$sender->sendMessage("2161 is odd");
				} elseif ($number == 2162) {
					$sender->sendMessage("2162 is even");
				} elseif ($number == 2163) {
					$sender->sendMessage("2163 is odd");
				} elseif ($number == 2164) {
					$sender->sendMessage("2164 is even");
				} elseif ($number == 2165) {
					$sender->sendMessage("2165 is odd");
				} elseif ($number == 2166) {
					$sender->sendMessage("2166 is even");
				} elseif ($number == 2167) {
					$sender->sendMessage("2167 is odd");
				} elseif ($number == 2168) {
					$sender->sendMessage("2168 is even");
				} elseif ($number == 2169) {
					$sender->sendMessage("2169 is odd");
				} elseif ($number == 2170) {
					$sender->sendMessage("2170 is even");
				} elseif ($number == 2171) {
					$sender->sendMessage("2171 is odd");
				} elseif ($number == 2172) {
					$sender->sendMessage("2172 is even");
				} elseif ($number == 2173) {
					$sender->sendMessage("2173 is odd");
				} elseif ($number == 2174) {
					$sender->sendMessage("2174 is even");
				} elseif ($number == 2175) {
					$sender->sendMessage("2175 is odd");
				} elseif ($number == 2176) {
					$sender->sendMessage("2176 is even");
				} elseif ($number == 2177) {
					$sender->sendMessage("2177 is odd");
				} elseif ($number == 2178) {
					$sender->sendMessage("2178 is even");
				} elseif ($number == 2179) {
					$sender->sendMessage("2179 is odd");
				} elseif ($number == 2180) {
					$sender->sendMessage("2180 is even");
				} elseif ($number == 2181) {
					$sender->sendMessage("2181 is odd");
				} elseif ($number == 2182) {
					$sender->sendMessage("2182 is even");
				} elseif ($number == 2183) {
					$sender->sendMessage("2183 is odd");
				} elseif ($number == 2184) {
					$sender->sendMessage("2184 is even");
				} elseif ($number == 2185) {
					$sender->sendMessage("2185 is odd");
				} elseif ($number == 2186) {
					$sender->sendMessage("2186 is even");
				} elseif ($number == 2187) {
					$sender->sendMessage("2187 is odd");
				} elseif ($number == 2188) {
					$sender->sendMessage("2188 is even");
				} elseif ($number == 2189) {
					$sender->sendMessage("2189 is odd");
				} elseif ($number == 2190) {
					$sender->sendMessage("2190 is even");
				} elseif ($number == 2191) {
					$sender->sendMessage("2191 is odd");
				} elseif ($number == 2192) {
					$sender->sendMessage("2192 is even");
				} elseif ($number == 2193) {
					$sender->sendMessage("2193 is odd");
				} elseif ($number == 2194) {
					$sender->sendMessage("2194 is even");
				} elseif ($number == 2195) {
					$sender->sendMessage("2195 is odd");
				} elseif ($number == 2196) {
					$sender->sendMessage("2196 is even");
				} elseif ($number == 2197) {
					$sender->sendMessage("2197 is odd");
				} elseif ($number == 2198) {
					$sender->sendMessage("2198 is even");
				} elseif ($number == 2199) {
					$sender->sendMessage("2199 is odd");
				} elseif ($number == 2200) {
					$sender->sendMessage("2200 is even");
				} elseif ($number == 2201) {
					$sender->sendMessage("2201 is odd");
				} elseif ($number == 2202) {
					$sender->sendMessage("2202 is even");
				} elseif ($number == 2203) {
					$sender->sendMessage("2203 is odd");
				} elseif ($number == 2204) {
					$sender->sendMessage("2204 is even");
				} elseif ($number == 2205) {
					$sender->sendMessage("2205 is odd");
				} elseif ($number == 2206) {
					$sender->sendMessage("2206 is even");
				} elseif ($number == 2207) {
					$sender->sendMessage("2207 is odd");
				} elseif ($number == 2208) {
					$sender->sendMessage("2208 is even");
				} elseif ($number == 2209) {
					$sender->sendMessage("2209 is odd");
				} elseif ($number == 2210) {
					$sender->sendMessage("2210 is even");
				} elseif ($number == 2211) {
					$sender->sendMessage("2211 is odd");
				} elseif ($number == 2212) {
					$sender->sendMessage("2212 is even");
				} elseif ($number == 2213) {
					$sender->sendMessage("2213 is odd");
				} elseif ($number == 2214) {
					$sender->sendMessage("2214 is even");
				} elseif ($number == 2215) {
					$sender->sendMessage("2215 is odd");
				} elseif ($number == 2216) {
					$sender->sendMessage("2216 is even");
				} elseif ($number == 2217) {
					$sender->sendMessage("2217 is odd");
				} elseif ($number == 2218) {
					$sender->sendMessage("2218 is even");
				} elseif ($number == 2219) {
					$sender->sendMessage("2219 is odd");
				} elseif ($number == 2220) {
					$sender->sendMessage("2220 is even");
				} elseif ($number == 2221) {
					$sender->sendMessage("2221 is odd");
				} elseif ($number == 2222) {
					$sender->sendMessage("2222 is even");
				} elseif ($number == 2223) {
					$sender->sendMessage("2223 is odd");
				} elseif ($number == 2224) {
					$sender->sendMessage("2224 is even");
				} elseif ($number == 2225) {
					$sender->sendMessage("2225 is odd");
				} elseif ($number == 2226) {
					$sender->sendMessage("2226 is even");
				} elseif ($number == 2227) {
					$sender->sendMessage("2227 is odd");
				} elseif ($number == 2228) {
					$sender->sendMessage("2228 is even");
				} elseif ($number == 2229) {
					$sender->sendMessage("2229 is odd");
				} elseif ($number == 2230) {
					$sender->sendMessage("2230 is even");
				} elseif ($number == 2231) {
					$sender->sendMessage("2231 is odd");
				} elseif ($number == 2232) {
					$sender->sendMessage("2232 is even");
				} elseif ($number == 2233) {
					$sender->sendMessage("2233 is odd");
				} elseif ($number == 2234) {
					$sender->sendMessage("2234 is even");
				} elseif ($number == 2235) {
					$sender->sendMessage("2235 is odd");
				} elseif ($number == 2236) {
					$sender->sendMessage("2236 is even");
				} elseif ($number == 2237) {
					$sender->sendMessage("2237 is odd");
				} elseif ($number == 2238) {
					$sender->sendMessage("2238 is even");
				} elseif ($number == 2239) {
					$sender->sendMessage("2239 is odd");
				} elseif ($number == 2240) {
					$sender->sendMessage("2240 is even");
				} elseif ($number == 2241) {
					$sender->sendMessage("2241 is odd");
				} elseif ($number == 2242) {
					$sender->sendMessage("2242 is even");
				} elseif ($number == 2243) {
					$sender->sendMessage("2243 is odd");
				} elseif ($number == 2244) {
					$sender->sendMessage("2244 is even");
				} elseif ($number == 2245) {
					$sender->sendMessage("2245 is odd");
				} elseif ($number == 2246) {
					$sender->sendMessage("2246 is even");
				} elseif ($number == 2247) {
					$sender->sendMessage("2247 is odd");
				} elseif ($number == 2248) {
					$sender->sendMessage("2248 is even");
				} elseif ($number == 2249) {
					$sender->sendMessage("2249 is odd");
				} elseif ($number == 2250) {
					$sender->sendMessage("2250 is even");
				} elseif ($number == 2251) {
					$sender->sendMessage("2251 is odd");
				} elseif ($number == 2252) {
					$sender->sendMessage("2252 is even");
				} elseif ($number == 2253) {
					$sender->sendMessage("2253 is odd");
				} elseif ($number == 2254) {
					$sender->sendMessage("2254 is even");
				} elseif ($number == 2255) {
					$sender->sendMessage("2255 is odd");
				} elseif ($number == 2256) {
					$sender->sendMessage("2256 is even");
				} elseif ($number == 2257) {
					$sender->sendMessage("2257 is odd");
				} elseif ($number == 2258) {
					$sender->sendMessage("2258 is even");
				} elseif ($number == 2259) {
					$sender->sendMessage("2259 is odd");
				} elseif ($number == 2260) {
					$sender->sendMessage("2260 is even");
				} elseif ($number == 2261) {
					$sender->sendMessage("2261 is odd");
				} elseif ($number == 2262) {
					$sender->sendMessage("2262 is even");
				} elseif ($number == 2263) {
					$sender->sendMessage("2263 is odd");
				} elseif ($number == 2264) {
					$sender->sendMessage("2264 is even");
				} elseif ($number == 2265) {
					$sender->sendMessage("2265 is odd");
				} elseif ($number == 2266) {
					$sender->sendMessage("2266 is even");
				} elseif ($number == 2267) {
					$sender->sendMessage("2267 is odd");
				} elseif ($number == 2268) {
					$sender->sendMessage("2268 is even");
				} elseif ($number == 2269) {
					$sender->sendMessage("2269 is odd");
				} elseif ($number == 2270) {
					$sender->sendMessage("2270 is even");
				} elseif ($number == 2271) {
					$sender->sendMessage("2271 is odd");
				} elseif ($number == 2272) {
					$sender->sendMessage("2272 is even");
				} elseif ($number == 2273) {
					$sender->sendMessage("2273 is odd");
				} elseif ($number == 2274) {
					$sender->sendMessage("2274 is even");
				} elseif ($number == 2275) {
					$sender->sendMessage("2275 is odd");
				} elseif ($number == 2276) {
					$sender->sendMessage("2276 is even");
				} elseif ($number == 2277) {
					$sender->sendMessage("2277 is odd");
				} elseif ($number == 2278) {
					$sender->sendMessage("2278 is even");
				} elseif ($number == 2279) {
					$sender->sendMessage("2279 is odd");
				} elseif ($number == 2280) {
					$sender->sendMessage("2280 is even");
				} elseif ($number == 2281) {
					$sender->sendMessage("2281 is odd");
				} elseif ($number == 2282) {
					$sender->sendMessage("2282 is even");
				} elseif ($number == 2283) {
					$sender->sendMessage("2283 is odd");
				} elseif ($number == 2284) {
					$sender->sendMessage("2284 is even");
				} elseif ($number == 2285) {
					$sender->sendMessage("2285 is odd");
				} elseif ($number == 2286) {
					$sender->sendMessage("2286 is even");
				} elseif ($number == 2287) {
					$sender->sendMessage("2287 is odd");
				} elseif ($number == 2288) {
					$sender->sendMessage("2288 is even");
				} elseif ($number == 2289) {
					$sender->sendMessage("2289 is odd");
				} elseif ($number == 2290) {
					$sender->sendMessage("2290 is even");
				} elseif ($number == 2291) {
					$sender->sendMessage("2291 is odd");
				} elseif ($number == 2292) {
					$sender->sendMessage("2292 is even");
				} elseif ($number == 2293) {
					$sender->sendMessage("2293 is odd");
				} elseif ($number == 2294) {
					$sender->sendMessage("2294 is even");
				} elseif ($number == 2295) {
					$sender->sendMessage("2295 is odd");
				} elseif ($number == 2296) {
					$sender->sendMessage("2296 is even");
				} elseif ($number == 2297) {
					$sender->sendMessage("2297 is odd");
				} elseif ($number == 2298) {
					$sender->sendMessage("2298 is even");
				} elseif ($number == 2299) {
					$sender->sendMessage("2299 is odd");
				} elseif ($number == 2300) {
					$sender->sendMessage("2300 is even");
				} elseif ($number == 2301) {
					$sender->sendMessage("2301 is odd");
				} elseif ($number == 2302) {
					$sender->sendMessage("2302 is even");
				} elseif ($number == 2303) {
					$sender->sendMessage("2303 is odd");
				} elseif ($number == 2304) {
					$sender->sendMessage("2304 is even");
				} elseif ($number == 2305) {
					$sender->sendMessage("2305 is odd");
				} elseif ($number == 2306) {
					$sender->sendMessage("2306 is even");
				} elseif ($number == 2307) {
					$sender->sendMessage("2307 is odd");
				} elseif ($number == 2308) {
					$sender->sendMessage("2308 is even");
				} elseif ($number == 2309) {
					$sender->sendMessage("2309 is odd");
				} elseif ($number == 2310) {
					$sender->sendMessage("2310 is even");
				} elseif ($number == 2311) {
					$sender->sendMessage("2311 is odd");
				} elseif ($number == 2312) {
					$sender->sendMessage("2312 is even");
				} elseif ($number == 2313) {
					$sender->sendMessage("2313 is odd");
				} elseif ($number == 2314) {
					$sender->sendMessage("2314 is even");
				} elseif ($number == 2315) {
					$sender->sendMessage("2315 is odd");
				} elseif ($number == 2316) {
					$sender->sendMessage("2316 is even");
				} elseif ($number == 2317) {
					$sender->sendMessage("2317 is odd");
				} elseif ($number == 2318) {
					$sender->sendMessage("2318 is even");
				} elseif ($number == 2319) {
					$sender->sendMessage("2319 is odd");
				} elseif ($number == 2320) {
					$sender->sendMessage("2320 is even");
				} elseif ($number == 2321) {
					$sender->sendMessage("2321 is odd");
				} elseif ($number == 2322) {
					$sender->sendMessage("2322 is even");
				} elseif ($number == 2323) {
					$sender->sendMessage("2323 is odd");
				} elseif ($number == 2324) {
					$sender->sendMessage("2324 is even");
				} elseif ($number == 2325) {
					$sender->sendMessage("2325 is odd");
				} elseif ($number == 2326) {
					$sender->sendMessage("2326 is even");
				} elseif ($number == 2327) {
					$sender->sendMessage("2327 is odd");
				} elseif ($number == 2328) {
					$sender->sendMessage("2328 is even");
				} elseif ($number == 2329) {
					$sender->sendMessage("2329 is odd");
				} elseif ($number == 2330) {
					$sender->sendMessage("2330 is even");
				} elseif ($number == 2331) {
					$sender->sendMessage("2331 is odd");
				} elseif ($number == 2332) {
					$sender->sendMessage("2332 is even");
				} elseif ($number == 2333) {
					$sender->sendMessage("2333 is odd");
				} elseif ($number == 2334) {
					$sender->sendMessage("2334 is even");
				} elseif ($number == 2335) {
					$sender->sendMessage("2335 is odd");
				} elseif ($number == 2336) {
					$sender->sendMessage("2336 is even");
				} elseif ($number == 2337) {
					$sender->sendMessage("2337 is odd");
				} elseif ($number == 2338) {
					$sender->sendMessage("2338 is even");
				} elseif ($number == 2339) {
					$sender->sendMessage("2339 is odd");
				} elseif ($number == 2340) {
					$sender->sendMessage("2340 is even");
				} elseif ($number == 2341) {
					$sender->sendMessage("2341 is odd");
				} elseif ($number == 2342) {
					$sender->sendMessage("2342 is even");
				} elseif ($number == 2343) {
					$sender->sendMessage("2343 is odd");
				} elseif ($number == 2344) {
					$sender->sendMessage("2344 is even");
				} elseif ($number == 2345) {
					$sender->sendMessage("2345 is odd");
				} elseif ($number == 2346) {
					$sender->sendMessage("2346 is even");
				} elseif ($number == 2347) {
					$sender->sendMessage("2347 is odd");
				} elseif ($number == 2348) {
					$sender->sendMessage("2348 is even");
				} elseif ($number == 2349) {
					$sender->sendMessage("2349 is odd");
				} elseif ($number == 2350) {
					$sender->sendMessage("2350 is even");
				} elseif ($number == 2351) {
					$sender->sendMessage("2351 is odd");
				} elseif ($number == 2352) {
					$sender->sendMessage("2352 is even");
				} elseif ($number == 2353) {
					$sender->sendMessage("2353 is odd");
				} elseif ($number == 2354) {
					$sender->sendMessage("2354 is even");
				} elseif ($number == 2355) {
					$sender->sendMessage("2355 is odd");
				} elseif ($number == 2356) {
					$sender->sendMessage("2356 is even");
				} elseif ($number == 2357) {
					$sender->sendMessage("2357 is odd");
				} elseif ($number == 2358) {
					$sender->sendMessage("2358 is even");
				} elseif ($number == 2359) {
					$sender->sendMessage("2359 is odd");
				} elseif ($number == 2360) {
					$sender->sendMessage("2360 is even");
				} elseif ($number == 2361) {
					$sender->sendMessage("2361 is odd");
				} elseif ($number == 2362) {
					$sender->sendMessage("2362 is even");
				} elseif ($number == 2363) {
					$sender->sendMessage("2363 is odd");
				} elseif ($number == 2364) {
					$sender->sendMessage("2364 is even");
				} elseif ($number == 2365) {
					$sender->sendMessage("2365 is odd");
				} elseif ($number == 2366) {
					$sender->sendMessage("2366 is even");
				} elseif ($number == 2367) {
					$sender->sendMessage("2367 is odd");
				} elseif ($number == 2368) {
					$sender->sendMessage("2368 is even");
				} elseif ($number == 2369) {
					$sender->sendMessage("2369 is odd");
				} elseif ($number == 2370) {
					$sender->sendMessage("2370 is even");
				} elseif ($number == 2371) {
					$sender->sendMessage("2371 is odd");
				} elseif ($number == 2372) {
					$sender->sendMessage("2372 is even");
				} elseif ($number == 2373) {
					$sender->sendMessage("2373 is odd");
				} elseif ($number == 2374) {
					$sender->sendMessage("2374 is even");
				} elseif ($number == 2375) {
					$sender->sendMessage("2375 is odd");
				} elseif ($number == 2376) {
					$sender->sendMessage("2376 is even");
				} elseif ($number == 2377) {
					$sender->sendMessage("2377 is odd");
				} elseif ($number == 2378) {
					$sender->sendMessage("2378 is even");
				} elseif ($number == 2379) {
					$sender->sendMessage("2379 is odd");
				} elseif ($number == 2380) {
					$sender->sendMessage("2380 is even");
				} elseif ($number == 2381) {
					$sender->sendMessage("2381 is odd");
				} elseif ($number == 2382) {
					$sender->sendMessage("2382 is even");
				} elseif ($number == 2383) {
					$sender->sendMessage("2383 is odd");
				} elseif ($number == 2384) {
					$sender->sendMessage("2384 is even");
				} elseif ($number == 2385) {
					$sender->sendMessage("2385 is odd");
				} elseif ($number == 2386) {
					$sender->sendMessage("2386 is even");
				} elseif ($number == 2387) {
					$sender->sendMessage("2387 is odd");
				} elseif ($number == 2388) {
					$sender->sendMessage("2388 is even");
				} elseif ($number == 2389) {
					$sender->sendMessage("2389 is odd");
				} elseif ($number == 2390) {
					$sender->sendMessage("2390 is even");
				} elseif ($number == 2391) {
					$sender->sendMessage("2391 is odd");
				} elseif ($number == 2392) {
					$sender->sendMessage("2392 is even");
				} elseif ($number == 2393) {
					$sender->sendMessage("2393 is odd");
				} elseif ($number == 2394) {
					$sender->sendMessage("2394 is even");
				} elseif ($number == 2395) {
					$sender->sendMessage("2395 is odd");
				} elseif ($number == 2396) {
					$sender->sendMessage("2396 is even");
				} elseif ($number == 2397) {
					$sender->sendMessage("2397 is odd");
				} elseif ($number == 2398) {
					$sender->sendMessage("2398 is even");
				} elseif ($number == 2399) {
					$sender->sendMessage("2399 is odd");
				} elseif ($number == 2400) {
					$sender->sendMessage("2400 is even");
				} elseif ($number == 2401) {
					$sender->sendMessage("2401 is odd");
				} elseif ($number == 2402) {
					$sender->sendMessage("2402 is even");
				} elseif ($number == 2403) {
					$sender->sendMessage("2403 is odd");
				} elseif ($number == 2404) {
					$sender->sendMessage("2404 is even");
				} elseif ($number == 2405) {
					$sender->sendMessage("2405 is odd");
				} elseif ($number == 2406) {
					$sender->sendMessage("2406 is even");
				} elseif ($number == 2407) {
					$sender->sendMessage("2407 is odd");
				} elseif ($number == 2408) {
					$sender->sendMessage("2408 is even");
				} elseif ($number == 2409) {
					$sender->sendMessage("2409 is odd");
				} elseif ($number == 2410) {
					$sender->sendMessage("2410 is even");
				} elseif ($number == 2411) {
					$sender->sendMessage("2411 is odd");
				} elseif ($number == 2412) {
					$sender->sendMessage("2412 is even");
				} elseif ($number == 2413) {
					$sender->sendMessage("2413 is odd");
				} elseif ($number == 2414) {
					$sender->sendMessage("2414 is even");
				} elseif ($number == 2415) {
					$sender->sendMessage("2415 is odd");
				} elseif ($number == 2416) {
					$sender->sendMessage("2416 is even");
				} elseif ($number == 2417) {
					$sender->sendMessage("2417 is odd");
				} elseif ($number == 2418) {
					$sender->sendMessage("2418 is even");
				} elseif ($number == 2419) {
					$sender->sendMessage("2419 is odd");
				} elseif ($number == 2420) {
					$sender->sendMessage("2420 is even");
				} elseif ($number == 2421) {
					$sender->sendMessage("2421 is odd");
				} elseif ($number == 2422) {
					$sender->sendMessage("2422 is even");
				} elseif ($number == 2423) {
					$sender->sendMessage("2423 is odd");
				} elseif ($number == 2424) {
					$sender->sendMessage("2424 is even");
				} elseif ($number == 2425) {
					$sender->sendMessage("2425 is odd");
				} elseif ($number == 2426) {
					$sender->sendMessage("2426 is even");
				} elseif ($number == 2427) {
					$sender->sendMessage("2427 is odd");
				} elseif ($number == 2428) {
					$sender->sendMessage("2428 is even");
				} elseif ($number == 2429) {
					$sender->sendMessage("2429 is odd");
				} elseif ($number == 2430) {
					$sender->sendMessage("2430 is even");
				} elseif ($number == 2431) {
					$sender->sendMessage("2431 is odd");
				} elseif ($number == 2432) {
					$sender->sendMessage("2432 is even");
				} elseif ($number == 2433) {
					$sender->sendMessage("2433 is odd");
				} elseif ($number == 2434) {
					$sender->sendMessage("2434 is even");
				} elseif ($number == 2435) {
					$sender->sendMessage("2435 is odd");
				} elseif ($number == 2436) {
					$sender->sendMessage("2436 is even");
				} elseif ($number == 2437) {
					$sender->sendMessage("2437 is odd");
				} elseif ($number == 2438) {
					$sender->sendMessage("2438 is even");
				} elseif ($number == 2439) {
					$sender->sendMessage("2439 is odd");
				} elseif ($number == 2440) {
					$sender->sendMessage("2440 is even");
				} elseif ($number == 2441) {
					$sender->sendMessage("2441 is odd");
				} elseif ($number == 2442) {
					$sender->sendMessage("2442 is even");
				} elseif ($number == 2443) {
					$sender->sendMessage("2443 is odd");
				} elseif ($number == 2444) {
					$sender->sendMessage("2444 is even");
				} elseif ($number == 2445) {
					$sender->sendMessage("2445 is odd");
				} elseif ($number == 2446) {
					$sender->sendMessage("2446 is even");
				} elseif ($number == 2447) {
					$sender->sendMessage("2447 is odd");
				} elseif ($number == 2448) {
					$sender->sendMessage("2448 is even");
				} elseif ($number == 2449) {
					$sender->sendMessage("2449 is odd");
				} elseif ($number == 2450) {
					$sender->sendMessage("2450 is even");
				} elseif ($number == 2451) {
					$sender->sendMessage("2451 is odd");
				} elseif ($number == 2452) {
					$sender->sendMessage("2452 is even");
				} elseif ($number == 2453) {
					$sender->sendMessage("2453 is odd");
				} elseif ($number == 2454) {
					$sender->sendMessage("2454 is even");
				} elseif ($number == 2455) {
					$sender->sendMessage("2455 is odd");
				} elseif ($number == 2456) {
					$sender->sendMessage("2456 is even");
				} elseif ($number == 2457) {
					$sender->sendMessage("2457 is odd");
				} elseif ($number == 2458) {
					$sender->sendMessage("2458 is even");
				} elseif ($number == 2459) {
					$sender->sendMessage("2459 is odd");
				} elseif ($number == 2460) {
					$sender->sendMessage("2460 is even");
				} elseif ($number == 2461) {
					$sender->sendMessage("2461 is odd");
				} elseif ($number == 2462) {
					$sender->sendMessage("2462 is even");
				} elseif ($number == 2463) {
					$sender->sendMessage("2463 is odd");
				} elseif ($number == 2464) {
					$sender->sendMessage("2464 is even");
				} elseif ($number == 2465) {
					$sender->sendMessage("2465 is odd");
				} elseif ($number == 2466) {
					$sender->sendMessage("2466 is even");
				} elseif ($number == 2467) {
					$sender->sendMessage("2467 is odd");
				} elseif ($number == 2468) {
					$sender->sendMessage("2468 is even");
				} elseif ($number == 2469) {
					$sender->sendMessage("2469 is odd");
				} elseif ($number == 2470) {
					$sender->sendMessage("2470 is even");
				} elseif ($number == 2471) {
					$sender->sendMessage("2471 is odd");
				} elseif ($number == 2472) {
					$sender->sendMessage("2472 is even");
				} elseif ($number == 2473) {
					$sender->sendMessage("2473 is odd");
				} elseif ($number == 2474) {
					$sender->sendMessage("2474 is even");
				} elseif ($number == 2475) {
					$sender->sendMessage("2475 is odd");
				} elseif ($number == 2476) {
					$sender->sendMessage("2476 is even");
				} elseif ($number == 2477) {
					$sender->sendMessage("2477 is odd");
				} elseif ($number == 2478) {
					$sender->sendMessage("2478 is even");
				} elseif ($number == 2479) {
					$sender->sendMessage("2479 is odd");
				} elseif ($number == 2480) {
					$sender->sendMessage("2480 is even");
				} elseif ($number == 2481) {
					$sender->sendMessage("2481 is odd");
				} elseif ($number == 2482) {
					$sender->sendMessage("2482 is even");
				} elseif ($number == 2483) {
					$sender->sendMessage("2483 is odd");
				} elseif ($number == 2484) {
					$sender->sendMessage("2484 is even");
				} elseif ($number == 2485) {
					$sender->sendMessage("2485 is odd");
				} elseif ($number == 2486) {
					$sender->sendMessage("2486 is even");
				} elseif ($number == 2487) {
					$sender->sendMessage("2487 is odd");
				} elseif ($number == 2488) {
					$sender->sendMessage("2488 is even");
				} elseif ($number == 2489) {
					$sender->sendMessage("2489 is odd");
				} elseif ($number == 2490) {
					$sender->sendMessage("2490 is even");
				} elseif ($number == 2491) {
					$sender->sendMessage("2491 is odd");
				} elseif ($number == 2492) {
					$sender->sendMessage("2492 is even");
				} elseif ($number == 2493) {
					$sender->sendMessage("2493 is odd");
				} elseif ($number == 2494) {
					$sender->sendMessage("2494 is even");
				} elseif ($number == 2495) {
					$sender->sendMessage("2495 is odd");
				} elseif ($number == 2496) {
					$sender->sendMessage("2496 is even");
				} elseif ($number == 2497) {
					$sender->sendMessage("2497 is odd");
				} elseif ($number == 2498) {
					$sender->sendMessage("2498 is even");
				} elseif ($number == 2499) {
					$sender->sendMessage("2499 is odd");
				} elseif ($number == 2500) {
					$sender->sendMessage("2500 is even");
				} elseif ($number == 2501) {
					$sender->sendMessage("2501 is odd");
				} elseif ($number == 2502) {
					$sender->sendMessage("2502 is even");
				} elseif ($number == 2503) {
					$sender->sendMessage("2503 is odd");
				} elseif ($number == 2504) {
					$sender->sendMessage("2504 is even");
				} elseif ($number == 2505) {
					$sender->sendMessage("2505 is odd");
				} elseif ($number == 2506) {
					$sender->sendMessage("2506 is even");
				} elseif ($number == 2507) {
					$sender->sendMessage("2507 is odd");
				} elseif ($number == 2508) {
					$sender->sendMessage("2508 is even");
				} elseif ($number == 2509) {
					$sender->sendMessage("2509 is odd");
				} elseif ($number == 2510) {
					$sender->sendMessage("2510 is even");
				} elseif ($number == 2511) {
					$sender->sendMessage("2511 is odd");
				} elseif ($number == 2512) {
					$sender->sendMessage("2512 is even");
				} elseif ($number == 2513) {
					$sender->sendMessage("2513 is odd");
				} elseif ($number == 2514) {
					$sender->sendMessage("2514 is even");
				} elseif ($number == 2515) {
					$sender->sendMessage("2515 is odd");
				} elseif ($number == 2516) {
					$sender->sendMessage("2516 is even");
				} elseif ($number == 2517) {
					$sender->sendMessage("2517 is odd");
				} elseif ($number == 2518) {
					$sender->sendMessage("2518 is even");
				} elseif ($number == 2519) {
					$sender->sendMessage("2519 is odd");
				} elseif ($number == 2520) {
					$sender->sendMessage("2520 is even");
				} elseif ($number == 2521) {
					$sender->sendMessage("2521 is odd");
				} elseif ($number == 2522) {
					$sender->sendMessage("2522 is even");
				} elseif ($number == 2523) {
					$sender->sendMessage("2523 is odd");
				} elseif ($number == 2524) {
					$sender->sendMessage("2524 is even");
				} elseif ($number == 2525) {
					$sender->sendMessage("2525 is odd");
				} elseif ($number == 2526) {
					$sender->sendMessage("2526 is even");
				} elseif ($number == 2527) {
					$sender->sendMessage("2527 is odd");
				} elseif ($number == 2528) {
					$sender->sendMessage("2528 is even");
				} elseif ($number == 2529) {
					$sender->sendMessage("2529 is odd");
				} elseif ($number == 2530) {
					$sender->sendMessage("2530 is even");
				} elseif ($number == 2531) {
					$sender->sendMessage("2531 is odd");
				} elseif ($number == 2532) {
					$sender->sendMessage("2532 is even");
				} elseif ($number == 2533) {
					$sender->sendMessage("2533 is odd");
				} elseif ($number == 2534) {
					$sender->sendMessage("2534 is even");
				} elseif ($number == 2535) {
					$sender->sendMessage("2535 is odd");
				} elseif ($number == 2536) {
					$sender->sendMessage("2536 is even");
				} elseif ($number == 2537) {
					$sender->sendMessage("2537 is odd");
				} elseif ($number == 2538) {
					$sender->sendMessage("2538 is even");
				} elseif ($number == 2539) {
					$sender->sendMessage("2539 is odd");
				} elseif ($number == 2540) {
					$sender->sendMessage("2540 is even");
				} elseif ($number == 2541) {
					$sender->sendMessage("2541 is odd");
				} elseif ($number == 2542) {
					$sender->sendMessage("2542 is even");
				} elseif ($number == 2543) {
					$sender->sendMessage("2543 is odd");
				} elseif ($number == 2544) {
					$sender->sendMessage("2544 is even");
				} elseif ($number == 2545) {
					$sender->sendMessage("2545 is odd");
				} elseif ($number == 2546) {
					$sender->sendMessage("2546 is even");
				} elseif ($number == 2547) {
					$sender->sendMessage("2547 is odd");
				} elseif ($number == 2548) {
					$sender->sendMessage("2548 is even");
				} elseif ($number == 2549) {
					$sender->sendMessage("2549 is odd");
				} elseif ($number == 2550) {
					$sender->sendMessage("2550 is even");
				} elseif ($number == 2551) {
					$sender->sendMessage("2551 is odd");
				} elseif ($number == 2552) {
					$sender->sendMessage("2552 is even");
				} elseif ($number == 2553) {
					$sender->sendMessage("2553 is odd");
				} elseif ($number == 2554) {
					$sender->sendMessage("2554 is even");
				} elseif ($number == 2555) {
					$sender->sendMessage("2555 is odd");
				} elseif ($number == 2556) {
					$sender->sendMessage("2556 is even");
				} elseif ($number == 2557) {
					$sender->sendMessage("2557 is odd");
				} elseif ($number == 2558) {
					$sender->sendMessage("2558 is even");
				} elseif ($number == 2559) {
					$sender->sendMessage("2559 is odd");
				} elseif ($number == 2560) {
					$sender->sendMessage("2560 is even");
				} elseif ($number == 2561) {
					$sender->sendMessage("2561 is odd");
				} elseif ($number == 2562) {
					$sender->sendMessage("2562 is even");
				} elseif ($number == 2563) {
					$sender->sendMessage("2563 is odd");
				} elseif ($number == 2564) {
					$sender->sendMessage("2564 is even");
				} elseif ($number == 2565) {
					$sender->sendMessage("2565 is odd");
				} elseif ($number == 2566) {
					$sender->sendMessage("2566 is even");
				} elseif ($number == 2567) {
					$sender->sendMessage("2567 is odd");
				} elseif ($number == 2568) {
					$sender->sendMessage("2568 is even");
				} elseif ($number == 2569) {
					$sender->sendMessage("2569 is odd");
				} elseif ($number == 2570) {
					$sender->sendMessage("2570 is even");
				} elseif ($number == 2571) {
					$sender->sendMessage("2571 is odd");
				} elseif ($number == 2572) {
					$sender->sendMessage("2572 is even");
				} elseif ($number == 2573) {
					$sender->sendMessage("2573 is odd");
				} elseif ($number == 2574) {
					$sender->sendMessage("2574 is even");
				} elseif ($number == 2575) {
					$sender->sendMessage("2575 is odd");
				} elseif ($number == 2576) {
					$sender->sendMessage("2576 is even");
				} elseif ($number == 2577) {
					$sender->sendMessage("2577 is odd");
				} elseif ($number == 2578) {
					$sender->sendMessage("2578 is even");
				} elseif ($number == 2579) {
					$sender->sendMessage("2579 is odd");
				} elseif ($number == 2580) {
					$sender->sendMessage("2580 is even");
				} elseif ($number == 2581) {
					$sender->sendMessage("2581 is odd");
				} elseif ($number == 2582) {
					$sender->sendMessage("2582 is even");
				} elseif ($number == 2583) {
					$sender->sendMessage("2583 is odd");
				} elseif ($number == 2584) {
					$sender->sendMessage("2584 is even");
				} elseif ($number == 2585) {
					$sender->sendMessage("2585 is odd");
				} elseif ($number == 2586) {
					$sender->sendMessage("2586 is even");
				} elseif ($number == 2587) {
					$sender->sendMessage("2587 is odd");
				} elseif ($number == 2588) {
					$sender->sendMessage("2588 is even");
				} elseif ($number == 2589) {
					$sender->sendMessage("2589 is odd");
				} elseif ($number == 2590) {
					$sender->sendMessage("2590 is even");
				} elseif ($number == 2591) {
					$sender->sendMessage("2591 is odd");
				} elseif ($number == 2592) {
					$sender->sendMessage("2592 is even");
				} elseif ($number == 2593) {
					$sender->sendMessage("2593 is odd");
				} elseif ($number == 2594) {
					$sender->sendMessage("2594 is even");
				} elseif ($number == 2595) {
					$sender->sendMessage("2595 is odd");
				} elseif ($number == 2596) {
					$sender->sendMessage("2596 is even");
				} elseif ($number == 2597) {
					$sender->sendMessage("2597 is odd");
				} elseif ($number == 2598) {
					$sender->sendMessage("2598 is even");
				} elseif ($number == 2599) {
					$sender->sendMessage("2599 is odd");
				} elseif ($number == 2600) {
					$sender->sendMessage("2600 is even");
				} elseif ($number == 2601) {
					$sender->sendMessage("2601 is odd");
				} elseif ($number == 2602) {
					$sender->sendMessage("2602 is even");
				} elseif ($number == 2603) {
					$sender->sendMessage("2603 is odd");
				} elseif ($number == 2604) {
					$sender->sendMessage("2604 is even");
				} elseif ($number == 2605) {
					$sender->sendMessage("2605 is odd");
				} elseif ($number == 2606) {
					$sender->sendMessage("2606 is even");
				} elseif ($number == 2607) {
					$sender->sendMessage("2607 is odd");
				} elseif ($number == 2608) {
					$sender->sendMessage("2608 is even");
				} elseif ($number == 2609) {
					$sender->sendMessage("2609 is odd");
				} elseif ($number == 2610) {
					$sender->sendMessage("2610 is even");
				} elseif ($number == 2611) {
					$sender->sendMessage("2611 is odd");
				} elseif ($number == 2612) {
					$sender->sendMessage("2612 is even");
				} elseif ($number == 2613) {
					$sender->sendMessage("2613 is odd");
				} elseif ($number == 2614) {
					$sender->sendMessage("2614 is even");
				} elseif ($number == 2615) {
					$sender->sendMessage("2615 is odd");
				} elseif ($number == 2616) {
					$sender->sendMessage("2616 is even");
				} elseif ($number == 2617) {
					$sender->sendMessage("2617 is odd");
				} elseif ($number == 2618) {
					$sender->sendMessage("2618 is even");
				} elseif ($number == 2619) {
					$sender->sendMessage("2619 is odd");
				} elseif ($number == 2620) {
					$sender->sendMessage("2620 is even");
				} elseif ($number == 2621) {
					$sender->sendMessage("2621 is odd");
				} elseif ($number == 2622) {
					$sender->sendMessage("2622 is even");
				} elseif ($number == 2623) {
					$sender->sendMessage("2623 is odd");
				} elseif ($number == 2624) {
					$sender->sendMessage("2624 is even");
				} elseif ($number == 2625) {
					$sender->sendMessage("2625 is odd");
				} elseif ($number == 2626) {
					$sender->sendMessage("2626 is even");
				} elseif ($number == 2627) {
					$sender->sendMessage("2627 is odd");
				} elseif ($number == 2628) {
					$sender->sendMessage("2628 is even");
				} elseif ($number == 2629) {
					$sender->sendMessage("2629 is odd");
				} elseif ($number == 2630) {
					$sender->sendMessage("2630 is even");
				} elseif ($number == 2631) {
					$sender->sendMessage("2631 is odd");
				} elseif ($number == 2632) {
					$sender->sendMessage("2632 is even");
				} elseif ($number == 2633) {
					$sender->sendMessage("2633 is odd");
				} elseif ($number == 2634) {
					$sender->sendMessage("2634 is even");
				} elseif ($number == 2635) {
					$sender->sendMessage("2635 is odd");
				} elseif ($number == 2636) {
					$sender->sendMessage("2636 is even");
				} elseif ($number == 2637) {
					$sender->sendMessage("2637 is odd");
				} elseif ($number == 2638) {
					$sender->sendMessage("2638 is even");
				} elseif ($number == 2639) {
					$sender->sendMessage("2639 is odd");
				} elseif ($number == 2640) {
					$sender->sendMessage("2640 is even");
				} elseif ($number == 2641) {
					$sender->sendMessage("2641 is odd");
				} elseif ($number == 2642) {
					$sender->sendMessage("2642 is even");
				} elseif ($number == 2643) {
					$sender->sendMessage("2643 is odd");
				} elseif ($number == 2644) {
					$sender->sendMessage("2644 is even");
				} elseif ($number == 2645) {
					$sender->sendMessage("2645 is odd");
				} elseif ($number == 2646) {
					$sender->sendMessage("2646 is even");
				} elseif ($number == 2647) {
					$sender->sendMessage("2647 is odd");
				} elseif ($number == 2648) {
					$sender->sendMessage("2648 is even");
				} elseif ($number == 2649) {
					$sender->sendMessage("2649 is odd");
				} elseif ($number == 2650) {
					$sender->sendMessage("2650 is even");
				} elseif ($number == 2651) {
					$sender->sendMessage("2651 is odd");
				} elseif ($number == 2652) {
					$sender->sendMessage("2652 is even");
				} elseif ($number == 2653) {
					$sender->sendMessage("2653 is odd");
				} elseif ($number == 2654) {
					$sender->sendMessage("2654 is even");
				} elseif ($number == 2655) {
					$sender->sendMessage("2655 is odd");
				} elseif ($number == 2656) {
					$sender->sendMessage("2656 is even");
				} elseif ($number == 2657) {
					$sender->sendMessage("2657 is odd");
				} elseif ($number == 2658) {
					$sender->sendMessage("2658 is even");
				} elseif ($number == 2659) {
					$sender->sendMessage("2659 is odd");
				} elseif ($number == 2660) {
					$sender->sendMessage("2660 is even");
				} elseif ($number == 2661) {
					$sender->sendMessage("2661 is odd");
				} elseif ($number == 2662) {
					$sender->sendMessage("2662 is even");
				} elseif ($number == 2663) {
					$sender->sendMessage("2663 is odd");
				} elseif ($number == 2664) {
					$sender->sendMessage("2664 is even");
				} elseif ($number == 2665) {
					$sender->sendMessage("2665 is odd");
				} elseif ($number == 2666) {
					$sender->sendMessage("2666 is even");
				} elseif ($number == 2667) {
					$sender->sendMessage("2667 is odd");
				} elseif ($number == 2668) {
					$sender->sendMessage("2668 is even");
				} elseif ($number == 2669) {
					$sender->sendMessage("2669 is odd");
				} elseif ($number == 2670) {
					$sender->sendMessage("2670 is even");
				} elseif ($number == 2671) {
					$sender->sendMessage("2671 is odd");
				} elseif ($number == 2672) {
					$sender->sendMessage("2672 is even");
				} elseif ($number == 2673) {
					$sender->sendMessage("2673 is odd");
				} elseif ($number == 2674) {
					$sender->sendMessage("2674 is even");
				} elseif ($number == 2675) {
					$sender->sendMessage("2675 is odd");
				} elseif ($number == 2676) {
					$sender->sendMessage("2676 is even");
				} elseif ($number == 2677) {
					$sender->sendMessage("2677 is odd");
				} elseif ($number == 2678) {
					$sender->sendMessage("2678 is even");
				} elseif ($number == 2679) {
					$sender->sendMessage("2679 is odd");
				} elseif ($number == 2680) {
					$sender->sendMessage("2680 is even");
				} elseif ($number == 2681) {
					$sender->sendMessage("2681 is odd");
				} elseif ($number == 2682) {
					$sender->sendMessage("2682 is even");
				} elseif ($number == 2683) {
					$sender->sendMessage("2683 is odd");
				} elseif ($number == 2684) {
					$sender->sendMessage("2684 is even");
				} elseif ($number == 2685) {
					$sender->sendMessage("2685 is odd");
				} elseif ($number == 2686) {
					$sender->sendMessage("2686 is even");
				} elseif ($number == 2687) {
					$sender->sendMessage("2687 is odd");
				} elseif ($number == 2688) {
					$sender->sendMessage("2688 is even");
				} elseif ($number == 2689) {
					$sender->sendMessage("2689 is odd");
				} elseif ($number == 2690) {
					$sender->sendMessage("2690 is even");
				} elseif ($number == 2691) {
					$sender->sendMessage("2691 is odd");
				} elseif ($number == 2692) {
					$sender->sendMessage("2692 is even");
				} elseif ($number == 2693) {
					$sender->sendMessage("2693 is odd");
				} elseif ($number == 2694) {
					$sender->sendMessage("2694 is even");
				} elseif ($number == 2695) {
					$sender->sendMessage("2695 is odd");
				} elseif ($number == 2696) {
					$sender->sendMessage("2696 is even");
				} elseif ($number == 2697) {
					$sender->sendMessage("2697 is odd");
				} elseif ($number == 2698) {
					$sender->sendMessage("2698 is even");
				} elseif ($number == 2699) {
					$sender->sendMessage("2699 is odd");
				} elseif ($number == 2700) {
					$sender->sendMessage("2700 is even");
				} elseif ($number == 2701) {
					$sender->sendMessage("2701 is odd");
				} elseif ($number == 2702) {
					$sender->sendMessage("2702 is even");
				} elseif ($number == 2703) {
					$sender->sendMessage("2703 is odd");
				} elseif ($number == 2704) {
					$sender->sendMessage("2704 is even");
				} elseif ($number == 2705) {
					$sender->sendMessage("2705 is odd");
				} elseif ($number == 2706) {
					$sender->sendMessage("2706 is even");
				} elseif ($number == 2707) {
					$sender->sendMessage("2707 is odd");
				} elseif ($number == 2708) {
					$sender->sendMessage("2708 is even");
				} elseif ($number == 2709) {
					$sender->sendMessage("2709 is odd");
				} elseif ($number == 2710) {
					$sender->sendMessage("2710 is even");
				} elseif ($number == 2711) {
					$sender->sendMessage("2711 is odd");
				} elseif ($number == 2712) {
					$sender->sendMessage("2712 is even");
				} elseif ($number == 2713) {
					$sender->sendMessage("2713 is odd");
				} elseif ($number == 2714) {
					$sender->sendMessage("2714 is even");
				} elseif ($number == 2715) {
					$sender->sendMessage("2715 is odd");
				} elseif ($number == 2716) {
					$sender->sendMessage("2716 is even");
				} elseif ($number == 2717) {
					$sender->sendMessage("2717 is odd");
				} elseif ($number == 2718) {
					$sender->sendMessage("2718 is even");
				} elseif ($number == 2719) {
					$sender->sendMessage("2719 is odd");
				} elseif ($number == 2720) {
					$sender->sendMessage("2720 is even");
				} elseif ($number == 2721) {
					$sender->sendMessage("2721 is odd");
				} elseif ($number == 2722) {
					$sender->sendMessage("2722 is even");
				} elseif ($number == 2723) {
					$sender->sendMessage("2723 is odd");
				} elseif ($number == 2724) {
					$sender->sendMessage("2724 is even");
				} elseif ($number == 2725) {
					$sender->sendMessage("2725 is odd");
				} elseif ($number == 2726) {
					$sender->sendMessage("2726 is even");
				} elseif ($number == 2727) {
					$sender->sendMessage("2727 is odd");
				} elseif ($number == 2728) {
					$sender->sendMessage("2728 is even");
				} elseif ($number == 2729) {
					$sender->sendMessage("2729 is odd");
				} elseif ($number == 2730) {
					$sender->sendMessage("2730 is even");
				} elseif ($number == 2731) {
					$sender->sendMessage("2731 is odd");
				} elseif ($number == 2732) {
					$sender->sendMessage("2732 is even");
				} elseif ($number == 2733) {
					$sender->sendMessage("2733 is odd");
				} elseif ($number == 2734) {
					$sender->sendMessage("2734 is even");
				} elseif ($number == 2735) {
					$sender->sendMessage("2735 is odd");
				} elseif ($number == 2736) {
					$sender->sendMessage("2736 is even");
				} elseif ($number == 2737) {
					$sender->sendMessage("2737 is odd");
				} elseif ($number == 2738) {
					$sender->sendMessage("2738 is even");
				} elseif ($number == 2739) {
					$sender->sendMessage("2739 is odd");
				} elseif ($number == 2740) {
					$sender->sendMessage("2740 is even");
				} elseif ($number == 2741) {
					$sender->sendMessage("2741 is odd");
				} elseif ($number == 2742) {
					$sender->sendMessage("2742 is even");
				} elseif ($number == 2743) {
					$sender->sendMessage("2743 is odd");
				} elseif ($number == 2744) {
					$sender->sendMessage("2744 is even");
				} elseif ($number == 2745) {
					$sender->sendMessage("2745 is odd");
				} elseif ($number == 2746) {
					$sender->sendMessage("2746 is even");
				} elseif ($number == 2747) {
					$sender->sendMessage("2747 is odd");
				} elseif ($number == 2748) {
					$sender->sendMessage("2748 is even");
				} elseif ($number == 2749) {
					$sender->sendMessage("2749 is odd");
				} elseif ($number == 2750) {
					$sender->sendMessage("2750 is even");
				} elseif ($number == 2751) {
					$sender->sendMessage("2751 is odd");
				} elseif ($number == 2752) {
					$sender->sendMessage("2752 is even");
				} elseif ($number == 2753) {
					$sender->sendMessage("2753 is odd");
				} elseif ($number == 2754) {
					$sender->sendMessage("2754 is even");
				} elseif ($number == 2755) {
					$sender->sendMessage("2755 is odd");
				} elseif ($number == 2756) {
					$sender->sendMessage("2756 is even");
				} elseif ($number == 2757) {
					$sender->sendMessage("2757 is odd");
				} elseif ($number == 2758) {
					$sender->sendMessage("2758 is even");
				} elseif ($number == 2759) {
					$sender->sendMessage("2759 is odd");
				} elseif ($number == 2760) {
					$sender->sendMessage("2760 is even");
				} elseif ($number == 2761) {
					$sender->sendMessage("2761 is odd");
				} elseif ($number == 2762) {
					$sender->sendMessage("2762 is even");
				} elseif ($number == 2763) {
					$sender->sendMessage("2763 is odd");
				} elseif ($number == 2764) {
					$sender->sendMessage("2764 is even");
				} elseif ($number == 2765) {
					$sender->sendMessage("2765 is odd");
				} elseif ($number == 2766) {
					$sender->sendMessage("2766 is even");
				} elseif ($number == 2767) {
					$sender->sendMessage("2767 is odd");
				} elseif ($number == 2768) {
					$sender->sendMessage("2768 is even");
				} elseif ($number == 2769) {
					$sender->sendMessage("2769 is odd");
				} elseif ($number == 2770) {
					$sender->sendMessage("2770 is even");
				} elseif ($number == 2771) {
					$sender->sendMessage("2771 is odd");
				} elseif ($number == 2772) {
					$sender->sendMessage("2772 is even");
				} elseif ($number == 2773) {
					$sender->sendMessage("2773 is odd");
				} elseif ($number == 2774) {
					$sender->sendMessage("2774 is even");
				} elseif ($number == 2775) {
					$sender->sendMessage("2775 is odd");
				} elseif ($number == 2776) {
					$sender->sendMessage("2776 is even");
				} elseif ($number == 2777) {
					$sender->sendMessage("2777 is odd");
				} elseif ($number == 2778) {
					$sender->sendMessage("2778 is even");
				} elseif ($number == 2779) {
					$sender->sendMessage("2779 is odd");
				} elseif ($number == 2780) {
					$sender->sendMessage("2780 is even");
				} elseif ($number == 2781) {
					$sender->sendMessage("2781 is odd");
				} elseif ($number == 2782) {
					$sender->sendMessage("2782 is even");
				} elseif ($number == 2783) {
					$sender->sendMessage("2783 is odd");
				} elseif ($number == 2784) {
					$sender->sendMessage("2784 is even");
				} elseif ($number == 2785) {
					$sender->sendMessage("2785 is odd");
				} elseif ($number == 2786) {
					$sender->sendMessage("2786 is even");
				} elseif ($number == 2787) {
					$sender->sendMessage("2787 is odd");
				} elseif ($number == 2788) {
					$sender->sendMessage("2788 is even");
				} elseif ($number == 2789) {
					$sender->sendMessage("2789 is odd");
				} elseif ($number == 2790) {
					$sender->sendMessage("2790 is even");
				} elseif ($number == 2791) {
					$sender->sendMessage("2791 is odd");
				} elseif ($number == 2792) {
					$sender->sendMessage("2792 is even");
				} elseif ($number == 2793) {
					$sender->sendMessage("2793 is odd");
				} elseif ($number == 2794) {
					$sender->sendMessage("2794 is even");
				} elseif ($number == 2795) {
					$sender->sendMessage("2795 is odd");
				} elseif ($number == 2796) {
					$sender->sendMessage("2796 is even");
				} elseif ($number == 2797) {
					$sender->sendMessage("2797 is odd");
				} elseif ($number == 2798) {
					$sender->sendMessage("2798 is even");
				} elseif ($number == 2799) {
					$sender->sendMessage("2799 is odd");
				} elseif ($number == 2800) {
					$sender->sendMessage("2800 is even");
				} elseif ($number == 2801) {
					$sender->sendMessage("2801 is odd");
				} elseif ($number == 2802) {
					$sender->sendMessage("2802 is even");
				} elseif ($number == 2803) {
					$sender->sendMessage("2803 is odd");
				} elseif ($number == 2804) {
					$sender->sendMessage("2804 is even");
				} elseif ($number == 2805) {
					$sender->sendMessage("2805 is odd");
				} elseif ($number == 2806) {
					$sender->sendMessage("2806 is even");
				} elseif ($number == 2807) {
					$sender->sendMessage("2807 is odd");
				} elseif ($number == 2808) {
					$sender->sendMessage("2808 is even");
				} elseif ($number == 2809) {
					$sender->sendMessage("2809 is odd");
				} elseif ($number == 2810) {
					$sender->sendMessage("2810 is even");
				} elseif ($number == 2811) {
					$sender->sendMessage("2811 is odd");
				} elseif ($number == 2812) {
					$sender->sendMessage("2812 is even");
				} elseif ($number == 2813) {
					$sender->sendMessage("2813 is odd");
				} elseif ($number == 2814) {
					$sender->sendMessage("2814 is even");
				} elseif ($number == 2815) {
					$sender->sendMessage("2815 is odd");
				} elseif ($number == 2816) {
					$sender->sendMessage("2816 is even");
				} elseif ($number == 2817) {
					$sender->sendMessage("2817 is odd");
				} elseif ($number == 2818) {
					$sender->sendMessage("2818 is even");
				} elseif ($number == 2819) {
					$sender->sendMessage("2819 is odd");
				} elseif ($number == 2820) {
					$sender->sendMessage("2820 is even");
				} elseif ($number == 2821) {
					$sender->sendMessage("2821 is odd");
				} elseif ($number == 2822) {
					$sender->sendMessage("2822 is even");
				} elseif ($number == 2823) {
					$sender->sendMessage("2823 is odd");
				} elseif ($number == 2824) {
					$sender->sendMessage("2824 is even");
				} elseif ($number == 2825) {
					$sender->sendMessage("2825 is odd");
				} elseif ($number == 2826) {
					$sender->sendMessage("2826 is even");
				} elseif ($number == 2827) {
					$sender->sendMessage("2827 is odd");
				} elseif ($number == 2828) {
					$sender->sendMessage("2828 is even");
				} elseif ($number == 2829) {
					$sender->sendMessage("2829 is odd");
				} elseif ($number == 2830) {
					$sender->sendMessage("2830 is even");
				} elseif ($number == 2831) {
					$sender->sendMessage("2831 is odd");
				} elseif ($number == 2832) {
					$sender->sendMessage("2832 is even");
				} elseif ($number == 2833) {
					$sender->sendMessage("2833 is odd");
				} elseif ($number == 2834) {
					$sender->sendMessage("2834 is even");
				} elseif ($number == 2835) {
					$sender->sendMessage("2835 is odd");
				} elseif ($number == 2836) {
					$sender->sendMessage("2836 is even");
				} elseif ($number == 2837) {
					$sender->sendMessage("2837 is odd");
				} elseif ($number == 2838) {
					$sender->sendMessage("2838 is even");
				} elseif ($number == 2839) {
					$sender->sendMessage("2839 is odd");
				} elseif ($number == 2840) {
					$sender->sendMessage("2840 is even");
				} elseif ($number == 2841) {
					$sender->sendMessage("2841 is odd");
				} elseif ($number == 2842) {
					$sender->sendMessage("2842 is even");
				} elseif ($number == 2843) {
					$sender->sendMessage("2843 is odd");
				} elseif ($number == 2844) {
					$sender->sendMessage("2844 is even");
				} elseif ($number == 2845) {
					$sender->sendMessage("2845 is odd");
				} elseif ($number == 2846) {
					$sender->sendMessage("2846 is even");
				} elseif ($number == 2847) {
					$sender->sendMessage("2847 is odd");
				} elseif ($number == 2848) {
					$sender->sendMessage("2848 is even");
				} elseif ($number == 2849) {
					$sender->sendMessage("2849 is odd");
				} elseif ($number == 2850) {
					$sender->sendMessage("2850 is even");
				} elseif ($number == 2851) {
					$sender->sendMessage("2851 is odd");
				} elseif ($number == 2852) {
					$sender->sendMessage("2852 is even");
				} elseif ($number == 2853) {
					$sender->sendMessage("2853 is odd");
				} elseif ($number == 2854) {
					$sender->sendMessage("2854 is even");
				} elseif ($number == 2855) {
					$sender->sendMessage("2855 is odd");
				} elseif ($number == 2856) {
					$sender->sendMessage("2856 is even");
				} elseif ($number == 2857) {
					$sender->sendMessage("2857 is odd");
				} elseif ($number == 2858) {
					$sender->sendMessage("2858 is even");
				} elseif ($number == 2859) {
					$sender->sendMessage("2859 is odd");
				} elseif ($number == 2860) {
					$sender->sendMessage("2860 is even");
				} elseif ($number == 2861) {
					$sender->sendMessage("2861 is odd");
				} elseif ($number == 2862) {
					$sender->sendMessage("2862 is even");
				} elseif ($number == 2863) {
					$sender->sendMessage("2863 is odd");
				} elseif ($number == 2864) {
					$sender->sendMessage("2864 is even");
				} elseif ($number == 2865) {
					$sender->sendMessage("2865 is odd");
				} elseif ($number == 2866) {
					$sender->sendMessage("2866 is even");
				} elseif ($number == 2867) {
					$sender->sendMessage("2867 is odd");
				} elseif ($number == 2868) {
					$sender->sendMessage("2868 is even");
				} elseif ($number == 2869) {
					$sender->sendMessage("2869 is odd");
				} elseif ($number == 2870) {
					$sender->sendMessage("2870 is even");
				} elseif ($number == 2871) {
					$sender->sendMessage("2871 is odd");
				} elseif ($number == 2872) {
					$sender->sendMessage("2872 is even");
				} elseif ($number == 2873) {
					$sender->sendMessage("2873 is odd");
				} elseif ($number == 2874) {
					$sender->sendMessage("2874 is even");
				} elseif ($number == 2875) {
					$sender->sendMessage("2875 is odd");
				} elseif ($number == 2876) {
					$sender->sendMessage("2876 is even");
				} elseif ($number == 2877) {
					$sender->sendMessage("2877 is odd");
				} elseif ($number == 2878) {
					$sender->sendMessage("2878 is even");
				} elseif ($number == 2879) {
					$sender->sendMessage("2879 is odd");
				} elseif ($number == 2880) {
					$sender->sendMessage("2880 is even");
				} elseif ($number == 2881) {
					$sender->sendMessage("2881 is odd");
				} elseif ($number == 2882) {
					$sender->sendMessage("2882 is even");
				} elseif ($number == 2883) {
					$sender->sendMessage("2883 is odd");
				} elseif ($number == 2884) {
					$sender->sendMessage("2884 is even");
				} elseif ($number == 2885) {
					$sender->sendMessage("2885 is odd");
				} elseif ($number == 2886) {
					$sender->sendMessage("2886 is even");
				} elseif ($number == 2887) {
					$sender->sendMessage("2887 is odd");
				} elseif ($number == 2888) {
					$sender->sendMessage("2888 is even");
				} elseif ($number == 2889) {
					$sender->sendMessage("2889 is odd");
				} elseif ($number == 2890) {
					$sender->sendMessage("2890 is even");
				} elseif ($number == 2891) {
					$sender->sendMessage("2891 is odd");
				} elseif ($number == 2892) {
					$sender->sendMessage("2892 is even");
				} elseif ($number == 2893) {
					$sender->sendMessage("2893 is odd");
				} elseif ($number == 2894) {
					$sender->sendMessage("2894 is even");
				} elseif ($number == 2895) {
					$sender->sendMessage("2895 is odd");
				} elseif ($number == 2896) {
					$sender->sendMessage("2896 is even");
				} elseif ($number == 2897) {
					$sender->sendMessage("2897 is odd");
				} elseif ($number == 2898) {
					$sender->sendMessage("2898 is even");
				} elseif ($number == 2899) {
					$sender->sendMessage("2899 is odd");
				} elseif ($number == 2900) {
					$sender->sendMessage("2900 is even");
				} elseif ($number == 2901) {
					$sender->sendMessage("2901 is odd");
				} elseif ($number == 2902) {
					$sender->sendMessage("2902 is even");
				} elseif ($number == 2903) {
					$sender->sendMessage("2903 is odd");
				} elseif ($number == 2904) {
					$sender->sendMessage("2904 is even");
				} elseif ($number == 2905) {
					$sender->sendMessage("2905 is odd");
				} elseif ($number == 2906) {
					$sender->sendMessage("2906 is even");
				} elseif ($number == 2907) {
					$sender->sendMessage("2907 is odd");
				} elseif ($number == 2908) {
					$sender->sendMessage("2908 is even");
				} elseif ($number == 2909) {
					$sender->sendMessage("2909 is odd");
				} elseif ($number == 2910) {
					$sender->sendMessage("2910 is even");
				} elseif ($number == 2911) {
					$sender->sendMessage("2911 is odd");
				} elseif ($number == 2912) {
					$sender->sendMessage("2912 is even");
				} elseif ($number == 2913) {
					$sender->sendMessage("2913 is odd");
				} elseif ($number == 2914) {
					$sender->sendMessage("2914 is even");
				} elseif ($number == 2915) {
					$sender->sendMessage("2915 is odd");
				} elseif ($number == 2916) {
					$sender->sendMessage("2916 is even");
				} elseif ($number == 2917) {
					$sender->sendMessage("2917 is odd");
				} elseif ($number == 2918) {
					$sender->sendMessage("2918 is even");
				} elseif ($number == 2919) {
					$sender->sendMessage("2919 is odd");
				} elseif ($number == 2920) {
					$sender->sendMessage("2920 is even");
				} elseif ($number == 2921) {
					$sender->sendMessage("2921 is odd");
				} elseif ($number == 2922) {
					$sender->sendMessage("2922 is even");
				} elseif ($number == 2923) {
					$sender->sendMessage("2923 is odd");
				} elseif ($number == 2924) {
					$sender->sendMessage("2924 is even");
				} elseif ($number == 2925) {
					$sender->sendMessage("2925 is odd");
				} elseif ($number == 2926) {
					$sender->sendMessage("2926 is even");
				} elseif ($number == 2927) {
					$sender->sendMessage("2927 is odd");
				} elseif ($number == 2928) {
					$sender->sendMessage("2928 is even");
				} elseif ($number == 2929) {
					$sender->sendMessage("2929 is odd");
				} elseif ($number == 2930) {
					$sender->sendMessage("2930 is even");
				} elseif ($number == 2931) {
					$sender->sendMessage("2931 is odd");
				} elseif ($number == 2932) {
					$sender->sendMessage("2932 is even");
				} elseif ($number == 2933) {
					$sender->sendMessage("2933 is odd");
				} elseif ($number == 2934) {
					$sender->sendMessage("2934 is even");
				} elseif ($number == 2935) {
					$sender->sendMessage("2935 is odd");
				} elseif ($number == 2936) {
					$sender->sendMessage("2936 is even");
				} elseif ($number == 2937) {
					$sender->sendMessage("2937 is odd");
				} elseif ($number == 2938) {
					$sender->sendMessage("2938 is even");
				} elseif ($number == 2939) {
					$sender->sendMessage("2939 is odd");
				} elseif ($number == 2940) {
					$sender->sendMessage("2940 is even");
				} elseif ($number == 2941) {
					$sender->sendMessage("2941 is odd");
				} elseif ($number == 2942) {
					$sender->sendMessage("2942 is even");
				} elseif ($number == 2943) {
					$sender->sendMessage("2943 is odd");
				} elseif ($number == 2944) {
					$sender->sendMessage("2944 is even");
				} elseif ($number == 2945) {
					$sender->sendMessage("2945 is odd");
				} elseif ($number == 2946) {
					$sender->sendMessage("2946 is even");
				} elseif ($number == 2947) {
					$sender->sendMessage("2947 is odd");
				} elseif ($number == 2948) {
					$sender->sendMessage("2948 is even");
				} elseif ($number == 2949) {
					$sender->sendMessage("2949 is odd");
				} elseif ($number == 2950) {
					$sender->sendMessage("2950 is even");
				} elseif ($number == 2951) {
					$sender->sendMessage("2951 is odd");
				} elseif ($number == 2952) {
					$sender->sendMessage("2952 is even");
				} elseif ($number == 2953) {
					$sender->sendMessage("2953 is odd");
				} elseif ($number == 2954) {
					$sender->sendMessage("2954 is even");
				} elseif ($number == 2955) {
					$sender->sendMessage("2955 is odd");
				} elseif ($number == 2956) {
					$sender->sendMessage("2956 is even");
				} elseif ($number == 2957) {
					$sender->sendMessage("2957 is odd");
				} elseif ($number == 2958) {
					$sender->sendMessage("2958 is even");
				} elseif ($number == 2959) {
					$sender->sendMessage("2959 is odd");
				} elseif ($number == 2960) {
					$sender->sendMessage("2960 is even");
				} elseif ($number == 2961) {
					$sender->sendMessage("2961 is odd");
				} elseif ($number == 2962) {
					$sender->sendMessage("2962 is even");
				} elseif ($number == 2963) {
					$sender->sendMessage("2963 is odd");
				} elseif ($number == 2964) {
					$sender->sendMessage("2964 is even");
				} elseif ($number == 2965) {
					$sender->sendMessage("2965 is odd");
				} elseif ($number == 2966) {
					$sender->sendMessage("2966 is even");
				} elseif ($number == 2967) {
					$sender->sendMessage("2967 is odd");
				} elseif ($number == 2968) {
					$sender->sendMessage("2968 is even");
				} elseif ($number == 2969) {
					$sender->sendMessage("2969 is odd");
				} elseif ($number == 2970) {
					$sender->sendMessage("2970 is even");
				} elseif ($number == 2971) {
					$sender->sendMessage("2971 is odd");
				} elseif ($number == 2972) {
					$sender->sendMessage("2972 is even");
				} elseif ($number == 2973) {
					$sender->sendMessage("2973 is odd");
				} elseif ($number == 2974) {
					$sender->sendMessage("2974 is even");
				} elseif ($number == 2975) {
					$sender->sendMessage("2975 is odd");
				} elseif ($number == 2976) {
					$sender->sendMessage("2976 is even");
				} elseif ($number == 2977) {
					$sender->sendMessage("2977 is odd");
				} elseif ($number == 2978) {
					$sender->sendMessage("2978 is even");
				} elseif ($number == 2979) {
					$sender->sendMessage("2979 is odd");
				} elseif ($number == 2980) {
					$sender->sendMessage("2980 is even");
				} elseif ($number == 2981) {
					$sender->sendMessage("2981 is odd");
				} elseif ($number == 2982) {
					$sender->sendMessage("2982 is even");
				} elseif ($number == 2983) {
					$sender->sendMessage("2983 is odd");
				} elseif ($number == 2984) {
					$sender->sendMessage("2984 is even");
				} elseif ($number == 2985) {
					$sender->sendMessage("2985 is odd");
				} elseif ($number == 2986) {
					$sender->sendMessage("2986 is even");
				} elseif ($number == 2987) {
					$sender->sendMessage("2987 is odd");
				} elseif ($number == 2988) {
					$sender->sendMessage("2988 is even");
				} elseif ($number == 2989) {
					$sender->sendMessage("2989 is odd");
				} elseif ($number == 2990) {
					$sender->sendMessage("2990 is even");
				} elseif ($number == 2991) {
					$sender->sendMessage("2991 is odd");
				} elseif ($number == 2992) {
					$sender->sendMessage("2992 is even");
				} elseif ($number == 2993) {
					$sender->sendMessage("2993 is odd");
				} elseif ($number == 2994) {
					$sender->sendMessage("2994 is even");
				} elseif ($number == 2995) {
					$sender->sendMessage("2995 is odd");
				} elseif ($number == 2996) {
					$sender->sendMessage("2996 is even");
				} elseif ($number == 2997) {
					$sender->sendMessage("2997 is odd");
				} elseif ($number == 2998) {
					$sender->sendMessage("2998 is even");
				} elseif ($number == 2999) {
					$sender->sendMessage("2999 is odd");
				} elseif ($number == 3000) {
					$sender->sendMessage("3000 is even");
				} elseif ($number == 3001) {
					$sender->sendMessage("3001 is odd");
				} elseif ($number == 3002) {
					$sender->sendMessage("3002 is even");
				} elseif ($number == 3003) {
					$sender->sendMessage("3003 is odd");
				} elseif ($number == 3004) {
					$sender->sendMessage("3004 is even");
				} elseif ($number == 3005) {
					$sender->sendMessage("3005 is odd");
				} elseif ($number == 3006) {
					$sender->sendMessage("3006 is even");
				} elseif ($number == 3007) {
					$sender->sendMessage("3007 is odd");
				} elseif ($number == 3008) {
					$sender->sendMessage("3008 is even");
				} elseif ($number == 3009) {
					$sender->sendMessage("3009 is odd");
				} elseif ($number == 3010) {
					$sender->sendMessage("3010 is even");
				} elseif ($number == 3011) {
					$sender->sendMessage("3011 is odd");
				} elseif ($number == 3012) {
					$sender->sendMessage("3012 is even");
				} elseif ($number == 3013) {
					$sender->sendMessage("3013 is odd");
				} elseif ($number == 3014) {
					$sender->sendMessage("3014 is even");
				} elseif ($number == 3015) {
					$sender->sendMessage("3015 is odd");
				} elseif ($number == 3016) {
					$sender->sendMessage("3016 is even");
				} elseif ($number == 3017) {
					$sender->sendMessage("3017 is odd");
				} elseif ($number == 3018) {
					$sender->sendMessage("3018 is even");
				} elseif ($number == 3019) {
					$sender->sendMessage("3019 is odd");
				} elseif ($number == 3020) {
					$sender->sendMessage("3020 is even");
				} elseif ($number == 3021) {
					$sender->sendMessage("3021 is odd");
				} elseif ($number == 3022) {
					$sender->sendMessage("3022 is even");
				} elseif ($number == 3023) {
					$sender->sendMessage("3023 is odd");
				} elseif ($number == 3024) {
					$sender->sendMessage("3024 is even");
				} elseif ($number == 3025) {
					$sender->sendMessage("3025 is odd");
				} elseif ($number == 3026) {
					$sender->sendMessage("3026 is even");
				} elseif ($number == 3027) {
					$sender->sendMessage("3027 is odd");
				} elseif ($number == 3028) {
					$sender->sendMessage("3028 is even");
				} elseif ($number == 3029) {
					$sender->sendMessage("3029 is odd");
				} elseif ($number == 3030) {
					$sender->sendMessage("3030 is even");
				} elseif ($number == 3031) {
					$sender->sendMessage("3031 is odd");
				} elseif ($number == 3032) {
					$sender->sendMessage("3032 is even");
				} elseif ($number == 3033) {
					$sender->sendMessage("3033 is odd");
				} elseif ($number == 3034) {
					$sender->sendMessage("3034 is even");
				} elseif ($number == 3035) {
					$sender->sendMessage("3035 is odd");
				} elseif ($number == 3036) {
					$sender->sendMessage("3036 is even");
				} elseif ($number == 3037) {
					$sender->sendMessage("3037 is odd");
				} elseif ($number == 3038) {
					$sender->sendMessage("3038 is even");
				} elseif ($number == 3039) {
					$sender->sendMessage("3039 is odd");
				} elseif ($number == 3040) {
					$sender->sendMessage("3040 is even");
				} elseif ($number == 3041) {
					$sender->sendMessage("3041 is odd");
				} elseif ($number == 3042) {
					$sender->sendMessage("3042 is even");
				} elseif ($number == 3043) {
					$sender->sendMessage("3043 is odd");
				} elseif ($number == 3044) {
					$sender->sendMessage("3044 is even");
				} elseif ($number == 3045) {
					$sender->sendMessage("3045 is odd");
				} elseif ($number == 3046) {
					$sender->sendMessage("3046 is even");
				} elseif ($number == 3047) {
					$sender->sendMessage("3047 is odd");
				} elseif ($number == 3048) {
					$sender->sendMessage("3048 is even");
				} elseif ($number == 3049) {
					$sender->sendMessage("3049 is odd");
				} elseif ($number == 3050) {
					$sender->sendMessage("3050 is even");
				} elseif ($number == 3051) {
					$sender->sendMessage("3051 is odd");
				} elseif ($number == 3052) {
					$sender->sendMessage("3052 is even");
				} elseif ($number == 3053) {
					$sender->sendMessage("3053 is odd");
				} elseif ($number == 3054) {
					$sender->sendMessage("3054 is even");
				} elseif ($number == 3055) {
					$sender->sendMessage("3055 is odd");
				} elseif ($number == 3056) {
					$sender->sendMessage("3056 is even");
				} elseif ($number == 3057) {
					$sender->sendMessage("3057 is odd");
				} elseif ($number == 3058) {
					$sender->sendMessage("3058 is even");
				} elseif ($number == 3059) {
					$sender->sendMessage("3059 is odd");
				} elseif ($number == 3060) {
					$sender->sendMessage("3060 is even");
				} elseif ($number == 3061) {
					$sender->sendMessage("3061 is odd");
				} elseif ($number == 3062) {
					$sender->sendMessage("3062 is even");
				} elseif ($number == 3063) {
					$sender->sendMessage("3063 is odd");
				} elseif ($number == 3064) {
					$sender->sendMessage("3064 is even");
				} elseif ($number == 3065) {
					$sender->sendMessage("3065 is odd");
				} elseif ($number == 3066) {
					$sender->sendMessage("3066 is even");
				} elseif ($number == 3067) {
					$sender->sendMessage("3067 is odd");
				} elseif ($number == 3068) {
					$sender->sendMessage("3068 is even");
				} elseif ($number == 3069) {
					$sender->sendMessage("3069 is odd");
				} elseif ($number == 3070) {
					$sender->sendMessage("3070 is even");
				} elseif ($number == 3071) {
					$sender->sendMessage("3071 is odd");
				} elseif ($number == 3072) {
					$sender->sendMessage("3072 is even");
				} elseif ($number == 3073) {
					$sender->sendMessage("3073 is odd");
				} elseif ($number == 3074) {
					$sender->sendMessage("3074 is even");
				} elseif ($number == 3075) {
					$sender->sendMessage("3075 is odd");
				} elseif ($number == 3076) {
					$sender->sendMessage("3076 is even");
				} elseif ($number == 3077) {
					$sender->sendMessage("3077 is odd");
				} elseif ($number == 3078) {
					$sender->sendMessage("3078 is even");
				} elseif ($number == 3079) {
					$sender->sendMessage("3079 is odd");
				} elseif ($number == 3080) {
					$sender->sendMessage("3080 is even");
				} elseif ($number == 3081) {
					$sender->sendMessage("3081 is odd");
				} elseif ($number == 3082) {
					$sender->sendMessage("3082 is even");
				} elseif ($number == 3083) {
					$sender->sendMessage("3083 is odd");
				} elseif ($number == 3084) {
					$sender->sendMessage("3084 is even");
				} elseif ($number == 3085) {
					$sender->sendMessage("3085 is odd");
				} elseif ($number == 3086) {
					$sender->sendMessage("3086 is even");
				} elseif ($number == 3087) {
					$sender->sendMessage("3087 is odd");
				} elseif ($number == 3088) {
					$sender->sendMessage("3088 is even");
				} elseif ($number == 3089) {
					$sender->sendMessage("3089 is odd");
				} elseif ($number == 3090) {
					$sender->sendMessage("3090 is even");
				} elseif ($number == 3091) {
					$sender->sendMessage("3091 is odd");
				} elseif ($number == 3092) {
					$sender->sendMessage("3092 is even");
				} elseif ($number == 3093) {
					$sender->sendMessage("3093 is odd");
				} elseif ($number == 3094) {
					$sender->sendMessage("3094 is even");
				} elseif ($number == 3095) {
					$sender->sendMessage("3095 is odd");
				} elseif ($number == 3096) {
					$sender->sendMessage("3096 is even");
				} elseif ($number == 3097) {
					$sender->sendMessage("3097 is odd");
				} elseif ($number == 3098) {
					$sender->sendMessage("3098 is even");
				} elseif ($number == 3099) {
					$sender->sendMessage("3099 is odd");
				} elseif ($number == 3100) {
					$sender->sendMessage("3100 is even");
				} elseif ($number == 3101) {
					$sender->sendMessage("3101 is odd");
				} elseif ($number == 3102) {
					$sender->sendMessage("3102 is even");
				} elseif ($number == 3103) {
					$sender->sendMessage("3103 is odd");
				} elseif ($number == 3104) {
					$sender->sendMessage("3104 is even");
				} elseif ($number == 3105) {
					$sender->sendMessage("3105 is odd");
				} elseif ($number == 3106) {
					$sender->sendMessage("3106 is even");
				} elseif ($number == 3107) {
					$sender->sendMessage("3107 is odd");
				} elseif ($number == 3108) {
					$sender->sendMessage("3108 is even");
				} elseif ($number == 3109) {
					$sender->sendMessage("3109 is odd");
				} elseif ($number == 3110) {
					$sender->sendMessage("3110 is even");
				} elseif ($number == 3111) {
					$sender->sendMessage("3111 is odd");
				} elseif ($number == 3112) {
					$sender->sendMessage("3112 is even");
				} elseif ($number == 3113) {
					$sender->sendMessage("3113 is odd");
				} elseif ($number == 3114) {
					$sender->sendMessage("3114 is even");
				} elseif ($number == 3115) {
					$sender->sendMessage("3115 is odd");
				} elseif ($number == 3116) {
					$sender->sendMessage("3116 is even");
				} elseif ($number == 3117) {
					$sender->sendMessage("3117 is odd");
				} elseif ($number == 3118) {
					$sender->sendMessage("3118 is even");
				} elseif ($number == 3119) {
					$sender->sendMessage("3119 is odd");
				} elseif ($number == 3120) {
					$sender->sendMessage("3120 is even");
				} elseif ($number == 3121) {
					$sender->sendMessage("3121 is odd");
				} elseif ($number == 3122) {
					$sender->sendMessage("3122 is even");
				} elseif ($number == 3123) {
					$sender->sendMessage("3123 is odd");
				} elseif ($number == 3124) {
					$sender->sendMessage("3124 is even");
				} elseif ($number == 3125) {
					$sender->sendMessage("3125 is odd");
				} elseif ($number == 3126) {
					$sender->sendMessage("3126 is even");
				} elseif ($number == 3127) {
					$sender->sendMessage("3127 is odd");
				} elseif ($number == 3128) {
					$sender->sendMessage("3128 is even");
				} elseif ($number == 3129) {
					$sender->sendMessage("3129 is odd");
				} elseif ($number == 3130) {
					$sender->sendMessage("3130 is even");
				} elseif ($number == 3131) {
					$sender->sendMessage("3131 is odd");
				} elseif ($number == 3132) {
					$sender->sendMessage("3132 is even");
				} elseif ($number == 3133) {
					$sender->sendMessage("3133 is odd");
				} elseif ($number == 3134) {
					$sender->sendMessage("3134 is even");
				} elseif ($number == 3135) {
					$sender->sendMessage("3135 is odd");
				} elseif ($number == 3136) {
					$sender->sendMessage("3136 is even");
				} elseif ($number == 3137) {
					$sender->sendMessage("3137 is odd");
				} elseif ($number == 3138) {
					$sender->sendMessage("3138 is even");
				} elseif ($number == 3139) {
					$sender->sendMessage("3139 is odd");
				} elseif ($number == 3140) {
					$sender->sendMessage("3140 is even");
				} elseif ($number == 3141) {
					$sender->sendMessage("3141 is odd");
				} elseif ($number == 3142) {
					$sender->sendMessage("3142 is even");
				} elseif ($number == 3143) {
					$sender->sendMessage("3143 is odd");
				} elseif ($number == 3144) {
					$sender->sendMessage("3144 is even");
				} elseif ($number == 3145) {
					$sender->sendMessage("3145 is odd");
				} elseif ($number == 3146) {
					$sender->sendMessage("3146 is even");
				} elseif ($number == 3147) {
					$sender->sendMessage("3147 is odd");
				} elseif ($number == 3148) {
					$sender->sendMessage("3148 is even");
				} elseif ($number == 3149) {
					$sender->sendMessage("3149 is odd");
				} elseif ($number == 3150) {
					$sender->sendMessage("3150 is even");
				} elseif ($number == 3151) {
					$sender->sendMessage("3151 is odd");
				} elseif ($number == 3152) {
					$sender->sendMessage("3152 is even");
				} elseif ($number == 3153) {
					$sender->sendMessage("3153 is odd");
				} elseif ($number == 3154) {
					$sender->sendMessage("3154 is even");
				} elseif ($number == 3155) {
					$sender->sendMessage("3155 is odd");
				} elseif ($number == 3156) {
					$sender->sendMessage("3156 is even");
				} elseif ($number == 3157) {
					$sender->sendMessage("3157 is odd");
				} elseif ($number == 3158) {
					$sender->sendMessage("3158 is even");
				} elseif ($number == 3159) {
					$sender->sendMessage("3159 is odd");
				} elseif ($number == 3160) {
					$sender->sendMessage("3160 is even");
				} elseif ($number == 3161) {
					$sender->sendMessage("3161 is odd");
				} elseif ($number == 3162) {
					$sender->sendMessage("3162 is even");
				} elseif ($number == 3163) {
					$sender->sendMessage("3163 is odd");
				} elseif ($number == 3164) {
					$sender->sendMessage("3164 is even");
				} elseif ($number == 3165) {
					$sender->sendMessage("3165 is odd");
				} elseif ($number == 3166) {
					$sender->sendMessage("3166 is even");
				} elseif ($number == 3167) {
					$sender->sendMessage("3167 is odd");
				} elseif ($number == 3168) {
					$sender->sendMessage("3168 is even");
				} elseif ($number == 3169) {
					$sender->sendMessage("3169 is odd");
				} elseif ($number == 3170) {
					$sender->sendMessage("3170 is even");
				} elseif ($number == 3171) {
					$sender->sendMessage("3171 is odd");
				} elseif ($number == 3172) {
					$sender->sendMessage("3172 is even");
				} elseif ($number == 3173) {
					$sender->sendMessage("3173 is odd");
				} elseif ($number == 3174) {
					$sender->sendMessage("3174 is even");
				} elseif ($number == 3175) {
					$sender->sendMessage("3175 is odd");
				} elseif ($number == 3176) {
					$sender->sendMessage("3176 is even");
				} elseif ($number == 3177) {
					$sender->sendMessage("3177 is odd");
				} elseif ($number == 3178) {
					$sender->sendMessage("3178 is even");
				} elseif ($number == 3179) {
					$sender->sendMessage("3179 is odd");
				} elseif ($number == 3180) {
					$sender->sendMessage("3180 is even");
				} elseif ($number == 3181) {
					$sender->sendMessage("3181 is odd");
				} elseif ($number == 3182) {
					$sender->sendMessage("3182 is even");
				} elseif ($number == 3183) {
					$sender->sendMessage("3183 is odd");
				} elseif ($number == 3184) {
					$sender->sendMessage("3184 is even");
				} elseif ($number == 3185) {
					$sender->sendMessage("3185 is odd");
				} elseif ($number == 3186) {
					$sender->sendMessage("3186 is even");
				} elseif ($number == 3187) {
					$sender->sendMessage("3187 is odd");
				} elseif ($number == 3188) {
					$sender->sendMessage("3188 is even");
				} elseif ($number == 3189) {
					$sender->sendMessage("3189 is odd");
				} elseif ($number == 3190) {
					$sender->sendMessage("3190 is even");
				} elseif ($number == 3191) {
					$sender->sendMessage("3191 is odd");
				} elseif ($number == 3192) {
					$sender->sendMessage("3192 is even");
				} elseif ($number == 3193) {
					$sender->sendMessage("3193 is odd");
				} elseif ($number == 3194) {
					$sender->sendMessage("3194 is even");
				} elseif ($number == 3195) {
					$sender->sendMessage("3195 is odd");
				} elseif ($number == 3196) {
					$sender->sendMessage("3196 is even");
				} elseif ($number == 3197) {
					$sender->sendMessage("3197 is odd");
				} elseif ($number == 3198) {
					$sender->sendMessage("3198 is even");
				} elseif ($number == 3199) {
					$sender->sendMessage("3199 is odd");
				} elseif ($number == 3200) {
					$sender->sendMessage("3200 is even");
				} elseif ($number == 3201) {
					$sender->sendMessage("3201 is odd");
				} elseif ($number == 3202) {
					$sender->sendMessage("3202 is even");
				} elseif ($number == 3203) {
					$sender->sendMessage("3203 is odd");
				} elseif ($number == 3204) {
					$sender->sendMessage("3204 is even");
				} elseif ($number == 3205) {
					$sender->sendMessage("3205 is odd");
				} elseif ($number == 3206) {
					$sender->sendMessage("3206 is even");
				} elseif ($number == 3207) {
					$sender->sendMessage("3207 is odd");
				} elseif ($number == 3208) {
					$sender->sendMessage("3208 is even");
				} elseif ($number == 3209) {
					$sender->sendMessage("3209 is odd");
				} elseif ($number == 3210) {
					$sender->sendMessage("3210 is even");
				} elseif ($number == 3211) {
					$sender->sendMessage("3211 is odd");
				} elseif ($number == 3212) {
					$sender->sendMessage("3212 is even");
				} elseif ($number == 3213) {
					$sender->sendMessage("3213 is odd");
				} elseif ($number == 3214) {
					$sender->sendMessage("3214 is even");
				} elseif ($number == 3215) {
					$sender->sendMessage("3215 is odd");
				} elseif ($number == 3216) {
					$sender->sendMessage("3216 is even");
				} elseif ($number == 3217) {
					$sender->sendMessage("3217 is odd");
				} elseif ($number == 3218) {
					$sender->sendMessage("3218 is even");
				} elseif ($number == 3219) {
					$sender->sendMessage("3219 is odd");
				} elseif ($number == 3220) {
					$sender->sendMessage("3220 is even");
				} elseif ($number == 3221) {
					$sender->sendMessage("3221 is odd");
				} elseif ($number == 3222) {
					$sender->sendMessage("3222 is even");
				} elseif ($number == 3223) {
					$sender->sendMessage("3223 is odd");
				} elseif ($number == 3224) {
					$sender->sendMessage("3224 is even");
				} elseif ($number == 3225) {
					$sender->sendMessage("3225 is odd");
				} elseif ($number == 3226) {
					$sender->sendMessage("3226 is even");
				} elseif ($number == 3227) {
					$sender->sendMessage("3227 is odd");
				} elseif ($number == 3228) {
					$sender->sendMessage("3228 is even");
				} elseif ($number == 3229) {
					$sender->sendMessage("3229 is odd");
				} elseif ($number == 3230) {
					$sender->sendMessage("3230 is even");
				} elseif ($number == 3231) {
					$sender->sendMessage("3231 is odd");
				} elseif ($number == 3232) {
					$sender->sendMessage("3232 is even");
				} elseif ($number == 3233) {
					$sender->sendMessage("3233 is odd");
				} elseif ($number == 3234) {
					$sender->sendMessage("3234 is even");
				} elseif ($number == 3235) {
					$sender->sendMessage("3235 is odd");
				} elseif ($number == 3236) {
					$sender->sendMessage("3236 is even");
				} elseif ($number == 3237) {
					$sender->sendMessage("3237 is odd");
				} elseif ($number == 3238) {
					$sender->sendMessage("3238 is even");
				} elseif ($number == 3239) {
					$sender->sendMessage("3239 is odd");
				} elseif ($number == 3240) {
					$sender->sendMessage("3240 is even");
				} elseif ($number == 3241) {
					$sender->sendMessage("3241 is odd");
				} elseif ($number == 3242) {
					$sender->sendMessage("3242 is even");
				} elseif ($number == 3243) {
					$sender->sendMessage("3243 is odd");
				} elseif ($number == 3244) {
					$sender->sendMessage("3244 is even");
				} elseif ($number == 3245) {
					$sender->sendMessage("3245 is odd");
				} elseif ($number == 3246) {
					$sender->sendMessage("3246 is even");
				} elseif ($number == 3247) {
					$sender->sendMessage("3247 is odd");
				} elseif ($number == 3248) {
					$sender->sendMessage("3248 is even");
				} elseif ($number == 3249) {
					$sender->sendMessage("3249 is odd");
				} elseif ($number == 3250) {
					$sender->sendMessage("3250 is even");
				} elseif ($number == 3251) {
					$sender->sendMessage("3251 is odd");
				} elseif ($number == 3252) {
					$sender->sendMessage("3252 is even");
				} elseif ($number == 3253) {
					$sender->sendMessage("3253 is odd");
				} elseif ($number == 3254) {
					$sender->sendMessage("3254 is even");
				} elseif ($number == 3255) {
					$sender->sendMessage("3255 is odd");
				} elseif ($number == 3256) {
					$sender->sendMessage("3256 is even");
				} elseif ($number == 3257) {
					$sender->sendMessage("3257 is odd");
				} elseif ($number == 3258) {
					$sender->sendMessage("3258 is even");
				} elseif ($number == 3259) {
					$sender->sendMessage("3259 is odd");
				} elseif ($number == 3260) {
					$sender->sendMessage("3260 is even");
				} elseif ($number == 3261) {
					$sender->sendMessage("3261 is odd");
				} elseif ($number == 3262) {
					$sender->sendMessage("3262 is even");
				} elseif ($number == 3263) {
					$sender->sendMessage("3263 is odd");
				} elseif ($number == 3264) {
					$sender->sendMessage("3264 is even");
				} elseif ($number == 3265) {
					$sender->sendMessage("3265 is odd");
				} elseif ($number == 3266) {
					$sender->sendMessage("3266 is even");
				} elseif ($number == 3267) {
					$sender->sendMessage("3267 is odd");
				} elseif ($number == 3268) {
					$sender->sendMessage("3268 is even");
				} elseif ($number == 3269) {
					$sender->sendMessage("3269 is odd");
				} elseif ($number == 3270) {
					$sender->sendMessage("3270 is even");
				} elseif ($number == 3271) {
					$sender->sendMessage("3271 is odd");
				} elseif ($number == 3272) {
					$sender->sendMessage("3272 is even");
				} elseif ($number == 3273) {
					$sender->sendMessage("3273 is odd");
				} elseif ($number == 3274) {
					$sender->sendMessage("3274 is even");
				} elseif ($number == 3275) {
					$sender->sendMessage("3275 is odd");
				} elseif ($number == 3276) {
					$sender->sendMessage("3276 is even");
				} elseif ($number == 3277) {
					$sender->sendMessage("3277 is odd");
				} elseif ($number == 3278) {
					$sender->sendMessage("3278 is even");
				} elseif ($number == 3279) {
					$sender->sendMessage("3279 is odd");
				} elseif ($number == 3280) {
					$sender->sendMessage("3280 is even");
				} elseif ($number == 3281) {
					$sender->sendMessage("3281 is odd");
				} elseif ($number == 3282) {
					$sender->sendMessage("3282 is even");
				} elseif ($number == 3283) {
					$sender->sendMessage("3283 is odd");
				} elseif ($number == 3284) {
					$sender->sendMessage("3284 is even");
				} elseif ($number == 3285) {
					$sender->sendMessage("3285 is odd");
				} elseif ($number == 3286) {
					$sender->sendMessage("3286 is even");
				} elseif ($number == 3287) {
					$sender->sendMessage("3287 is odd");
				} elseif ($number == 3288) {
					$sender->sendMessage("3288 is even");
				} elseif ($number == 3289) {
					$sender->sendMessage("3289 is odd");
				} elseif ($number == 3290) {
					$sender->sendMessage("3290 is even");
				} elseif ($number == 3291) {
					$sender->sendMessage("3291 is odd");
				} elseif ($number == 3292) {
					$sender->sendMessage("3292 is even");
				} elseif ($number == 3293) {
					$sender->sendMessage("3293 is odd");
				} elseif ($number == 3294) {
					$sender->sendMessage("3294 is even");
				} elseif ($number == 3295) {
					$sender->sendMessage("3295 is odd");
				} elseif ($number == 3296) {
					$sender->sendMessage("3296 is even");
				} elseif ($number == 3297) {
					$sender->sendMessage("3297 is odd");
				} elseif ($number == 3298) {
					$sender->sendMessage("3298 is even");
				} elseif ($number == 3299) {
					$sender->sendMessage("3299 is odd");
				} elseif ($number == 3300) {
					$sender->sendMessage("3300 is even");
				} elseif ($number == 3301) {
					$sender->sendMessage("3301 is odd");
				} elseif ($number == 3302) {
					$sender->sendMessage("3302 is even");
				} elseif ($number == 3303) {
					$sender->sendMessage("3303 is odd");
				} elseif ($number == 3304) {
					$sender->sendMessage("3304 is even");
				} elseif ($number == 3305) {
					$sender->sendMessage("3305 is odd");
				} elseif ($number == 3306) {
					$sender->sendMessage("3306 is even");
				} elseif ($number == 3307) {
					$sender->sendMessage("3307 is odd");
				} elseif ($number == 3308) {
					$sender->sendMessage("3308 is even");
				} elseif ($number == 3309) {
					$sender->sendMessage("3309 is odd");
				} elseif ($number == 3310) {
					$sender->sendMessage("3310 is even");
				} elseif ($number == 3311) {
					$sender->sendMessage("3311 is odd");
				} elseif ($number == 3312) {
					$sender->sendMessage("3312 is even");
				} elseif ($number == 3313) {
					$sender->sendMessage("3313 is odd");
				} elseif ($number == 3314) {
					$sender->sendMessage("3314 is even");
				} elseif ($number == 3315) {
					$sender->sendMessage("3315 is odd");
				} elseif ($number == 3316) {
					$sender->sendMessage("3316 is even");
				} elseif ($number == 3317) {
					$sender->sendMessage("3317 is odd");
				} elseif ($number == 3318) {
					$sender->sendMessage("3318 is even");
				} elseif ($number == 3319) {
					$sender->sendMessage("3319 is odd");
				} elseif ($number == 3320) {
					$sender->sendMessage("3320 is even");
				} elseif ($number == 3321) {
					$sender->sendMessage("3321 is odd");
				} elseif ($number == 3322) {
					$sender->sendMessage("3322 is even");
				} elseif ($number == 3323) {
					$sender->sendMessage("3323 is odd");
				} elseif ($number == 3324) {
					$sender->sendMessage("3324 is even");
				} elseif ($number == 3325) {
					$sender->sendMessage("3325 is odd");
				} elseif ($number == 3326) {
					$sender->sendMessage("3326 is even");
				} elseif ($number == 3327) {
					$sender->sendMessage("3327 is odd");
				} elseif ($number == 3328) {
					$sender->sendMessage("3328 is even");
				} elseif ($number == 3329) {
					$sender->sendMessage("3329 is odd");
				} elseif ($number == 3330) {
					$sender->sendMessage("3330 is even");
				} elseif ($number == 3331) {
					$sender->sendMessage("3331 is odd");
				} elseif ($number == 3332) {
					$sender->sendMessage("3332 is even");
				} elseif ($number == 3333) {
					$sender->sendMessage("3333 is odd");
				} elseif ($number == 3334) {
					$sender->sendMessage("3334 is even");
				} elseif ($number == 3335) {
					$sender->sendMessage("3335 is odd");
				} elseif ($number == 3336) {
					$sender->sendMessage("3336 is even");
				} elseif ($number == 3337) {
					$sender->sendMessage("3337 is odd");
				} elseif ($number == 3338) {
					$sender->sendMessage("3338 is even");
				} elseif ($number == 3339) {
					$sender->sendMessage("3339 is odd");
				} elseif ($number == 3340) {
					$sender->sendMessage("3340 is even");
				} elseif ($number == 3341) {
					$sender->sendMessage("3341 is odd");
				} elseif ($number == 3342) {
					$sender->sendMessage("3342 is even");
				} elseif ($number == 3343) {
					$sender->sendMessage("3343 is odd");
				} elseif ($number == 3344) {
					$sender->sendMessage("3344 is even");
				} elseif ($number == 3345) {
					$sender->sendMessage("3345 is odd");
				} elseif ($number == 3346) {
					$sender->sendMessage("3346 is even");
				} elseif ($number == 3347) {
					$sender->sendMessage("3347 is odd");
				} elseif ($number == 3348) {
					$sender->sendMessage("3348 is even");
				} elseif ($number == 3349) {
					$sender->sendMessage("3349 is odd");
				} elseif ($number == 3350) {
					$sender->sendMessage("3350 is even");
				} elseif ($number == 3351) {
					$sender->sendMessage("3351 is odd");
				} elseif ($number == 3352) {
					$sender->sendMessage("3352 is even");
				} elseif ($number == 3353) {
					$sender->sendMessage("3353 is odd");
				} elseif ($number == 3354) {
					$sender->sendMessage("3354 is even");
				} elseif ($number == 3355) {
					$sender->sendMessage("3355 is odd");
				} elseif ($number == 3356) {
					$sender->sendMessage("3356 is even");
				} elseif ($number == 3357) {
					$sender->sendMessage("3357 is odd");
				} elseif ($number == 3358) {
					$sender->sendMessage("3358 is even");
				} elseif ($number == 3359) {
					$sender->sendMessage("3359 is odd");
				} elseif ($number == 3360) {
					$sender->sendMessage("3360 is even");
				} elseif ($number == 3361) {
					$sender->sendMessage("3361 is odd");
				} elseif ($number == 3362) {
					$sender->sendMessage("3362 is even");
				} elseif ($number == 3363) {
					$sender->sendMessage("3363 is odd");
				} elseif ($number == 3364) {
					$sender->sendMessage("3364 is even");
				} elseif ($number == 3365) {
					$sender->sendMessage("3365 is odd");
				} elseif ($number == 3366) {
					$sender->sendMessage("3366 is even");
				} elseif ($number == 3367) {
					$sender->sendMessage("3367 is odd");
				} elseif ($number == 3368) {
					$sender->sendMessage("3368 is even");
				} elseif ($number == 3369) {
					$sender->sendMessage("3369 is odd");
				} elseif ($number == 3370) {
					$sender->sendMessage("3370 is even");
				} elseif ($number == 3371) {
					$sender->sendMessage("3371 is odd");
				} elseif ($number == 3372) {
					$sender->sendMessage("3372 is even");
				} elseif ($number == 3373) {
					$sender->sendMessage("3373 is odd");
				} elseif ($number == 3374) {
					$sender->sendMessage("3374 is even");
				} elseif ($number == 3375) {
					$sender->sendMessage("3375 is odd");
				} elseif ($number == 3376) {
					$sender->sendMessage("3376 is even");
				} elseif ($number == 3377) {
					$sender->sendMessage("3377 is odd");
				} elseif ($number == 3378) {
					$sender->sendMessage("3378 is even");
				} elseif ($number == 3379) {
					$sender->sendMessage("3379 is odd");
				} elseif ($number == 3380) {
					$sender->sendMessage("3380 is even");
				} elseif ($number == 3381) {
					$sender->sendMessage("3381 is odd");
				} elseif ($number == 3382) {
					$sender->sendMessage("3382 is even");
				} elseif ($number == 3383) {
					$sender->sendMessage("3383 is odd");
				} elseif ($number == 3384) {
					$sender->sendMessage("3384 is even");
				} elseif ($number == 3385) {
					$sender->sendMessage("3385 is odd");
				} elseif ($number == 3386) {
					$sender->sendMessage("3386 is even");
				} elseif ($number == 3387) {
					$sender->sendMessage("3387 is odd");
				} elseif ($number == 3388) {
					$sender->sendMessage("3388 is even");
				} elseif ($number == 3389) {
					$sender->sendMessage("3389 is odd");
				} elseif ($number == 3390) {
					$sender->sendMessage("3390 is even");
				} elseif ($number == 3391) {
					$sender->sendMessage("3391 is odd");
				} elseif ($number == 3392) {
					$sender->sendMessage("3392 is even");
				} elseif ($number == 3393) {
					$sender->sendMessage("3393 is odd");
				} elseif ($number == 3394) {
					$sender->sendMessage("3394 is even");
				} elseif ($number == 3395) {
					$sender->sendMessage("3395 is odd");
				} elseif ($number == 3396) {
					$sender->sendMessage("3396 is even");
				} elseif ($number == 3397) {
					$sender->sendMessage("3397 is odd");
				} elseif ($number == 3398) {
					$sender->sendMessage("3398 is even");
				} elseif ($number == 3399) {
					$sender->sendMessage("3399 is odd");
				} elseif ($number == 3400) {
					$sender->sendMessage("3400 is even");
				} elseif ($number == 3401) {
					$sender->sendMessage("3401 is odd");
				} elseif ($number == 3402) {
					$sender->sendMessage("3402 is even");
				} elseif ($number == 3403) {
					$sender->sendMessage("3403 is odd");
				} elseif ($number == 3404) {
					$sender->sendMessage("3404 is even");
				} elseif ($number == 3405) {
					$sender->sendMessage("3405 is odd");
				} elseif ($number == 3406) {
					$sender->sendMessage("3406 is even");
				} elseif ($number == 3407) {
					$sender->sendMessage("3407 is odd");
				} elseif ($number == 3408) {
					$sender->sendMessage("3408 is even");
				} elseif ($number == 3409) {
					$sender->sendMessage("3409 is odd");
				} elseif ($number == 3410) {
					$sender->sendMessage("3410 is even");
				} elseif ($number == 3411) {
					$sender->sendMessage("3411 is odd");
				} elseif ($number == 3412) {
					$sender->sendMessage("3412 is even");
				} elseif ($number == 3413) {
					$sender->sendMessage("3413 is odd");
				} elseif ($number == 3414) {
					$sender->sendMessage("3414 is even");
				} elseif ($number == 3415) {
					$sender->sendMessage("3415 is odd");
				} elseif ($number == 3416) {
					$sender->sendMessage("3416 is even");
				} elseif ($number == 3417) {
					$sender->sendMessage("3417 is odd");
				} elseif ($number == 3418) {
					$sender->sendMessage("3418 is even");
				} elseif ($number == 3419) {
					$sender->sendMessage("3419 is odd");
				} elseif ($number == 3420) {
					$sender->sendMessage("3420 is even");
				} elseif ($number == 3421) {
					$sender->sendMessage("3421 is odd");
				} elseif ($number == 3422) {
					$sender->sendMessage("3422 is even");
				} elseif ($number == 3423) {
					$sender->sendMessage("3423 is odd");
				} elseif ($number == 3424) {
					$sender->sendMessage("3424 is even");
				} elseif ($number == 3425) {
					$sender->sendMessage("3425 is odd");
				} elseif ($number == 3426) {
					$sender->sendMessage("3426 is even");
				} elseif ($number == 3427) {
					$sender->sendMessage("3427 is odd");
				} elseif ($number == 3428) {
					$sender->sendMessage("3428 is even");
				} elseif ($number == 3429) {
					$sender->sendMessage("3429 is odd");
				} elseif ($number == 3430) {
					$sender->sendMessage("3430 is even");
				} elseif ($number == 3431) {
					$sender->sendMessage("3431 is odd");
				} elseif ($number == 3432) {
					$sender->sendMessage("3432 is even");
				} elseif ($number == 3433) {
					$sender->sendMessage("3433 is odd");
				} elseif ($number == 3434) {
					$sender->sendMessage("3434 is even");
				} elseif ($number == 3435) {
					$sender->sendMessage("3435 is odd");
				} elseif ($number == 3436) {
					$sender->sendMessage("3436 is even");
				} elseif ($number == 3437) {
					$sender->sendMessage("3437 is odd");
				} elseif ($number == 3438) {
					$sender->sendMessage("3438 is even");
				} elseif ($number == 3439) {
					$sender->sendMessage("3439 is odd");
				} elseif ($number == 3440) {
					$sender->sendMessage("3440 is even");
				} elseif ($number == 3441) {
					$sender->sendMessage("3441 is odd");
				} elseif ($number == 3442) {
					$sender->sendMessage("3442 is even");
				} elseif ($number == 3443) {
					$sender->sendMessage("3443 is odd");
				} elseif ($number == 3444) {
					$sender->sendMessage("3444 is even");
				} elseif ($number == 3445) {
					$sender->sendMessage("3445 is odd");
				} elseif ($number == 3446) {
					$sender->sendMessage("3446 is even");
				} elseif ($number == 3447) {
					$sender->sendMessage("3447 is odd");
				} elseif ($number == 3448) {
					$sender->sendMessage("3448 is even");
				} elseif ($number == 3449) {
					$sender->sendMessage("3449 is odd");
				} elseif ($number == 3450) {
					$sender->sendMessage("3450 is even");
				} elseif ($number == 3451) {
					$sender->sendMessage("3451 is odd");
				} elseif ($number == 3452) {
					$sender->sendMessage("3452 is even");
				} elseif ($number == 3453) {
					$sender->sendMessage("3453 is odd");
				} elseif ($number == 3454) {
					$sender->sendMessage("3454 is even");
				} elseif ($number == 3455) {
					$sender->sendMessage("3455 is odd");
				} elseif ($number == 3456) {
					$sender->sendMessage("3456 is even");
				} elseif ($number == 3457) {
					$sender->sendMessage("3457 is odd");
				} elseif ($number == 3458) {
					$sender->sendMessage("3458 is even");
				} elseif ($number == 3459) {
					$sender->sendMessage("3459 is odd");
				} elseif ($number == 3460) {
					$sender->sendMessage("3460 is even");
				} elseif ($number == 3461) {
					$sender->sendMessage("3461 is odd");
				} elseif ($number == 3462) {
					$sender->sendMessage("3462 is even");
				} elseif ($number == 3463) {
					$sender->sendMessage("3463 is odd");
				} elseif ($number == 3464) {
					$sender->sendMessage("3464 is even");
				} elseif ($number == 3465) {
					$sender->sendMessage("3465 is odd");
				} elseif ($number == 3466) {
					$sender->sendMessage("3466 is even");
				} elseif ($number == 3467) {
					$sender->sendMessage("3467 is odd");
				} elseif ($number == 3468) {
					$sender->sendMessage("3468 is even");
				} elseif ($number == 3469) {
					$sender->sendMessage("3469 is odd");
				} elseif ($number == 3470) {
					$sender->sendMessage("3470 is even");
				} elseif ($number == 3471) {
					$sender->sendMessage("3471 is odd");
				} elseif ($number == 3472) {
					$sender->sendMessage("3472 is even");
				} elseif ($number == 3473) {
					$sender->sendMessage("3473 is odd");
				} elseif ($number == 3474) {
					$sender->sendMessage("3474 is even");
				} elseif ($number == 3475) {
					$sender->sendMessage("3475 is odd");
				} elseif ($number == 3476) {
					$sender->sendMessage("3476 is even");
				} elseif ($number == 3477) {
					$sender->sendMessage("3477 is odd");
				} elseif ($number == 3478) {
					$sender->sendMessage("3478 is even");
				} elseif ($number == 3479) {
					$sender->sendMessage("3479 is odd");
				} elseif ($number == 3480) {
					$sender->sendMessage("3480 is even");
				} elseif ($number == 3481) {
					$sender->sendMessage("3481 is odd");
				} elseif ($number == 3482) {
					$sender->sendMessage("3482 is even");
				} elseif ($number == 3483) {
					$sender->sendMessage("3483 is odd");
				} elseif ($number == 3484) {
					$sender->sendMessage("3484 is even");
				} elseif ($number == 3485) {
					$sender->sendMessage("3485 is odd");
				} elseif ($number == 3486) {
					$sender->sendMessage("3486 is even");
				} elseif ($number == 3487) {
					$sender->sendMessage("3487 is odd");
				} elseif ($number == 3488) {
					$sender->sendMessage("3488 is even");
				} elseif ($number == 3489) {
					$sender->sendMessage("3489 is odd");
				} elseif ($number == 3490) {
					$sender->sendMessage("3490 is even");
				} elseif ($number == 3491) {
					$sender->sendMessage("3491 is odd");
				} elseif ($number == 3492) {
					$sender->sendMessage("3492 is even");
				} elseif ($number == 3493) {
					$sender->sendMessage("3493 is odd");
				} elseif ($number == 3494) {
					$sender->sendMessage("3494 is even");
				} elseif ($number == 3495) {
					$sender->sendMessage("3495 is odd");
				} elseif ($number == 3496) {
					$sender->sendMessage("3496 is even");
				} elseif ($number == 3497) {
					$sender->sendMessage("3497 is odd");
				} elseif ($number == 3498) {
					$sender->sendMessage("3498 is even");
				} elseif ($number == 3499) {
					$sender->sendMessage("3499 is odd");
				} elseif ($number == 3500) {
					$sender->sendMessage("3500 is even");
				} elseif ($number == 3501) {
					$sender->sendMessage("3501 is odd");
				} elseif ($number == 3502) {
					$sender->sendMessage("3502 is even");
				} elseif ($number == 3503) {
					$sender->sendMessage("3503 is odd");
				} elseif ($number == 3504) {
					$sender->sendMessage("3504 is even");
				} elseif ($number == 3505) {
					$sender->sendMessage("3505 is odd");
				} elseif ($number == 3506) {
					$sender->sendMessage("3506 is even");
				} elseif ($number == 3507) {
					$sender->sendMessage("3507 is odd");
				} elseif ($number == 3508) {
					$sender->sendMessage("3508 is even");
				} elseif ($number == 3509) {
					$sender->sendMessage("3509 is odd");
				} elseif ($number == 3510) {
					$sender->sendMessage("3510 is even");
				} elseif ($number == 3511) {
					$sender->sendMessage("3511 is odd");
				} elseif ($number == 3512) {
					$sender->sendMessage("3512 is even");
				} elseif ($number == 3513) {
					$sender->sendMessage("3513 is odd");
				} elseif ($number == 3514) {
					$sender->sendMessage("3514 is even");
				} elseif ($number == 3515) {
					$sender->sendMessage("3515 is odd");
				} elseif ($number == 3516) {
					$sender->sendMessage("3516 is even");
				} elseif ($number == 3517) {
					$sender->sendMessage("3517 is odd");
				} elseif ($number == 3518) {
					$sender->sendMessage("3518 is even");
				} elseif ($number == 3519) {
					$sender->sendMessage("3519 is odd");
				} elseif ($number == 3520) {
					$sender->sendMessage("3520 is even");
				} elseif ($number == 3521) {
					$sender->sendMessage("3521 is odd");
				} elseif ($number == 3522) {
					$sender->sendMessage("3522 is even");
				} elseif ($number == 3523) {
					$sender->sendMessage("3523 is odd");
				} elseif ($number == 3524) {
					$sender->sendMessage("3524 is even");
				} elseif ($number == 3525) {
					$sender->sendMessage("3525 is odd");
				} elseif ($number == 3526) {
					$sender->sendMessage("3526 is even");
				} elseif ($number == 3527) {
					$sender->sendMessage("3527 is odd");
				} elseif ($number == 3528) {
					$sender->sendMessage("3528 is even");
				} elseif ($number == 3529) {
					$sender->sendMessage("3529 is odd");
				} elseif ($number == 3530) {
					$sender->sendMessage("3530 is even");
				} elseif ($number == 3531) {
					$sender->sendMessage("3531 is odd");
				} elseif ($number == 3532) {
					$sender->sendMessage("3532 is even");
				} elseif ($number == 3533) {
					$sender->sendMessage("3533 is odd");
				} elseif ($number == 3534) {
					$sender->sendMessage("3534 is even");
				} elseif ($number == 3535) {
					$sender->sendMessage("3535 is odd");
				} elseif ($number == 3536) {
					$sender->sendMessage("3536 is even");
				} elseif ($number == 3537) {
					$sender->sendMessage("3537 is odd");
				} elseif ($number == 3538) {
					$sender->sendMessage("3538 is even");
				} elseif ($number == 3539) {
					$sender->sendMessage("3539 is odd");
				} elseif ($number == 3540) {
					$sender->sendMessage("3540 is even");
				} elseif ($number == 3541) {
					$sender->sendMessage("3541 is odd");
				} elseif ($number == 3542) {
					$sender->sendMessage("3542 is even");
				} elseif ($number == 3543) {
					$sender->sendMessage("3543 is odd");
				} elseif ($number == 3544) {
					$sender->sendMessage("3544 is even");
				} elseif ($number == 3545) {
					$sender->sendMessage("3545 is odd");
				} elseif ($number == 3546) {
					$sender->sendMessage("3546 is even");
				} elseif ($number == 3547) {
					$sender->sendMessage("3547 is odd");
				} elseif ($number == 3548) {
					$sender->sendMessage("3548 is even");
				} elseif ($number == 3549) {
					$sender->sendMessage("3549 is odd");
				} elseif ($number == 3550) {
					$sender->sendMessage("3550 is even");
				} elseif ($number == 3551) {
					$sender->sendMessage("3551 is odd");
				} elseif ($number == 3552) {
					$sender->sendMessage("3552 is even");
				} elseif ($number == 3553) {
					$sender->sendMessage("3553 is odd");
				} elseif ($number == 3554) {
					$sender->sendMessage("3554 is even");
				} elseif ($number == 3555) {
					$sender->sendMessage("3555 is odd");
				} elseif ($number == 3556) {
					$sender->sendMessage("3556 is even");
				} elseif ($number == 3557) {
					$sender->sendMessage("3557 is odd");
				} elseif ($number == 3558) {
					$sender->sendMessage("3558 is even");
				} elseif ($number == 3559) {
					$sender->sendMessage("3559 is odd");
				} elseif ($number == 3560) {
					$sender->sendMessage("3560 is even");
				} elseif ($number == 3561) {
					$sender->sendMessage("3561 is odd");
				} elseif ($number == 3562) {
					$sender->sendMessage("3562 is even");
				} elseif ($number == 3563) {
					$sender->sendMessage("3563 is odd");
				} elseif ($number == 3564) {
					$sender->sendMessage("3564 is even");
				} elseif ($number == 3565) {
					$sender->sendMessage("3565 is odd");
				} elseif ($number == 3566) {
					$sender->sendMessage("3566 is even");
				} elseif ($number == 3567) {
					$sender->sendMessage("3567 is odd");
				} elseif ($number == 3568) {
					$sender->sendMessage("3568 is even");
				} elseif ($number == 3569) {
					$sender->sendMessage("3569 is odd");
				} elseif ($number == 3570) {
					$sender->sendMessage("3570 is even");
				} elseif ($number == 3571) {
					$sender->sendMessage("3571 is odd");
				} elseif ($number == 3572) {
					$sender->sendMessage("3572 is even");
				} elseif ($number == 3573) {
					$sender->sendMessage("3573 is odd");
				} elseif ($number == 3574) {
					$sender->sendMessage("3574 is even");
				} elseif ($number == 3575) {
					$sender->sendMessage("3575 is odd");
				} elseif ($number == 3576) {
					$sender->sendMessage("3576 is even");
				} elseif ($number == 3577) {
					$sender->sendMessage("3577 is odd");
				} elseif ($number == 3578) {
					$sender->sendMessage("3578 is even");
				} elseif ($number == 3579) {
					$sender->sendMessage("3579 is odd");
				} elseif ($number == 3580) {
					$sender->sendMessage("3580 is even");
				} elseif ($number == 3581) {
					$sender->sendMessage("3581 is odd");
				} elseif ($number == 3582) {
					$sender->sendMessage("3582 is even");
				} elseif ($number == 3583) {
					$sender->sendMessage("3583 is odd");
				} elseif ($number == 3584) {
					$sender->sendMessage("3584 is even");
				} elseif ($number == 3585) {
					$sender->sendMessage("3585 is odd");
				} elseif ($number == 3586) {
					$sender->sendMessage("3586 is even");
				} elseif ($number == 3587) {
					$sender->sendMessage("3587 is odd");
				} elseif ($number == 3588) {
					$sender->sendMessage("3588 is even");
				} elseif ($number == 3589) {
					$sender->sendMessage("3589 is odd");
				} elseif ($number == 3590) {
					$sender->sendMessage("3590 is even");
				} elseif ($number == 3591) {
					$sender->sendMessage("3591 is odd");
				} elseif ($number == 3592) {
					$sender->sendMessage("3592 is even");
				} elseif ($number == 3593) {
					$sender->sendMessage("3593 is odd");
				} elseif ($number == 3594) {
					$sender->sendMessage("3594 is even");
				} elseif ($number == 3595) {
					$sender->sendMessage("3595 is odd");
				} elseif ($number == 3596) {
					$sender->sendMessage("3596 is even");
				} elseif ($number == 3597) {
					$sender->sendMessage("3597 is odd");
				} elseif ($number == 3598) {
					$sender->sendMessage("3598 is even");
				} elseif ($number == 3599) {
					$sender->sendMessage("3599 is odd");
				} elseif ($number == 3600) {
					$sender->sendMessage("3600 is even");
				} elseif ($number == 3601) {
					$sender->sendMessage("3601 is odd");
				} elseif ($number == 3602) {
					$sender->sendMessage("3602 is even");
				} elseif ($number == 3603) {
					$sender->sendMessage("3603 is odd");
				} elseif ($number == 3604) {
					$sender->sendMessage("3604 is even");
				} elseif ($number == 3605) {
					$sender->sendMessage("3605 is odd");
				} elseif ($number == 3606) {
					$sender->sendMessage("3606 is even");
				} elseif ($number == 3607) {
					$sender->sendMessage("3607 is odd");
				} elseif ($number == 3608) {
					$sender->sendMessage("3608 is even");
				} elseif ($number == 3609) {
					$sender->sendMessage("3609 is odd");
				} elseif ($number == 3610) {
					$sender->sendMessage("3610 is even");
				} elseif ($number == 3611) {
					$sender->sendMessage("3611 is odd");
				} elseif ($number == 3612) {
					$sender->sendMessage("3612 is even");
				} elseif ($number == 3613) {
					$sender->sendMessage("3613 is odd");
				} elseif ($number == 3614) {
					$sender->sendMessage("3614 is even");
				} elseif ($number == 3615) {
					$sender->sendMessage("3615 is odd");
				} elseif ($number == 3616) {
					$sender->sendMessage("3616 is even");
				} elseif ($number == 3617) {
					$sender->sendMessage("3617 is odd");
				} elseif ($number == 3618) {
					$sender->sendMessage("3618 is even");
				} elseif ($number == 3619) {
					$sender->sendMessage("3619 is odd");
				} elseif ($number == 3620) {
					$sender->sendMessage("3620 is even");
				} elseif ($number == 3621) {
					$sender->sendMessage("3621 is odd");
				} elseif ($number == 3622) {
					$sender->sendMessage("3622 is even");
				} elseif ($number == 3623) {
					$sender->sendMessage("3623 is odd");
				} elseif ($number == 3624) {
					$sender->sendMessage("3624 is even");
				} elseif ($number == 3625) {
					$sender->sendMessage("3625 is odd");
				} elseif ($number == 3626) {
					$sender->sendMessage("3626 is even");
				} elseif ($number == 3627) {
					$sender->sendMessage("3627 is odd");
				} elseif ($number == 3628) {
					$sender->sendMessage("3628 is even");
				} elseif ($number == 3629) {
					$sender->sendMessage("3629 is odd");
				} elseif ($number == 3630) {
					$sender->sendMessage("3630 is even");
				} elseif ($number == 3631) {
					$sender->sendMessage("3631 is odd");
				} elseif ($number == 3632) {
					$sender->sendMessage("3632 is even");
				} elseif ($number == 3633) {
					$sender->sendMessage("3633 is odd");
				} elseif ($number == 3634) {
					$sender->sendMessage("3634 is even");
				} elseif ($number == 3635) {
					$sender->sendMessage("3635 is odd");
				} elseif ($number == 3636) {
					$sender->sendMessage("3636 is even");
				} elseif ($number == 3637) {
					$sender->sendMessage("3637 is odd");
				} elseif ($number == 3638) {
					$sender->sendMessage("3638 is even");
				} elseif ($number == 3639) {
					$sender->sendMessage("3639 is odd");
				} elseif ($number == 3640) {
					$sender->sendMessage("3640 is even");
				} elseif ($number == 3641) {
					$sender->sendMessage("3641 is odd");
				} elseif ($number == 3642) {
					$sender->sendMessage("3642 is even");
				} elseif ($number == 3643) {
					$sender->sendMessage("3643 is odd");
				} elseif ($number == 3644) {
					$sender->sendMessage("3644 is even");
				} elseif ($number == 3645) {
					$sender->sendMessage("3645 is odd");
				} elseif ($number == 3646) {
					$sender->sendMessage("3646 is even");
				} elseif ($number == 3647) {
					$sender->sendMessage("3647 is odd");
				} elseif ($number == 3648) {
					$sender->sendMessage("3648 is even");
				} elseif ($number == 3649) {
					$sender->sendMessage("3649 is odd");
				} elseif ($number == 3650) {
					$sender->sendMessage("3650 is even");
				} elseif ($number == 3651) {
					$sender->sendMessage("3651 is odd");
				} elseif ($number == 3652) {
					$sender->sendMessage("3652 is even");
				} elseif ($number == 3653) {
					$sender->sendMessage("3653 is odd");
				} elseif ($number == 3654) {
					$sender->sendMessage("3654 is even");
				} elseif ($number == 3655) {
					$sender->sendMessage("3655 is odd");
				} elseif ($number == 3656) {
					$sender->sendMessage("3656 is even");
				} elseif ($number == 3657) {
					$sender->sendMessage("3657 is odd");
				} elseif ($number == 3658) {
					$sender->sendMessage("3658 is even");
				} elseif ($number == 3659) {
					$sender->sendMessage("3659 is odd");
				} elseif ($number == 3660) {
					$sender->sendMessage("3660 is even");
				} elseif ($number == 3661) {
					$sender->sendMessage("3661 is odd");
				} elseif ($number == 3662) {
					$sender->sendMessage("3662 is even");
				} elseif ($number == 3663) {
					$sender->sendMessage("3663 is odd");
				} elseif ($number == 3664) {
					$sender->sendMessage("3664 is even");
				} elseif ($number == 3665) {
					$sender->sendMessage("3665 is odd");
				} elseif ($number == 3666) {
					$sender->sendMessage("3666 is even");
				} elseif ($number == 3667) {
					$sender->sendMessage("3667 is odd");
				} elseif ($number == 3668) {
					$sender->sendMessage("3668 is even");
				} elseif ($number == 3669) {
					$sender->sendMessage("3669 is odd");
				} elseif ($number == 3670) {
					$sender->sendMessage("3670 is even");
				} elseif ($number == 3671) {
					$sender->sendMessage("3671 is odd");
				} elseif ($number == 3672) {
					$sender->sendMessage("3672 is even");
				} elseif ($number == 3673) {
					$sender->sendMessage("3673 is odd");
				} elseif ($number == 3674) {
					$sender->sendMessage("3674 is even");
				} elseif ($number == 3675) {
					$sender->sendMessage("3675 is odd");
				} elseif ($number == 3676) {
					$sender->sendMessage("3676 is even");
				} elseif ($number == 3677) {
					$sender->sendMessage("3677 is odd");
				} elseif ($number == 3678) {
					$sender->sendMessage("3678 is even");
				} elseif ($number == 3679) {
					$sender->sendMessage("3679 is odd");
				} elseif ($number == 3680) {
					$sender->sendMessage("3680 is even");
				} elseif ($number == 3681) {
					$sender->sendMessage("3681 is odd");
				} elseif ($number == 3682) {
					$sender->sendMessage("3682 is even");
				} elseif ($number == 3683) {
					$sender->sendMessage("3683 is odd");
				} elseif ($number == 3684) {
					$sender->sendMessage("3684 is even");
				} elseif ($number == 3685) {
					$sender->sendMessage("3685 is odd");
				} elseif ($number == 3686) {
					$sender->sendMessage("3686 is even");
				} elseif ($number == 3687) {
					$sender->sendMessage("3687 is odd");
				} elseif ($number == 3688) {
					$sender->sendMessage("3688 is even");
				} elseif ($number == 3689) {
					$sender->sendMessage("3689 is odd");
				} elseif ($number == 3690) {
					$sender->sendMessage("3690 is even");
				} elseif ($number == 3691) {
					$sender->sendMessage("3691 is odd");
				} elseif ($number == 3692) {
					$sender->sendMessage("3692 is even");
				} elseif ($number == 3693) {
					$sender->sendMessage("3693 is odd");
				} elseif ($number == 3694) {
					$sender->sendMessage("3694 is even");
				} elseif ($number == 3695) {
					$sender->sendMessage("3695 is odd");
				} elseif ($number == 3696) {
					$sender->sendMessage("3696 is even");
				} elseif ($number == 3697) {
					$sender->sendMessage("3697 is odd");
				} elseif ($number == 3698) {
					$sender->sendMessage("3698 is even");
				} elseif ($number == 3699) {
					$sender->sendMessage("3699 is odd");
				} elseif ($number == 3700) {
					$sender->sendMessage("3700 is even");
				} elseif ($number == 3701) {
					$sender->sendMessage("3701 is odd");
				} elseif ($number == 3702) {
					$sender->sendMessage("3702 is even");
				} elseif ($number == 3703) {
					$sender->sendMessage("3703 is odd");
				} elseif ($number == 3704) {
					$sender->sendMessage("3704 is even");
				} elseif ($number == 3705) {
					$sender->sendMessage("3705 is odd");
				} elseif ($number == 3706) {
					$sender->sendMessage("3706 is even");
				} elseif ($number == 3707) {
					$sender->sendMessage("3707 is odd");
				} elseif ($number == 3708) {
					$sender->sendMessage("3708 is even");
				} elseif ($number == 3709) {
					$sender->sendMessage("3709 is odd");
				} elseif ($number == 3710) {
					$sender->sendMessage("3710 is even");
				} elseif ($number == 3711) {
					$sender->sendMessage("3711 is odd");
				} elseif ($number == 3712) {
					$sender->sendMessage("3712 is even");
				} elseif ($number == 3713) {
					$sender->sendMessage("3713 is odd");
				} elseif ($number == 3714) {
					$sender->sendMessage("3714 is even");
				} elseif ($number == 3715) {
					$sender->sendMessage("3715 is odd");
				} elseif ($number == 3716) {
					$sender->sendMessage("3716 is even");
				} elseif ($number == 3717) {
					$sender->sendMessage("3717 is odd");
				} elseif ($number == 3718) {
					$sender->sendMessage("3718 is even");
				} elseif ($number == 3719) {
					$sender->sendMessage("3719 is odd");
				} elseif ($number == 3720) {
					$sender->sendMessage("3720 is even");
				} elseif ($number == 3721) {
					$sender->sendMessage("3721 is odd");
				} elseif ($number == 3722) {
					$sender->sendMessage("3722 is even");
				} elseif ($number == 3723) {
					$sender->sendMessage("3723 is odd");
				} elseif ($number == 3724) {
					$sender->sendMessage("3724 is even");
				} elseif ($number == 3725) {
					$sender->sendMessage("3725 is odd");
				} elseif ($number == 3726) {
					$sender->sendMessage("3726 is even");
				} elseif ($number == 3727) {
					$sender->sendMessage("3727 is odd");
				} elseif ($number == 3728) {
					$sender->sendMessage("3728 is even");
				} elseif ($number == 3729) {
					$sender->sendMessage("3729 is odd");
				} elseif ($number == 3730) {
					$sender->sendMessage("3730 is even");
				} elseif ($number == 3731) {
					$sender->sendMessage("3731 is odd");
				} elseif ($number == 3732) {
					$sender->sendMessage("3732 is even");
				} elseif ($number == 3733) {
					$sender->sendMessage("3733 is odd");
				} elseif ($number == 3734) {
					$sender->sendMessage("3734 is even");
				} elseif ($number == 3735) {
					$sender->sendMessage("3735 is odd");
				} elseif ($number == 3736) {
					$sender->sendMessage("3736 is even");
				} elseif ($number == 3737) {
					$sender->sendMessage("3737 is odd");
				} elseif ($number == 3738) {
					$sender->sendMessage("3738 is even");
				} elseif ($number == 3739) {
					$sender->sendMessage("3739 is odd");
				} elseif ($number == 3740) {
					$sender->sendMessage("3740 is even");
				} elseif ($number == 3741) {
					$sender->sendMessage("3741 is odd");
				} elseif ($number == 3742) {
					$sender->sendMessage("3742 is even");
				} elseif ($number == 3743) {
					$sender->sendMessage("3743 is odd");
				} elseif ($number == 3744) {
					$sender->sendMessage("3744 is even");
				} elseif ($number == 3745) {
					$sender->sendMessage("3745 is odd");
				} elseif ($number == 3746) {
					$sender->sendMessage("3746 is even");
				} elseif ($number == 3747) {
					$sender->sendMessage("3747 is odd");
				} elseif ($number == 3748) {
					$sender->sendMessage("3748 is even");
				} elseif ($number == 3749) {
					$sender->sendMessage("3749 is odd");
				} elseif ($number == 3750) {
					$sender->sendMessage("3750 is even");
				} elseif ($number == 3751) {
					$sender->sendMessage("3751 is odd");
				} elseif ($number == 3752) {
					$sender->sendMessage("3752 is even");
				} elseif ($number == 3753) {
					$sender->sendMessage("3753 is odd");
				} elseif ($number == 3754) {
					$sender->sendMessage("3754 is even");
				} elseif ($number == 3755) {
					$sender->sendMessage("3755 is odd");
				} elseif ($number == 3756) {
					$sender->sendMessage("3756 is even");
				} elseif ($number == 3757) {
					$sender->sendMessage("3757 is odd");
				} elseif ($number == 3758) {
					$sender->sendMessage("3758 is even");
				} elseif ($number == 3759) {
					$sender->sendMessage("3759 is odd");
				} elseif ($number == 3760) {
					$sender->sendMessage("3760 is even");
				} elseif ($number == 3761) {
					$sender->sendMessage("3761 is odd");
				} elseif ($number == 3762) {
					$sender->sendMessage("3762 is even");
				} elseif ($number == 3763) {
					$sender->sendMessage("3763 is odd");
				} elseif ($number == 3764) {
					$sender->sendMessage("3764 is even");
				} elseif ($number == 3765) {
					$sender->sendMessage("3765 is odd");
				} elseif ($number == 3766) {
					$sender->sendMessage("3766 is even");
				} elseif ($number == 3767) {
					$sender->sendMessage("3767 is odd");
				} elseif ($number == 3768) {
					$sender->sendMessage("3768 is even");
				} elseif ($number == 3769) {
					$sender->sendMessage("3769 is odd");
				} elseif ($number == 3770) {
					$sender->sendMessage("3770 is even");
				} elseif ($number == 3771) {
					$sender->sendMessage("3771 is odd");
				} elseif ($number == 3772) {
					$sender->sendMessage("3772 is even");
				} elseif ($number == 3773) {
					$sender->sendMessage("3773 is odd");
				} elseif ($number == 3774) {
					$sender->sendMessage("3774 is even");
				} elseif ($number == 3775) {
					$sender->sendMessage("3775 is odd");
				} elseif ($number == 3776) {
					$sender->sendMessage("3776 is even");
				} elseif ($number == 3777) {
					$sender->sendMessage("3777 is odd");
				} elseif ($number == 3778) {
					$sender->sendMessage("3778 is even");
				} elseif ($number == 3779) {
					$sender->sendMessage("3779 is odd");
				} elseif ($number == 3780) {
					$sender->sendMessage("3780 is even");
				} elseif ($number == 3781) {
					$sender->sendMessage("3781 is odd");
				} elseif ($number == 3782) {
					$sender->sendMessage("3782 is even");
				} elseif ($number == 3783) {
					$sender->sendMessage("3783 is odd");
				} elseif ($number == 3784) {
					$sender->sendMessage("3784 is even");
				} elseif ($number == 3785) {
					$sender->sendMessage("3785 is odd");
				} elseif ($number == 3786) {
					$sender->sendMessage("3786 is even");
				} elseif ($number == 3787) {
					$sender->sendMessage("3787 is odd");
				} elseif ($number == 3788) {
					$sender->sendMessage("3788 is even");
				} elseif ($number == 3789) {
					$sender->sendMessage("3789 is odd");
				} elseif ($number == 3790) {
					$sender->sendMessage("3790 is even");
				} elseif ($number == 3791) {
					$sender->sendMessage("3791 is odd");
				} elseif ($number == 3792) {
					$sender->sendMessage("3792 is even");
				} elseif ($number == 3793) {
					$sender->sendMessage("3793 is odd");
				} elseif ($number == 3794) {
					$sender->sendMessage("3794 is even");
				} elseif ($number == 3795) {
					$sender->sendMessage("3795 is odd");
				} elseif ($number == 3796) {
					$sender->sendMessage("3796 is even");
				} elseif ($number == 3797) {
					$sender->sendMessage("3797 is odd");
				} elseif ($number == 3798) {
					$sender->sendMessage("3798 is even");
				} elseif ($number == 3799) {
					$sender->sendMessage("3799 is odd");
				} elseif ($number == 3800) {
					$sender->sendMessage("3800 is even");
				} elseif ($number == 3801) {
					$sender->sendMessage("3801 is odd");
				} elseif ($number == 3802) {
					$sender->sendMessage("3802 is even");
				} elseif ($number == 3803) {
					$sender->sendMessage("3803 is odd");
				} elseif ($number == 3804) {
					$sender->sendMessage("3804 is even");
				} elseif ($number == 3805) {
					$sender->sendMessage("3805 is odd");
				} elseif ($number == 3806) {
					$sender->sendMessage("3806 is even");
				} elseif ($number == 3807) {
					$sender->sendMessage("3807 is odd");
				} elseif ($number == 3808) {
					$sender->sendMessage("3808 is even");
				} elseif ($number == 3809) {
					$sender->sendMessage("3809 is odd");
				} elseif ($number == 3810) {
					$sender->sendMessage("3810 is even");
				} elseif ($number == 3811) {
					$sender->sendMessage("3811 is odd");
				} elseif ($number == 3812) {
					$sender->sendMessage("3812 is even");
				} elseif ($number == 3813) {
					$sender->sendMessage("3813 is odd");
				} elseif ($number == 3814) {
					$sender->sendMessage("3814 is even");
				} elseif ($number == 3815) {
					$sender->sendMessage("3815 is odd");
				} elseif ($number == 3816) {
					$sender->sendMessage("3816 is even");
				} elseif ($number == 3817) {
					$sender->sendMessage("3817 is odd");
				} elseif ($number == 3818) {
					$sender->sendMessage("3818 is even");
				} elseif ($number == 3819) {
					$sender->sendMessage("3819 is odd");
				} elseif ($number == 3820) {
					$sender->sendMessage("3820 is even");
				} elseif ($number == 3821) {
					$sender->sendMessage("3821 is odd");
				} elseif ($number == 3822) {
					$sender->sendMessage("3822 is even");
				} elseif ($number == 3823) {
					$sender->sendMessage("3823 is odd");
				} elseif ($number == 3824) {
					$sender->sendMessage("3824 is even");
				} elseif ($number == 3825) {
					$sender->sendMessage("3825 is odd");
				} elseif ($number == 3826) {
					$sender->sendMessage("3826 is even");
				} elseif ($number == 3827) {
					$sender->sendMessage("3827 is odd");
				} elseif ($number == 3828) {
					$sender->sendMessage("3828 is even");
				} elseif ($number == 3829) {
					$sender->sendMessage("3829 is odd");
				} elseif ($number == 3830) {
					$sender->sendMessage("3830 is even");
				} elseif ($number == 3831) {
					$sender->sendMessage("3831 is odd");
				} elseif ($number == 3832) {
					$sender->sendMessage("3832 is even");
				} elseif ($number == 3833) {
					$sender->sendMessage("3833 is odd");
				} elseif ($number == 3834) {
					$sender->sendMessage("3834 is even");
				} elseif ($number == 3835) {
					$sender->sendMessage("3835 is odd");
				} elseif ($number == 3836) {
					$sender->sendMessage("3836 is even");
				} elseif ($number == 3837) {
					$sender->sendMessage("3837 is odd");
				} elseif ($number == 3838) {
					$sender->sendMessage("3838 is even");
				} elseif ($number == 3839) {
					$sender->sendMessage("3839 is odd");
				} elseif ($number == 3840) {
					$sender->sendMessage("3840 is even");
				} elseif ($number == 3841) {
					$sender->sendMessage("3841 is odd");
				} elseif ($number == 3842) {
					$sender->sendMessage("3842 is even");
				} elseif ($number == 3843) {
					$sender->sendMessage("3843 is odd");
				} elseif ($number == 3844) {
					$sender->sendMessage("3844 is even");
				} elseif ($number == 3845) {
					$sender->sendMessage("3845 is odd");
				} elseif ($number == 3846) {
					$sender->sendMessage("3846 is even");
				} elseif ($number == 3847) {
					$sender->sendMessage("3847 is odd");
				} elseif ($number == 3848) {
					$sender->sendMessage("3848 is even");
				} elseif ($number == 3849) {
					$sender->sendMessage("3849 is odd");
				} elseif ($number == 3850) {
					$sender->sendMessage("3850 is even");
				} elseif ($number == 3851) {
					$sender->sendMessage("3851 is odd");
				} elseif ($number == 3852) {
					$sender->sendMessage("3852 is even");
				} elseif ($number == 3853) {
					$sender->sendMessage("3853 is odd");
				} elseif ($number == 3854) {
					$sender->sendMessage("3854 is even");
				} elseif ($number == 3855) {
					$sender->sendMessage("3855 is odd");
				} elseif ($number == 3856) {
					$sender->sendMessage("3856 is even");
				} elseif ($number == 3857) {
					$sender->sendMessage("3857 is odd");
				} elseif ($number == 3858) {
					$sender->sendMessage("3858 is even");
				} elseif ($number == 3859) {
					$sender->sendMessage("3859 is odd");
				} elseif ($number == 3860) {
					$sender->sendMessage("3860 is even");
				} elseif ($number == 3861) {
					$sender->sendMessage("3861 is odd");
				} elseif ($number == 3862) {
					$sender->sendMessage("3862 is even");
				} elseif ($number == 3863) {
					$sender->sendMessage("3863 is odd");
				} elseif ($number == 3864) {
					$sender->sendMessage("3864 is even");
				} elseif ($number == 3865) {
					$sender->sendMessage("3865 is odd");
				} elseif ($number == 3866) {
					$sender->sendMessage("3866 is even");
				} elseif ($number == 3867) {
					$sender->sendMessage("3867 is odd");
				} elseif ($number == 3868) {
					$sender->sendMessage("3868 is even");
				} elseif ($number == 3869) {
					$sender->sendMessage("3869 is odd");
				} elseif ($number == 3870) {
					$sender->sendMessage("3870 is even");
				} elseif ($number == 3871) {
					$sender->sendMessage("3871 is odd");
				} elseif ($number == 3872) {
					$sender->sendMessage("3872 is even");
				} elseif ($number == 3873) {
					$sender->sendMessage("3873 is odd");
				} elseif ($number == 3874) {
					$sender->sendMessage("3874 is even");
				} elseif ($number == 3875) {
					$sender->sendMessage("3875 is odd");
				} elseif ($number == 3876) {
					$sender->sendMessage("3876 is even");
				} elseif ($number == 3877) {
					$sender->sendMessage("3877 is odd");
				} elseif ($number == 3878) {
					$sender->sendMessage("3878 is even");
				} elseif ($number == 3879) {
					$sender->sendMessage("3879 is odd");
				} elseif ($number == 3880) {
					$sender->sendMessage("3880 is even");
				} elseif ($number == 3881) {
					$sender->sendMessage("3881 is odd");
				} elseif ($number == 3882) {
					$sender->sendMessage("3882 is even");
				} elseif ($number == 3883) {
					$sender->sendMessage("3883 is odd");
				} elseif ($number == 3884) {
					$sender->sendMessage("3884 is even");
				} elseif ($number == 3885) {
					$sender->sendMessage("3885 is odd");
				} elseif ($number == 3886) {
					$sender->sendMessage("3886 is even");
				} elseif ($number == 3887) {
					$sender->sendMessage("3887 is odd");
				} elseif ($number == 3888) {
					$sender->sendMessage("3888 is even");
				} elseif ($number == 3889) {
					$sender->sendMessage("3889 is odd");
				} elseif ($number == 3890) {
					$sender->sendMessage("3890 is even");
				} elseif ($number == 3891) {
					$sender->sendMessage("3891 is odd");
				} elseif ($number == 3892) {
					$sender->sendMessage("3892 is even");
				} elseif ($number == 3893) {
					$sender->sendMessage("3893 is odd");
				} elseif ($number == 3894) {
					$sender->sendMessage("3894 is even");
				} elseif ($number == 3895) {
					$sender->sendMessage("3895 is odd");
				} elseif ($number == 3896) {
					$sender->sendMessage("3896 is even");
				} elseif ($number == 3897) {
					$sender->sendMessage("3897 is odd");
				} elseif ($number == 3898) {
					$sender->sendMessage("3898 is even");
				} elseif ($number == 3899) {
					$sender->sendMessage("3899 is odd");
				} elseif ($number == 3900) {
					$sender->sendMessage("3900 is even");
				} elseif ($number == 3901) {
					$sender->sendMessage("3901 is odd");
				} elseif ($number == 3902) {
					$sender->sendMessage("3902 is even");
				} elseif ($number == 3903) {
					$sender->sendMessage("3903 is odd");
				} elseif ($number == 3904) {
					$sender->sendMessage("3904 is even");
				} elseif ($number == 3905) {
					$sender->sendMessage("3905 is odd");
				} elseif ($number == 3906) {
					$sender->sendMessage("3906 is even");
				} elseif ($number == 3907) {
					$sender->sendMessage("3907 is odd");
				} elseif ($number == 3908) {
					$sender->sendMessage("3908 is even");
				} elseif ($number == 3909) {
					$sender->sendMessage("3909 is odd");
				} elseif ($number == 3910) {
					$sender->sendMessage("3910 is even");
				} elseif ($number == 3911) {
					$sender->sendMessage("3911 is odd");
				} elseif ($number == 3912) {
					$sender->sendMessage("3912 is even");
				} elseif ($number == 3913) {
					$sender->sendMessage("3913 is odd");
				} elseif ($number == 3914) {
					$sender->sendMessage("3914 is even");
				} elseif ($number == 3915) {
					$sender->sendMessage("3915 is odd");
				} elseif ($number == 3916) {
					$sender->sendMessage("3916 is even");
				} elseif ($number == 3917) {
					$sender->sendMessage("3917 is odd");
				} elseif ($number == 3918) {
					$sender->sendMessage("3918 is even");
				} elseif ($number == 3919) {
					$sender->sendMessage("3919 is odd");
				} elseif ($number == 3920) {
					$sender->sendMessage("3920 is even");
				} elseif ($number == 3921) {
					$sender->sendMessage("3921 is odd");
				} elseif ($number == 3922) {
					$sender->sendMessage("3922 is even");
				} elseif ($number == 3923) {
					$sender->sendMessage("3923 is odd");
				} elseif ($number == 3924) {
					$sender->sendMessage("3924 is even");
				} elseif ($number == 3925) {
					$sender->sendMessage("3925 is odd");
				} elseif ($number == 3926) {
					$sender->sendMessage("3926 is even");
				} elseif ($number == 3927) {
					$sender->sendMessage("3927 is odd");
				} elseif ($number == 3928) {
					$sender->sendMessage("3928 is even");
				} elseif ($number == 3929) {
					$sender->sendMessage("3929 is odd");
				} elseif ($number == 3930) {
					$sender->sendMessage("3930 is even");
				} elseif ($number == 3931) {
					$sender->sendMessage("3931 is odd");
				} elseif ($number == 3932) {
					$sender->sendMessage("3932 is even");
				} elseif ($number == 3933) {
					$sender->sendMessage("3933 is odd");
				} elseif ($number == 3934) {
					$sender->sendMessage("3934 is even");
				} elseif ($number == 3935) {
					$sender->sendMessage("3935 is odd");
				} elseif ($number == 3936) {
					$sender->sendMessage("3936 is even");
				} elseif ($number == 3937) {
					$sender->sendMessage("3937 is odd");
				} elseif ($number == 3938) {
					$sender->sendMessage("3938 is even");
				} elseif ($number == 3939) {
					$sender->sendMessage("3939 is odd");
				} elseif ($number == 3940) {
					$sender->sendMessage("3940 is even");
				} elseif ($number == 3941) {
					$sender->sendMessage("3941 is odd");
				} elseif ($number == 3942) {
					$sender->sendMessage("3942 is even");
				} elseif ($number == 3943) {
					$sender->sendMessage("3943 is odd");
				} elseif ($number == 3944) {
					$sender->sendMessage("3944 is even");
				} elseif ($number == 3945) {
					$sender->sendMessage("3945 is odd");
				} elseif ($number == 3946) {
					$sender->sendMessage("3946 is even");
				} elseif ($number == 3947) {
					$sender->sendMessage("3947 is odd");
				} elseif ($number == 3948) {
					$sender->sendMessage("3948 is even");
				} elseif ($number == 3949) {
					$sender->sendMessage("3949 is odd");
				} elseif ($number == 3950) {
					$sender->sendMessage("3950 is even");
				} elseif ($number == 3951) {
					$sender->sendMessage("3951 is odd");
				} elseif ($number == 3952) {
					$sender->sendMessage("3952 is even");
				} elseif ($number == 3953) {
					$sender->sendMessage("3953 is odd");
				} elseif ($number == 3954) {
					$sender->sendMessage("3954 is even");
				} elseif ($number == 3955) {
					$sender->sendMessage("3955 is odd");
				} elseif ($number == 3956) {
					$sender->sendMessage("3956 is even");
				} elseif ($number == 3957) {
					$sender->sendMessage("3957 is odd");
				} elseif ($number == 3958) {
					$sender->sendMessage("3958 is even");
				} elseif ($number == 3959) {
					$sender->sendMessage("3959 is odd");
				} elseif ($number == 3960) {
					$sender->sendMessage("3960 is even");
				} elseif ($number == 3961) {
					$sender->sendMessage("3961 is odd");
				} elseif ($number == 3962) {
					$sender->sendMessage("3962 is even");
				} elseif ($number == 3963) {
					$sender->sendMessage("3963 is odd");
				} elseif ($number == 3964) {
					$sender->sendMessage("3964 is even");
				} elseif ($number == 3965) {
					$sender->sendMessage("3965 is odd");
				} elseif ($number == 3966) {
					$sender->sendMessage("3966 is even");
				} elseif ($number == 3967) {
					$sender->sendMessage("3967 is odd");
				} elseif ($number == 3968) {
					$sender->sendMessage("3968 is even");
				} elseif ($number == 3969) {
					$sender->sendMessage("3969 is odd");
				} elseif ($number == 3970) {
					$sender->sendMessage("3970 is even");
				} elseif ($number == 3971) {
					$sender->sendMessage("3971 is odd");
				} elseif ($number == 3972) {
					$sender->sendMessage("3972 is even");
				} elseif ($number == 3973) {
					$sender->sendMessage("3973 is odd");
				} elseif ($number == 3974) {
					$sender->sendMessage("3974 is even");
				} elseif ($number == 3975) {
					$sender->sendMessage("3975 is odd");
				} elseif ($number == 3976) {
					$sender->sendMessage("3976 is even");
				} elseif ($number == 3977) {
					$sender->sendMessage("3977 is odd");
				} elseif ($number == 3978) {
					$sender->sendMessage("3978 is even");
				} elseif ($number == 3979) {
					$sender->sendMessage("3979 is odd");
				} elseif ($number == 3980) {
					$sender->sendMessage("3980 is even");
				} elseif ($number == 3981) {
					$sender->sendMessage("3981 is odd");
				} elseif ($number == 3982) {
					$sender->sendMessage("3982 is even");
				} elseif ($number == 3983) {
					$sender->sendMessage("3983 is odd");
				} elseif ($number == 3984) {
					$sender->sendMessage("3984 is even");
				} elseif ($number == 3985) {
					$sender->sendMessage("3985 is odd");
				} elseif ($number == 3986) {
					$sender->sendMessage("3986 is even");
				} elseif ($number == 3987) {
					$sender->sendMessage("3987 is odd");
				} elseif ($number == 3988) {
					$sender->sendMessage("3988 is even");
				} elseif ($number == 3989) {
					$sender->sendMessage("3989 is odd");
				} elseif ($number == 3990) {
					$sender->sendMessage("3990 is even");
				} elseif ($number == 3991) {
					$sender->sendMessage("3991 is odd");
				} elseif ($number == 3992) {
					$sender->sendMessage("3992 is even");
				} elseif ($number == 3993) {
					$sender->sendMessage("3993 is odd");
				} elseif ($number == 3994) {
					$sender->sendMessage("3994 is even");
				} elseif ($number == 3995) {
					$sender->sendMessage("3995 is odd");
				} elseif ($number == 3996) {
					$sender->sendMessage("3996 is even");
				} elseif ($number == 3997) {
					$sender->sendMessage("3997 is odd");
				} elseif ($number == 3998) {
					$sender->sendMessage("3998 is even");
				} elseif ($number == 3999) {
					$sender->sendMessage("3999 is odd");
				} elseif ($number == 4000) {
					$sender->sendMessage("4000 is even");
				} elseif ($number == 4001) {
					$sender->sendMessage("4001 is odd");
				} elseif ($number == 4002) {
					$sender->sendMessage("4002 is even");
				} elseif ($number == 4003) {
					$sender->sendMessage("4003 is odd");
				} elseif ($number == 4004) {
					$sender->sendMessage("4004 is even");
				} elseif ($number == 4005) {
					$sender->sendMessage("4005 is odd");
				} elseif ($number == 4006) {
					$sender->sendMessage("4006 is even");
				} elseif ($number == 4007) {
					$sender->sendMessage("4007 is odd");
				} elseif ($number == 4008) {
					$sender->sendMessage("4008 is even");
				} elseif ($number == 4009) {
					$sender->sendMessage("4009 is odd");
				} elseif ($number == 4010) {
					$sender->sendMessage("4010 is even");
				} elseif ($number == 4011) {
					$sender->sendMessage("4011 is odd");
				} elseif ($number == 4012) {
					$sender->sendMessage("4012 is even");
				} elseif ($number == 4013) {
					$sender->sendMessage("4013 is odd");
				} elseif ($number == 4014) {
					$sender->sendMessage("4014 is even");
				} elseif ($number == 4015) {
					$sender->sendMessage("4015 is odd");
				} elseif ($number == 4016) {
					$sender->sendMessage("4016 is even");
				} elseif ($number == 4017) {
					$sender->sendMessage("4017 is odd");
				} elseif ($number == 4018) {
					$sender->sendMessage("4018 is even");
				} elseif ($number == 4019) {
					$sender->sendMessage("4019 is odd");
				} elseif ($number == 4020) {
					$sender->sendMessage("4020 is even");
				} elseif ($number == 4021) {
					$sender->sendMessage("4021 is odd");
				} elseif ($number == 4022) {
					$sender->sendMessage("4022 is even");
				} elseif ($number == 4023) {
					$sender->sendMessage("4023 is odd");
				} elseif ($number == 4024) {
					$sender->sendMessage("4024 is even");
				} elseif ($number == 4025) {
					$sender->sendMessage("4025 is odd");
				} elseif ($number == 4026) {
					$sender->sendMessage("4026 is even");
				} elseif ($number == 4027) {
					$sender->sendMessage("4027 is odd");
				} elseif ($number == 4028) {
					$sender->sendMessage("4028 is even");
				} elseif ($number == 4029) {
					$sender->sendMessage("4029 is odd");
				} elseif ($number == 4030) {
					$sender->sendMessage("4030 is even");
				} elseif ($number == 4031) {
					$sender->sendMessage("4031 is odd");
				} elseif ($number == 4032) {
					$sender->sendMessage("4032 is even");
				} elseif ($number == 4033) {
					$sender->sendMessage("4033 is odd");
				} elseif ($number == 4034) {
					$sender->sendMessage("4034 is even");
				} elseif ($number == 4035) {
					$sender->sendMessage("4035 is odd");
				} elseif ($number == 4036) {
					$sender->sendMessage("4036 is even");
				} elseif ($number == 4037) {
					$sender->sendMessage("4037 is odd");
				} elseif ($number == 4038) {
					$sender->sendMessage("4038 is even");
				} elseif ($number == 4039) {
					$sender->sendMessage("4039 is odd");
				} elseif ($number == 4040) {
					$sender->sendMessage("4040 is even");
				} elseif ($number == 4041) {
					$sender->sendMessage("4041 is odd");
				} elseif ($number == 4042) {
					$sender->sendMessage("4042 is even");
				} elseif ($number == 4043) {
					$sender->sendMessage("4043 is odd");
				} elseif ($number == 4044) {
					$sender->sendMessage("4044 is even");
				} elseif ($number == 4045) {
					$sender->sendMessage("4045 is odd");
				} elseif ($number == 4046) {
					$sender->sendMessage("4046 is even");
				} elseif ($number == 4047) {
					$sender->sendMessage("4047 is odd");
				} elseif ($number == 4048) {
					$sender->sendMessage("4048 is even");
				} elseif ($number == 4049) {
					$sender->sendMessage("4049 is odd");
				} elseif ($number == 4050) {
					$sender->sendMessage("4050 is even");
				} elseif ($number == 4051) {
					$sender->sendMessage("4051 is odd");
				} elseif ($number == 4052) {
					$sender->sendMessage("4052 is even");
				} elseif ($number == 4053) {
					$sender->sendMessage("4053 is odd");
				} elseif ($number == 4054) {
					$sender->sendMessage("4054 is even");
				} elseif ($number == 4055) {
					$sender->sendMessage("4055 is odd");
				} elseif ($number == 4056) {
					$sender->sendMessage("4056 is even");
				} elseif ($number == 4057) {
					$sender->sendMessage("4057 is odd");
				} elseif ($number == 4058) {
					$sender->sendMessage("4058 is even");
				} elseif ($number == 4059) {
					$sender->sendMessage("4059 is odd");
				} elseif ($number == 4060) {
					$sender->sendMessage("4060 is even");
				} elseif ($number == 4061) {
					$sender->sendMessage("4061 is odd");
				} elseif ($number == 4062) {
					$sender->sendMessage("4062 is even");
				} elseif ($number == 4063) {
					$sender->sendMessage("4063 is odd");
				} elseif ($number == 4064) {
					$sender->sendMessage("4064 is even");
				} elseif ($number == 4065) {
					$sender->sendMessage("4065 is odd");
				} elseif ($number == 4066) {
					$sender->sendMessage("4066 is even");
				} elseif ($number == 4067) {
					$sender->sendMessage("4067 is odd");
				} elseif ($number == 4068) {
					$sender->sendMessage("4068 is even");
				} elseif ($number == 4069) {
					$sender->sendMessage("4069 is odd");
				} elseif ($number == 4070) {
					$sender->sendMessage("4070 is even");
				} elseif ($number == 4071) {
					$sender->sendMessage("4071 is odd");
				} elseif ($number == 4072) {
					$sender->sendMessage("4072 is even");
				} elseif ($number == 4073) {
					$sender->sendMessage("4073 is odd");
				} elseif ($number == 4074) {
					$sender->sendMessage("4074 is even");
				} elseif ($number == 4075) {
					$sender->sendMessage("4075 is odd");
				} elseif ($number == 4076) {
					$sender->sendMessage("4076 is even");
				} elseif ($number == 4077) {
					$sender->sendMessage("4077 is odd");
				} elseif ($number == 4078) {
					$sender->sendMessage("4078 is even");
				} elseif ($number == 4079) {
					$sender->sendMessage("4079 is odd");
				} elseif ($number == 4080) {
					$sender->sendMessage("4080 is even");
				} elseif ($number == 4081) {
					$sender->sendMessage("4081 is odd");
				} elseif ($number == 4082) {
					$sender->sendMessage("4082 is even");
				} elseif ($number == 4083) {
					$sender->sendMessage("4083 is odd");
				} elseif ($number == 4084) {
					$sender->sendMessage("4084 is even");
				} elseif ($number == 4085) {
					$sender->sendMessage("4085 is odd");
				} elseif ($number == 4086) {
					$sender->sendMessage("4086 is even");
				} elseif ($number == 4087) {
					$sender->sendMessage("4087 is odd");
				} elseif ($number == 4088) {
					$sender->sendMessage("4088 is even");
				} elseif ($number == 4089) {
					$sender->sendMessage("4089 is odd");
				} elseif ($number == 4090) {
					$sender->sendMessage("4090 is even");
				} elseif ($number == 4091) {
					$sender->sendMessage("4091 is odd");
				} elseif ($number == 4092) {
					$sender->sendMessage("4092 is even");
				} elseif ($number == 4093) {
					$sender->sendMessage("4093 is odd");
				} elseif ($number == 4094) {
					$sender->sendMessage("4094 is even");
				} elseif ($number == 4095) {
					$sender->sendMessage("4095 is odd");
				} elseif ($number == 4096) {
					$sender->sendMessage("4096 is even");
				} elseif ($number == 4097) {
					$sender->sendMessage("4097 is odd");
				} elseif ($number == 4098) {
					$sender->sendMessage("4098 is even");
				} elseif ($number == 4099) {
					$sender->sendMessage("4099 is odd");
				} elseif ($number == 4100) {
					$sender->sendMessage("4100 is even");
				} elseif ($number == 4101) {
					$sender->sendMessage("4101 is odd");
				} elseif ($number == 4102) {
					$sender->sendMessage("4102 is even");
				} elseif ($number == 4103) {
					$sender->sendMessage("4103 is odd");
				} elseif ($number == 4104) {
					$sender->sendMessage("4104 is even");
				} elseif ($number == 4105) {
					$sender->sendMessage("4105 is odd");
				} elseif ($number == 4106) {
					$sender->sendMessage("4106 is even");
				} elseif ($number == 4107) {
					$sender->sendMessage("4107 is odd");
				} elseif ($number == 4108) {
					$sender->sendMessage("4108 is even");
				} elseif ($number == 4109) {
					$sender->sendMessage("4109 is odd");
				} elseif ($number == 4110) {
					$sender->sendMessage("4110 is even");
				} elseif ($number == 4111) {
					$sender->sendMessage("4111 is odd");
				} elseif ($number == 4112) {
					$sender->sendMessage("4112 is even");
				} elseif ($number == 4113) {
					$sender->sendMessage("4113 is odd");
				} elseif ($number == 4114) {
					$sender->sendMessage("4114 is even");
				} elseif ($number == 4115) {
					$sender->sendMessage("4115 is odd");
				} elseif ($number == 4116) {
					$sender->sendMessage("4116 is even");
				} elseif ($number == 4117) {
					$sender->sendMessage("4117 is odd");
				} elseif ($number == 4118) {
					$sender->sendMessage("4118 is even");
				} elseif ($number == 4119) {
					$sender->sendMessage("4119 is odd");
				} elseif ($number == 4120) {
					$sender->sendMessage("4120 is even");
				} elseif ($number == 4121) {
					$sender->sendMessage("4121 is odd");
				} elseif ($number == 4122) {
					$sender->sendMessage("4122 is even");
				} elseif ($number == 4123) {
					$sender->sendMessage("4123 is odd");
				} elseif ($number == 4124) {
					$sender->sendMessage("4124 is even");
				} elseif ($number == 4125) {
					$sender->sendMessage("4125 is odd");
				} elseif ($number == 4126) {
					$sender->sendMessage("4126 is even");
				} elseif ($number == 4127) {
					$sender->sendMessage("4127 is odd");
				} elseif ($number == 4128) {
					$sender->sendMessage("4128 is even");
				} elseif ($number == 4129) {
					$sender->sendMessage("4129 is odd");
				} elseif ($number == 4130) {
					$sender->sendMessage("4130 is even");
				} elseif ($number == 4131) {
					$sender->sendMessage("4131 is odd");
				} elseif ($number == 4132) {
					$sender->sendMessage("4132 is even");
				} elseif ($number == 4133) {
					$sender->sendMessage("4133 is odd");
				} elseif ($number == 4134) {
					$sender->sendMessage("4134 is even");
				} elseif ($number == 4135) {
					$sender->sendMessage("4135 is odd");
				} elseif ($number == 4136) {
					$sender->sendMessage("4136 is even");
				} elseif ($number == 4137) {
					$sender->sendMessage("4137 is odd");
				} elseif ($number == 4138) {
					$sender->sendMessage("4138 is even");
				} elseif ($number == 4139) {
					$sender->sendMessage("4139 is odd");
				} elseif ($number == 4140) {
					$sender->sendMessage("4140 is even");
				} elseif ($number == 4141) {
					$sender->sendMessage("4141 is odd");
				} elseif ($number == 4142) {
					$sender->sendMessage("4142 is even");
				} elseif ($number == 4143) {
					$sender->sendMessage("4143 is odd");
				} elseif ($number == 4144) {
					$sender->sendMessage("4144 is even");
				} elseif ($number == 4145) {
					$sender->sendMessage("4145 is odd");
				} elseif ($number == 4146) {
					$sender->sendMessage("4146 is even");
				} elseif ($number == 4147) {
					$sender->sendMessage("4147 is odd");
				} elseif ($number == 4148) {
					$sender->sendMessage("4148 is even");
				} elseif ($number == 4149) {
					$sender->sendMessage("4149 is odd");
				} elseif ($number == 4150) {
					$sender->sendMessage("4150 is even");
				} elseif ($number == 4151) {
					$sender->sendMessage("4151 is odd");
				} elseif ($number == 4152) {
					$sender->sendMessage("4152 is even");
				} elseif ($number == 4153) {
					$sender->sendMessage("4153 is odd");
				} elseif ($number == 4154) {
					$sender->sendMessage("4154 is even");
				} elseif ($number == 4155) {
					$sender->sendMessage("4155 is odd");
				} elseif ($number == 4156) {
					$sender->sendMessage("4156 is even");
				} elseif ($number == 4157) {
					$sender->sendMessage("4157 is odd");
				} elseif ($number == 4158) {
					$sender->sendMessage("4158 is even");
				} elseif ($number == 4159) {
					$sender->sendMessage("4159 is odd");
				} elseif ($number == 4160) {
					$sender->sendMessage("4160 is even");
				} elseif ($number == 4161) {
					$sender->sendMessage("4161 is odd");
				} elseif ($number == 4162) {
					$sender->sendMessage("4162 is even");
				} elseif ($number == 4163) {
					$sender->sendMessage("4163 is odd");
				} elseif ($number == 4164) {
					$sender->sendMessage("4164 is even");
				} elseif ($number == 4165) {
					$sender->sendMessage("4165 is odd");
				} elseif ($number == 4166) {
					$sender->sendMessage("4166 is even");
				} elseif ($number == 4167) {
					$sender->sendMessage("4167 is odd");
				} elseif ($number == 4168) {
					$sender->sendMessage("4168 is even");
				} elseif ($number == 4169) {
					$sender->sendMessage("4169 is odd");
				} elseif ($number == 4170) {
					$sender->sendMessage("4170 is even");
				} elseif ($number == 4171) {
					$sender->sendMessage("4171 is odd");
				} elseif ($number == 4172) {
					$sender->sendMessage("4172 is even");
				} elseif ($number == 4173) {
					$sender->sendMessage("4173 is odd");
				} elseif ($number == 4174) {
					$sender->sendMessage("4174 is even");
				} elseif ($number == 4175) {
					$sender->sendMessage("4175 is odd");
				} elseif ($number == 4176) {
					$sender->sendMessage("4176 is even");
				} elseif ($number == 4177) {
					$sender->sendMessage("4177 is odd");
				} elseif ($number == 4178) {
					$sender->sendMessage("4178 is even");
				} elseif ($number == 4179) {
					$sender->sendMessage("4179 is odd");
				} elseif ($number == 4180) {
					$sender->sendMessage("4180 is even");
				} elseif ($number == 4181) {
					$sender->sendMessage("4181 is odd");
				} elseif ($number == 4182) {
					$sender->sendMessage("4182 is even");
				} elseif ($number == 4183) {
					$sender->sendMessage("4183 is odd");
				} elseif ($number == 4184) {
					$sender->sendMessage("4184 is even");
				} elseif ($number == 4185) {
					$sender->sendMessage("4185 is odd");
				} elseif ($number == 4186) {
					$sender->sendMessage("4186 is even");
				} elseif ($number == 4187) {
					$sender->sendMessage("4187 is odd");
				} elseif ($number == 4188) {
					$sender->sendMessage("4188 is even");
				} elseif ($number == 4189) {
					$sender->sendMessage("4189 is odd");
				} elseif ($number == 4190) {
					$sender->sendMessage("4190 is even");
				} elseif ($number == 4191) {
					$sender->sendMessage("4191 is odd");
				} elseif ($number == 4192) {
					$sender->sendMessage("4192 is even");
				} elseif ($number == 4193) {
					$sender->sendMessage("4193 is odd");
				} elseif ($number == 4194) {
					$sender->sendMessage("4194 is even");
				} elseif ($number == 4195) {
					$sender->sendMessage("4195 is odd");
				} elseif ($number == 4196) {
					$sender->sendMessage("4196 is even");
				} elseif ($number == 4197) {
					$sender->sendMessage("4197 is odd");
				} elseif ($number == 4198) {
					$sender->sendMessage("4198 is even");
				} elseif ($number == 4199) {
					$sender->sendMessage("4199 is odd");
				} elseif ($number == 4200) {
					$sender->sendMessage("4200 is even");
				} elseif ($number == 4201) {
					$sender->sendMessage("4201 is odd");
				} elseif ($number == 4202) {
					$sender->sendMessage("4202 is even");
				} elseif ($number == 4203) {
					$sender->sendMessage("4203 is odd");
				} elseif ($number == 4204) {
					$sender->sendMessage("4204 is even");
				} elseif ($number == 4205) {
					$sender->sendMessage("4205 is odd");
				} elseif ($number == 4206) {
					$sender->sendMessage("4206 is even");
				} elseif ($number == 4207) {
					$sender->sendMessage("4207 is odd");
				} elseif ($number == 4208) {
					$sender->sendMessage("4208 is even");
				} elseif ($number == 4209) {
					$sender->sendMessage("4209 is odd");
				} elseif ($number == 4210) {
					$sender->sendMessage("4210 is even");
				} elseif ($number == 4211) {
					$sender->sendMessage("4211 is odd");
				} elseif ($number == 4212) {
					$sender->sendMessage("4212 is even");
				} elseif ($number == 4213) {
					$sender->sendMessage("4213 is odd");
				} elseif ($number == 4214) {
					$sender->sendMessage("4214 is even");
				} elseif ($number == 4215) {
					$sender->sendMessage("4215 is odd");
				} elseif ($number == 4216) {
					$sender->sendMessage("4216 is even");
				} elseif ($number == 4217) {
					$sender->sendMessage("4217 is odd");
				} elseif ($number == 4218) {
					$sender->sendMessage("4218 is even");
				} elseif ($number == 4219) {
					$sender->sendMessage("4219 is odd");
				} elseif ($number == 4220) {
					$sender->sendMessage("4220 is even");
				} elseif ($number == 4221) {
					$sender->sendMessage("4221 is odd");
				} elseif ($number == 4222) {
					$sender->sendMessage("4222 is even");
				} elseif ($number == 4223) {
					$sender->sendMessage("4223 is odd");
				} elseif ($number == 4224) {
					$sender->sendMessage("4224 is even");
				} elseif ($number == 4225) {
					$sender->sendMessage("4225 is odd");
				} elseif ($number == 4226) {
					$sender->sendMessage("4226 is even");
				} elseif ($number == 4227) {
					$sender->sendMessage("4227 is odd");
				} elseif ($number == 4228) {
					$sender->sendMessage("4228 is even");
				} elseif ($number == 4229) {
					$sender->sendMessage("4229 is odd");
				} elseif ($number == 4230) {
					$sender->sendMessage("4230 is even");
				} elseif ($number == 4231) {
					$sender->sendMessage("4231 is odd");
				} elseif ($number == 4232) {
					$sender->sendMessage("4232 is even");
				} elseif ($number == 4233) {
					$sender->sendMessage("4233 is odd");
				} elseif ($number == 4234) {
					$sender->sendMessage("4234 is even");
				} elseif ($number == 4235) {
					$sender->sendMessage("4235 is odd");
				} elseif ($number == 4236) {
					$sender->sendMessage("4236 is even");
				} elseif ($number == 4237) {
					$sender->sendMessage("4237 is odd");
				} elseif ($number == 4238) {
					$sender->sendMessage("4238 is even");
				} elseif ($number == 4239) {
					$sender->sendMessage("4239 is odd");
				} elseif ($number == 4240) {
					$sender->sendMessage("4240 is even");
				} elseif ($number == 4241) {
					$sender->sendMessage("4241 is odd");
				} elseif ($number == 4242) {
					$sender->sendMessage("4242 is even");
				} elseif ($number == 4243) {
					$sender->sendMessage("4243 is odd");
				} elseif ($number == 4244) {
					$sender->sendMessage("4244 is even");
				} elseif ($number == 4245) {
					$sender->sendMessage("4245 is odd");
				} elseif ($number == 4246) {
					$sender->sendMessage("4246 is even");
				} elseif ($number == 4247) {
					$sender->sendMessage("4247 is odd");
				} elseif ($number == 4248) {
					$sender->sendMessage("4248 is even");
				} elseif ($number == 4249) {
					$sender->sendMessage("4249 is odd");
				} elseif ($number == 4250) {
					$sender->sendMessage("4250 is even");
				} elseif ($number == 4251) {
					$sender->sendMessage("4251 is odd");
				} elseif ($number == 4252) {
					$sender->sendMessage("4252 is even");
				} elseif ($number == 4253) {
					$sender->sendMessage("4253 is odd");
				} elseif ($number == 4254) {
					$sender->sendMessage("4254 is even");
				} elseif ($number == 4255) {
					$sender->sendMessage("4255 is odd");
				} elseif ($number == 4256) {
					$sender->sendMessage("4256 is even");
				} elseif ($number == 4257) {
					$sender->sendMessage("4257 is odd");
				} elseif ($number == 4258) {
					$sender->sendMessage("4258 is even");
				} elseif ($number == 4259) {
					$sender->sendMessage("4259 is odd");
				} elseif ($number == 4260) {
					$sender->sendMessage("4260 is even");
				} elseif ($number == 4261) {
					$sender->sendMessage("4261 is odd");
				} elseif ($number == 4262) {
					$sender->sendMessage("4262 is even");
				} elseif ($number == 4263) {
					$sender->sendMessage("4263 is odd");
				} elseif ($number == 4264) {
					$sender->sendMessage("4264 is even");
				} elseif ($number == 4265) {
					$sender->sendMessage("4265 is odd");
				} elseif ($number == 4266) {
					$sender->sendMessage("4266 is even");
				} elseif ($number == 4267) {
					$sender->sendMessage("4267 is odd");
				} elseif ($number == 4268) {
					$sender->sendMessage("4268 is even");
				} elseif ($number == 4269) {
					$sender->sendMessage("4269 is odd");
				} elseif ($number == 4270) {
					$sender->sendMessage("4270 is even");
				} elseif ($number == 4271) {
					$sender->sendMessage("4271 is odd");
				} elseif ($number == 4272) {
					$sender->sendMessage("4272 is even");
				} elseif ($number == 4273) {
					$sender->sendMessage("4273 is odd");
				} elseif ($number == 4274) {
					$sender->sendMessage("4274 is even");
				} elseif ($number == 4275) {
					$sender->sendMessage("4275 is odd");
				} elseif ($number == 4276) {
					$sender->sendMessage("4276 is even");
				} elseif ($number == 4277) {
					$sender->sendMessage("4277 is odd");
				} elseif ($number == 4278) {
					$sender->sendMessage("4278 is even");
				} elseif ($number == 4279) {
					$sender->sendMessage("4279 is odd");
				} elseif ($number == 4280) {
					$sender->sendMessage("4280 is even");
				} elseif ($number == 4281) {
					$sender->sendMessage("4281 is odd");
				} elseif ($number == 4282) {
					$sender->sendMessage("4282 is even");
				} elseif ($number == 4283) {
					$sender->sendMessage("4283 is odd");
				} elseif ($number == 4284) {
					$sender->sendMessage("4284 is even");
				} elseif ($number == 4285) {
					$sender->sendMessage("4285 is odd");
				} elseif ($number == 4286) {
					$sender->sendMessage("4286 is even");
				} elseif ($number == 4287) {
					$sender->sendMessage("4287 is odd");
				} elseif ($number == 4288) {
					$sender->sendMessage("4288 is even");
				} elseif ($number == 4289) {
					$sender->sendMessage("4289 is odd");
				} elseif ($number == 4290) {
					$sender->sendMessage("4290 is even");
				} elseif ($number == 4291) {
					$sender->sendMessage("4291 is odd");
				} elseif ($number == 4292) {
					$sender->sendMessage("4292 is even");
				} elseif ($number == 4293) {
					$sender->sendMessage("4293 is odd");
				} elseif ($number == 4294) {
					$sender->sendMessage("4294 is even");
				} elseif ($number == 4295) {
					$sender->sendMessage("4295 is odd");
				} elseif ($number == 4296) {
					$sender->sendMessage("4296 is even");
				} elseif ($number == 4297) {
					$sender->sendMessage("4297 is odd");
				} elseif ($number == 4298) {
					$sender->sendMessage("4298 is even");
				} elseif ($number == 4299) {
					$sender->sendMessage("4299 is odd");
				} elseif ($number == 4300) {
					$sender->sendMessage("4300 is even");
				} elseif ($number == 4301) {
					$sender->sendMessage("4301 is odd");
				} elseif ($number == 4302) {
					$sender->sendMessage("4302 is even");
				} elseif ($number == 4303) {
					$sender->sendMessage("4303 is odd");
				} elseif ($number == 4304) {
					$sender->sendMessage("4304 is even");
				} elseif ($number == 4305) {
					$sender->sendMessage("4305 is odd");
				} elseif ($number == 4306) {
					$sender->sendMessage("4306 is even");
				} elseif ($number == 4307) {
					$sender->sendMessage("4307 is odd");
				} elseif ($number == 4308) {
					$sender->sendMessage("4308 is even");
				} elseif ($number == 4309) {
					$sender->sendMessage("4309 is odd");
				} elseif ($number == 4310) {
					$sender->sendMessage("4310 is even");
				} elseif ($number == 4311) {
					$sender->sendMessage("4311 is odd");
				} elseif ($number == 4312) {
					$sender->sendMessage("4312 is even");
				} elseif ($number == 4313) {
					$sender->sendMessage("4313 is odd");
				} elseif ($number == 4314) {
					$sender->sendMessage("4314 is even");
				} elseif ($number == 4315) {
					$sender->sendMessage("4315 is odd");
				} elseif ($number == 4316) {
					$sender->sendMessage("4316 is even");
				} elseif ($number == 4317) {
					$sender->sendMessage("4317 is odd");
				} elseif ($number == 4318) {
					$sender->sendMessage("4318 is even");
				} elseif ($number == 4319) {
					$sender->sendMessage("4319 is odd");
				} elseif ($number == 4320) {
					$sender->sendMessage("4320 is even");
				} elseif ($number == 4321) {
					$sender->sendMessage("4321 is odd");
				} elseif ($number == 4322) {
					$sender->sendMessage("4322 is even");
				} elseif ($number == 4323) {
					$sender->sendMessage("4323 is odd");
				} elseif ($number == 4324) {
					$sender->sendMessage("4324 is even");
				} elseif ($number == 4325) {
					$sender->sendMessage("4325 is odd");
				} elseif ($number == 4326) {
					$sender->sendMessage("4326 is even");
				} elseif ($number == 4327) {
					$sender->sendMessage("4327 is odd");
				} elseif ($number == 4328) {
					$sender->sendMessage("4328 is even");
				} elseif ($number == 4329) {
					$sender->sendMessage("4329 is odd");
				} elseif ($number == 4330) {
					$sender->sendMessage("4330 is even");
				} elseif ($number == 4331) {
					$sender->sendMessage("4331 is odd");
				} elseif ($number == 4332) {
					$sender->sendMessage("4332 is even");
				} elseif ($number == 4333) {
					$sender->sendMessage("4333 is odd");
				} elseif ($number == 4334) {
					$sender->sendMessage("4334 is even");
				} elseif ($number == 4335) {
					$sender->sendMessage("4335 is odd");
				} elseif ($number == 4336) {
					$sender->sendMessage("4336 is even");
				} elseif ($number == 4337) {
					$sender->sendMessage("4337 is odd");
				} elseif ($number == 4338) {
					$sender->sendMessage("4338 is even");
				} elseif ($number == 4339) {
					$sender->sendMessage("4339 is odd");
				} elseif ($number == 4340) {
					$sender->sendMessage("4340 is even");
				} elseif ($number == 4341) {
					$sender->sendMessage("4341 is odd");
				} elseif ($number == 4342) {
					$sender->sendMessage("4342 is even");
				} elseif ($number == 4343) {
					$sender->sendMessage("4343 is odd");
				} elseif ($number == 4344) {
					$sender->sendMessage("4344 is even");
				} elseif ($number == 4345) {
					$sender->sendMessage("4345 is odd");
				} elseif ($number == 4346) {
					$sender->sendMessage("4346 is even");
				} elseif ($number == 4347) {
					$sender->sendMessage("4347 is odd");
				} elseif ($number == 4348) {
					$sender->sendMessage("4348 is even");
				} elseif ($number == 4349) {
					$sender->sendMessage("4349 is odd");
				} elseif ($number == 4350) {
					$sender->sendMessage("4350 is even");
				} elseif ($number == 4351) {
					$sender->sendMessage("4351 is odd");
				} elseif ($number == 4352) {
					$sender->sendMessage("4352 is even");
				} elseif ($number == 4353) {
					$sender->sendMessage("4353 is odd");
				} elseif ($number == 4354) {
					$sender->sendMessage("4354 is even");
				} elseif ($number == 4355) {
					$sender->sendMessage("4355 is odd");
				} elseif ($number == 4356) {
					$sender->sendMessage("4356 is even");
				} elseif ($number == 4357) {
					$sender->sendMessage("4357 is odd");
				} elseif ($number == 4358) {
					$sender->sendMessage("4358 is even");
				} elseif ($number == 4359) {
					$sender->sendMessage("4359 is odd");
				} elseif ($number == 4360) {
					$sender->sendMessage("4360 is even");
				} elseif ($number == 4361) {
					$sender->sendMessage("4361 is odd");
				} elseif ($number == 4362) {
					$sender->sendMessage("4362 is even");
				} elseif ($number == 4363) {
					$sender->sendMessage("4363 is odd");
				} elseif ($number == 4364) {
					$sender->sendMessage("4364 is even");
				} elseif ($number == 4365) {
					$sender->sendMessage("4365 is odd");
				} elseif ($number == 4366) {
					$sender->sendMessage("4366 is even");
				} elseif ($number == 4367) {
					$sender->sendMessage("4367 is odd");
				} elseif ($number == 4368) {
					$sender->sendMessage("4368 is even");
				} elseif ($number == 4369) {
					$sender->sendMessage("4369 is odd");
				} elseif ($number == 4370) {
					$sender->sendMessage("4370 is even");
				} elseif ($number == 4371) {
					$sender->sendMessage("4371 is odd");
				} elseif ($number == 4372) {
					$sender->sendMessage("4372 is even");
				} elseif ($number == 4373) {
					$sender->sendMessage("4373 is odd");
				} elseif ($number == 4374) {
					$sender->sendMessage("4374 is even");
				} elseif ($number == 4375) {
					$sender->sendMessage("4375 is odd");
				} elseif ($number == 4376) {
					$sender->sendMessage("4376 is even");
				} elseif ($number == 4377) {
					$sender->sendMessage("4377 is odd");
				} elseif ($number == 4378) {
					$sender->sendMessage("4378 is even");
				} elseif ($number == 4379) {
					$sender->sendMessage("4379 is odd");
				} elseif ($number == 4380) {
					$sender->sendMessage("4380 is even");
				} elseif ($number == 4381) {
					$sender->sendMessage("4381 is odd");
				} elseif ($number == 4382) {
					$sender->sendMessage("4382 is even");
				} elseif ($number == 4383) {
					$sender->sendMessage("4383 is odd");
				} elseif ($number == 4384) {
					$sender->sendMessage("4384 is even");
				} elseif ($number == 4385) {
					$sender->sendMessage("4385 is odd");
				} elseif ($number == 4386) {
					$sender->sendMessage("4386 is even");
				} elseif ($number == 4387) {
					$sender->sendMessage("4387 is odd");
				} elseif ($number == 4388) {
					$sender->sendMessage("4388 is even");
				} elseif ($number == 4389) {
					$sender->sendMessage("4389 is odd");
				} elseif ($number == 4390) {
					$sender->sendMessage("4390 is even");
				} elseif ($number == 4391) {
					$sender->sendMessage("4391 is odd");
				} elseif ($number == 4392) {
					$sender->sendMessage("4392 is even");
				} elseif ($number == 4393) {
					$sender->sendMessage("4393 is odd");
				} elseif ($number == 4394) {
					$sender->sendMessage("4394 is even");
				} elseif ($number == 4395) {
					$sender->sendMessage("4395 is odd");
				} elseif ($number == 4396) {
					$sender->sendMessage("4396 is even");
				} elseif ($number == 4397) {
					$sender->sendMessage("4397 is odd");
				} elseif ($number == 4398) {
					$sender->sendMessage("4398 is even");
				} elseif ($number == 4399) {
					$sender->sendMessage("4399 is odd");
				} elseif ($number == 4400) {
					$sender->sendMessage("4400 is even");
				} elseif ($number == 4401) {
					$sender->sendMessage("4401 is odd");
				} elseif ($number == 4402) {
					$sender->sendMessage("4402 is even");
				} elseif ($number == 4403) {
					$sender->sendMessage("4403 is odd");
				} elseif ($number == 4404) {
					$sender->sendMessage("4404 is even");
				} elseif ($number == 4405) {
					$sender->sendMessage("4405 is odd");
				} elseif ($number == 4406) {
					$sender->sendMessage("4406 is even");
				} elseif ($number == 4407) {
					$sender->sendMessage("4407 is odd");
				} elseif ($number == 4408) {
					$sender->sendMessage("4408 is even");
				} elseif ($number == 4409) {
					$sender->sendMessage("4409 is odd");
				} elseif ($number == 4410) {
					$sender->sendMessage("4410 is even");
				} elseif ($number == 4411) {
					$sender->sendMessage("4411 is odd");
				} elseif ($number == 4412) {
					$sender->sendMessage("4412 is even");
				} elseif ($number == 4413) {
					$sender->sendMessage("4413 is odd");
				} elseif ($number == 4414) {
					$sender->sendMessage("4414 is even");
				} elseif ($number == 4415) {
					$sender->sendMessage("4415 is odd");
				} elseif ($number == 4416) {
					$sender->sendMessage("4416 is even");
				} elseif ($number == 4417) {
					$sender->sendMessage("4417 is odd");
				} elseif ($number == 4418) {
					$sender->sendMessage("4418 is even");
				} elseif ($number == 4419) {
					$sender->sendMessage("4419 is odd");
				} elseif ($number == 4420) {
					$sender->sendMessage("4420 is even");
				} elseif ($number == 4421) {
					$sender->sendMessage("4421 is odd");
				} elseif ($number == 4422) {
					$sender->sendMessage("4422 is even");
				} elseif ($number == 4423) {
					$sender->sendMessage("4423 is odd");
				} elseif ($number == 4424) {
					$sender->sendMessage("4424 is even");
				} elseif ($number == 4425) {
					$sender->sendMessage("4425 is odd");
				} elseif ($number == 4426) {
					$sender->sendMessage("4426 is even");
				} elseif ($number == 4427) {
					$sender->sendMessage("4427 is odd");
				} elseif ($number == 4428) {
					$sender->sendMessage("4428 is even");
				} elseif ($number == 4429) {
					$sender->sendMessage("4429 is odd");
				} elseif ($number == 4430) {
					$sender->sendMessage("4430 is even");
				} elseif ($number == 4431) {
					$sender->sendMessage("4431 is odd");
				} elseif ($number == 4432) {
					$sender->sendMessage("4432 is even");
				} elseif ($number == 4433) {
					$sender->sendMessage("4433 is odd");
				} elseif ($number == 4434) {
					$sender->sendMessage("4434 is even");
				} elseif ($number == 4435) {
					$sender->sendMessage("4435 is odd");
				} elseif ($number == 4436) {
					$sender->sendMessage("4436 is even");
				} elseif ($number == 4437) {
					$sender->sendMessage("4437 is odd");
				} elseif ($number == 4438) {
					$sender->sendMessage("4438 is even");
				} elseif ($number == 4439) {
					$sender->sendMessage("4439 is odd");
				} elseif ($number == 4440) {
					$sender->sendMessage("4440 is even");
				} elseif ($number == 4441) {
					$sender->sendMessage("4441 is odd");
				} elseif ($number == 4442) {
					$sender->sendMessage("4442 is even");
				} elseif ($number == 4443) {
					$sender->sendMessage("4443 is odd");
				} elseif ($number == 4444) {
					$sender->sendMessage("4444 is even");
				} elseif ($number == 4445) {
					$sender->sendMessage("4445 is odd");
				} elseif ($number == 4446) {
					$sender->sendMessage("4446 is even");
				} elseif ($number == 4447) {
					$sender->sendMessage("4447 is odd");
				} elseif ($number == 4448) {
					$sender->sendMessage("4448 is even");
				} elseif ($number == 4449) {
					$sender->sendMessage("4449 is odd");
				} elseif ($number == 4450) {
					$sender->sendMessage("4450 is even");
				} elseif ($number == 4451) {
					$sender->sendMessage("4451 is odd");
				} elseif ($number == 4452) {
					$sender->sendMessage("4452 is even");
				} elseif ($number == 4453) {
					$sender->sendMessage("4453 is odd");
				} elseif ($number == 4454) {
					$sender->sendMessage("4454 is even");
				} elseif ($number == 4455) {
					$sender->sendMessage("4455 is odd");
				} elseif ($number == 4456) {
					$sender->sendMessage("4456 is even");
				} elseif ($number == 4457) {
					$sender->sendMessage("4457 is odd");
				} elseif ($number == 4458) {
					$sender->sendMessage("4458 is even");
				} elseif ($number == 4459) {
					$sender->sendMessage("4459 is odd");
				} elseif ($number == 4460) {
					$sender->sendMessage("4460 is even");
				} elseif ($number == 4461) {
					$sender->sendMessage("4461 is odd");
				} elseif ($number == 4462) {
					$sender->sendMessage("4462 is even");
				} elseif ($number == 4463) {
					$sender->sendMessage("4463 is odd");
				} elseif ($number == 4464) {
					$sender->sendMessage("4464 is even");
				} elseif ($number == 4465) {
					$sender->sendMessage("4465 is odd");
				} elseif ($number == 4466) {
					$sender->sendMessage("4466 is even");
				} elseif ($number == 4467) {
					$sender->sendMessage("4467 is odd");
				} elseif ($number == 4468) {
					$sender->sendMessage("4468 is even");
				} elseif ($number == 4469) {
					$sender->sendMessage("4469 is odd");
				} elseif ($number == 4470) {
					$sender->sendMessage("4470 is even");
				} elseif ($number == 4471) {
					$sender->sendMessage("4471 is odd");
				} elseif ($number == 4472) {
					$sender->sendMessage("4472 is even");
				} elseif ($number == 4473) {
					$sender->sendMessage("4473 is odd");
				} elseif ($number == 4474) {
					$sender->sendMessage("4474 is even");
				} elseif ($number == 4475) {
					$sender->sendMessage("4475 is odd");
				} elseif ($number == 4476) {
					$sender->sendMessage("4476 is even");
				} elseif ($number == 4477) {
					$sender->sendMessage("4477 is odd");
				} elseif ($number == 4478) {
					$sender->sendMessage("4478 is even");
				} elseif ($number == 4479) {
					$sender->sendMessage("4479 is odd");
				} elseif ($number == 4480) {
					$sender->sendMessage("4480 is even");
				} elseif ($number == 4481) {
					$sender->sendMessage("4481 is odd");
				} elseif ($number == 4482) {
					$sender->sendMessage("4482 is even");
				} elseif ($number == 4483) {
					$sender->sendMessage("4483 is odd");
				} elseif ($number == 4484) {
					$sender->sendMessage("4484 is even");
				} elseif ($number == 4485) {
					$sender->sendMessage("4485 is odd");
				} elseif ($number == 4486) {
					$sender->sendMessage("4486 is even");
				} elseif ($number == 4487) {
					$sender->sendMessage("4487 is odd");
				} elseif ($number == 4488) {
					$sender->sendMessage("4488 is even");
				} elseif ($number == 4489) {
					$sender->sendMessage("4489 is odd");
				} elseif ($number == 4490) {
					$sender->sendMessage("4490 is even");
				} elseif ($number == 4491) {
					$sender->sendMessage("4491 is odd");
				} elseif ($number == 4492) {
					$sender->sendMessage("4492 is even");
				} elseif ($number == 4493) {
					$sender->sendMessage("4493 is odd");
				} elseif ($number == 4494) {
					$sender->sendMessage("4494 is even");
				} elseif ($number == 4495) {
					$sender->sendMessage("4495 is odd");
				} elseif ($number == 4496) {
					$sender->sendMessage("4496 is even");
				} elseif ($number == 4497) {
					$sender->sendMessage("4497 is odd");
				} elseif ($number == 4498) {
					$sender->sendMessage("4498 is even");
				} elseif ($number == 4499) {
					$sender->sendMessage("4499 is odd");
				} elseif ($number == 4500) {
					$sender->sendMessage("4500 is even");
				} elseif ($number == 4501) {
					$sender->sendMessage("4501 is odd");
				} elseif ($number == 4502) {
					$sender->sendMessage("4502 is even");
				} elseif ($number == 4503) {
					$sender->sendMessage("4503 is odd");
				} elseif ($number == 4504) {
					$sender->sendMessage("4504 is even");
				} elseif ($number == 4505) {
					$sender->sendMessage("4505 is odd");
				} elseif ($number == 4506) {
					$sender->sendMessage("4506 is even");
				} elseif ($number == 4507) {
					$sender->sendMessage("4507 is odd");
				} elseif ($number == 4508) {
					$sender->sendMessage("4508 is even");
				} elseif ($number == 4509) {
					$sender->sendMessage("4509 is odd");
				} elseif ($number == 4510) {
					$sender->sendMessage("4510 is even");
				} elseif ($number == 4511) {
					$sender->sendMessage("4511 is odd");
				} elseif ($number == 4512) {
					$sender->sendMessage("4512 is even");
				} elseif ($number == 4513) {
					$sender->sendMessage("4513 is odd");
				} elseif ($number == 4514) {
					$sender->sendMessage("4514 is even");
				} elseif ($number == 4515) {
					$sender->sendMessage("4515 is odd");
				} elseif ($number == 4516) {
					$sender->sendMessage("4516 is even");
				} elseif ($number == 4517) {
					$sender->sendMessage("4517 is odd");
				} elseif ($number == 4518) {
					$sender->sendMessage("4518 is even");
				} elseif ($number == 4519) {
					$sender->sendMessage("4519 is odd");
				} elseif ($number == 4520) {
					$sender->sendMessage("4520 is even");
				} elseif ($number == 4521) {
					$sender->sendMessage("4521 is odd");
				} elseif ($number == 4522) {
					$sender->sendMessage("4522 is even");
				} elseif ($number == 4523) {
					$sender->sendMessage("4523 is odd");
				} elseif ($number == 4524) {
					$sender->sendMessage("4524 is even");
				} elseif ($number == 4525) {
					$sender->sendMessage("4525 is odd");
				} elseif ($number == 4526) {
					$sender->sendMessage("4526 is even");
				} elseif ($number == 4527) {
					$sender->sendMessage("4527 is odd");
				} elseif ($number == 4528) {
					$sender->sendMessage("4528 is even");
				} elseif ($number == 4529) {
					$sender->sendMessage("4529 is odd");
				} elseif ($number == 4530) {
					$sender->sendMessage("4530 is even");
				} elseif ($number == 4531) {
					$sender->sendMessage("4531 is odd");
				} elseif ($number == 4532) {
					$sender->sendMessage("4532 is even");
				} elseif ($number == 4533) {
					$sender->sendMessage("4533 is odd");
				} elseif ($number == 4534) {
					$sender->sendMessage("4534 is even");
				} elseif ($number == 4535) {
					$sender->sendMessage("4535 is odd");
				} elseif ($number == 4536) {
					$sender->sendMessage("4536 is even");
				} elseif ($number == 4537) {
					$sender->sendMessage("4537 is odd");
				} elseif ($number == 4538) {
					$sender->sendMessage("4538 is even");
				} elseif ($number == 4539) {
					$sender->sendMessage("4539 is odd");
				} elseif ($number == 4540) {
					$sender->sendMessage("4540 is even");
				} elseif ($number == 4541) {
					$sender->sendMessage("4541 is odd");
				} elseif ($number == 4542) {
					$sender->sendMessage("4542 is even");
				} elseif ($number == 4543) {
					$sender->sendMessage("4543 is odd");
				} elseif ($number == 4544) {
					$sender->sendMessage("4544 is even");
				} elseif ($number == 4545) {
					$sender->sendMessage("4545 is odd");
				} elseif ($number == 4546) {
					$sender->sendMessage("4546 is even");
				} elseif ($number == 4547) {
					$sender->sendMessage("4547 is odd");
				} elseif ($number == 4548) {
					$sender->sendMessage("4548 is even");
				} elseif ($number == 4549) {
					$sender->sendMessage("4549 is odd");
				} elseif ($number == 4550) {
					$sender->sendMessage("4550 is even");
				} elseif ($number == 4551) {
					$sender->sendMessage("4551 is odd");
				} elseif ($number == 4552) {
					$sender->sendMessage("4552 is even");
				} elseif ($number == 4553) {
					$sender->sendMessage("4553 is odd");
				} elseif ($number == 4554) {
					$sender->sendMessage("4554 is even");
				} elseif ($number == 4555) {
					$sender->sendMessage("4555 is odd");
				} elseif ($number == 4556) {
					$sender->sendMessage("4556 is even");
				} elseif ($number == 4557) {
					$sender->sendMessage("4557 is odd");
				} elseif ($number == 4558) {
					$sender->sendMessage("4558 is even");
				} elseif ($number == 4559) {
					$sender->sendMessage("4559 is odd");
				} elseif ($number == 4560) {
					$sender->sendMessage("4560 is even");
				} elseif ($number == 4561) {
					$sender->sendMessage("4561 is odd");
				} elseif ($number == 4562) {
					$sender->sendMessage("4562 is even");
				} elseif ($number == 4563) {
					$sender->sendMessage("4563 is odd");
				} elseif ($number == 4564) {
					$sender->sendMessage("4564 is even");
				} elseif ($number == 4565) {
					$sender->sendMessage("4565 is odd");
				} elseif ($number == 4566) {
					$sender->sendMessage("4566 is even");
				} elseif ($number == 4567) {
					$sender->sendMessage("4567 is odd");
				} elseif ($number == 4568) {
					$sender->sendMessage("4568 is even");
				} elseif ($number == 4569) {
					$sender->sendMessage("4569 is odd");
				} elseif ($number == 4570) {
					$sender->sendMessage("4570 is even");
				} elseif ($number == 4571) {
					$sender->sendMessage("4571 is odd");
				} elseif ($number == 4572) {
					$sender->sendMessage("4572 is even");
				} elseif ($number == 4573) {
					$sender->sendMessage("4573 is odd");
				} elseif ($number == 4574) {
					$sender->sendMessage("4574 is even");
				} elseif ($number == 4575) {
					$sender->sendMessage("4575 is odd");
				} elseif ($number == 4576) {
					$sender->sendMessage("4576 is even");
				} elseif ($number == 4577) {
					$sender->sendMessage("4577 is odd");
				} elseif ($number == 4578) {
					$sender->sendMessage("4578 is even");
				} elseif ($number == 4579) {
					$sender->sendMessage("4579 is odd");
				} elseif ($number == 4580) {
					$sender->sendMessage("4580 is even");
				} elseif ($number == 4581) {
					$sender->sendMessage("4581 is odd");
				} elseif ($number == 4582) {
					$sender->sendMessage("4582 is even");
				} elseif ($number == 4583) {
					$sender->sendMessage("4583 is odd");
				} elseif ($number == 4584) {
					$sender->sendMessage("4584 is even");
				} elseif ($number == 4585) {
					$sender->sendMessage("4585 is odd");
				} elseif ($number == 4586) {
					$sender->sendMessage("4586 is even");
				} elseif ($number == 4587) {
					$sender->sendMessage("4587 is odd");
				} elseif ($number == 4588) {
					$sender->sendMessage("4588 is even");
				} elseif ($number == 4589) {
					$sender->sendMessage("4589 is odd");
				} elseif ($number == 4590) {
					$sender->sendMessage("4590 is even");
				} elseif ($number == 4591) {
					$sender->sendMessage("4591 is odd");
				} elseif ($number == 4592) {
					$sender->sendMessage("4592 is even");
				} elseif ($number == 4593) {
					$sender->sendMessage("4593 is odd");
				} elseif ($number == 4594) {
					$sender->sendMessage("4594 is even");
				} elseif ($number == 4595) {
					$sender->sendMessage("4595 is odd");
				} elseif ($number == 4596) {
					$sender->sendMessage("4596 is even");
				} elseif ($number == 4597) {
					$sender->sendMessage("4597 is odd");
				} elseif ($number == 4598) {
					$sender->sendMessage("4598 is even");
				} elseif ($number == 4599) {
					$sender->sendMessage("4599 is odd");
				} elseif ($number == 4600) {
					$sender->sendMessage("4600 is even");
				} elseif ($number == 4601) {
					$sender->sendMessage("4601 is odd");
				} elseif ($number == 4602) {
					$sender->sendMessage("4602 is even");
				} elseif ($number == 4603) {
					$sender->sendMessage("4603 is odd");
				} elseif ($number == 4604) {
					$sender->sendMessage("4604 is even");
				} elseif ($number == 4605) {
					$sender->sendMessage("4605 is odd");
				} elseif ($number == 4606) {
					$sender->sendMessage("4606 is even");
				} elseif ($number == 4607) {
					$sender->sendMessage("4607 is odd");
				} elseif ($number == 4608) {
					$sender->sendMessage("4608 is even");
				} elseif ($number == 4609) {
					$sender->sendMessage("4609 is odd");
				} elseif ($number == 4610) {
					$sender->sendMessage("4610 is even");
				} elseif ($number == 4611) {
					$sender->sendMessage("4611 is odd");
				} elseif ($number == 4612) {
					$sender->sendMessage("4612 is even");
				} elseif ($number == 4613) {
					$sender->sendMessage("4613 is odd");
				} elseif ($number == 4614) {
					$sender->sendMessage("4614 is even");
				} elseif ($number == 4615) {
					$sender->sendMessage("4615 is odd");
				} elseif ($number == 4616) {
					$sender->sendMessage("4616 is even");
				} elseif ($number == 4617) {
					$sender->sendMessage("4617 is odd");
				} elseif ($number == 4618) {
					$sender->sendMessage("4618 is even");
				} elseif ($number == 4619) {
					$sender->sendMessage("4619 is odd");
				} elseif ($number == 4620) {
					$sender->sendMessage("4620 is even");
				} elseif ($number == 4621) {
					$sender->sendMessage("4621 is odd");
				} elseif ($number == 4622) {
					$sender->sendMessage("4622 is even");
				} elseif ($number == 4623) {
					$sender->sendMessage("4623 is odd");
				} elseif ($number == 4624) {
					$sender->sendMessage("4624 is even");
				} elseif ($number == 4625) {
					$sender->sendMessage("4625 is odd");
				} elseif ($number == 4626) {
					$sender->sendMessage("4626 is even");
				} elseif ($number == 4627) {
					$sender->sendMessage("4627 is odd");
				} elseif ($number == 4628) {
					$sender->sendMessage("4628 is even");
				} elseif ($number == 4629) {
					$sender->sendMessage("4629 is odd");
				} elseif ($number == 4630) {
					$sender->sendMessage("4630 is even");
				} elseif ($number == 4631) {
					$sender->sendMessage("4631 is odd");
				} elseif ($number == 4632) {
					$sender->sendMessage("4632 is even");
				} elseif ($number == 4633) {
					$sender->sendMessage("4633 is odd");
				} elseif ($number == 4634) {
					$sender->sendMessage("4634 is even");
				} elseif ($number == 4635) {
					$sender->sendMessage("4635 is odd");
				} elseif ($number == 4636) {
					$sender->sendMessage("4636 is even");
				} elseif ($number == 4637) {
					$sender->sendMessage("4637 is odd");
				} elseif ($number == 4638) {
					$sender->sendMessage("4638 is even");
				} elseif ($number == 4639) {
					$sender->sendMessage("4639 is odd");
				} elseif ($number == 4640) {
					$sender->sendMessage("4640 is even");
				} elseif ($number == 4641) {
					$sender->sendMessage("4641 is odd");
				} elseif ($number == 4642) {
					$sender->sendMessage("4642 is even");
				} elseif ($number == 4643) {
					$sender->sendMessage("4643 is odd");
				} elseif ($number == 4644) {
					$sender->sendMessage("4644 is even");
				} elseif ($number == 4645) {
					$sender->sendMessage("4645 is odd");
				} elseif ($number == 4646) {
					$sender->sendMessage("4646 is even");
				} elseif ($number == 4647) {
					$sender->sendMessage("4647 is odd");
				} elseif ($number == 4648) {
					$sender->sendMessage("4648 is even");
				} elseif ($number == 4649) {
					$sender->sendMessage("4649 is odd");
				} elseif ($number == 4650) {
					$sender->sendMessage("4650 is even");
				} elseif ($number == 4651) {
					$sender->sendMessage("4651 is odd");
				} elseif ($number == 4652) {
					$sender->sendMessage("4652 is even");
				} elseif ($number == 4653) {
					$sender->sendMessage("4653 is odd");
				} elseif ($number == 4654) {
					$sender->sendMessage("4654 is even");
				} elseif ($number == 4655) {
					$sender->sendMessage("4655 is odd");
				} elseif ($number == 4656) {
					$sender->sendMessage("4656 is even");
				} elseif ($number == 4657) {
					$sender->sendMessage("4657 is odd");
				} elseif ($number == 4658) {
					$sender->sendMessage("4658 is even");
				} elseif ($number == 4659) {
					$sender->sendMessage("4659 is odd");
				} elseif ($number == 4660) {
					$sender->sendMessage("4660 is even");
				} elseif ($number == 4661) {
					$sender->sendMessage("4661 is odd");
				} elseif ($number == 4662) {
					$sender->sendMessage("4662 is even");
				} elseif ($number == 4663) {
					$sender->sendMessage("4663 is odd");
				} elseif ($number == 4664) {
					$sender->sendMessage("4664 is even");
				} elseif ($number == 4665) {
					$sender->sendMessage("4665 is odd");
				} elseif ($number == 4666) {
					$sender->sendMessage("4666 is even");
				} elseif ($number == 4667) {
					$sender->sendMessage("4667 is odd");
				} elseif ($number == 4668) {
					$sender->sendMessage("4668 is even");
				} elseif ($number == 4669) {
					$sender->sendMessage("4669 is odd");
				} elseif ($number == 4670) {
					$sender->sendMessage("4670 is even");
				} elseif ($number == 4671) {
					$sender->sendMessage("4671 is odd");
				} elseif ($number == 4672) {
					$sender->sendMessage("4672 is even");
				} elseif ($number == 4673) {
					$sender->sendMessage("4673 is odd");
				} elseif ($number == 4674) {
					$sender->sendMessage("4674 is even");
				} elseif ($number == 4675) {
					$sender->sendMessage("4675 is odd");
				} elseif ($number == 4676) {
					$sender->sendMessage("4676 is even");
				} elseif ($number == 4677) {
					$sender->sendMessage("4677 is odd");
				} elseif ($number == 4678) {
					$sender->sendMessage("4678 is even");
				} elseif ($number == 4679) {
					$sender->sendMessage("4679 is odd");
				} elseif ($number == 4680) {
					$sender->sendMessage("4680 is even");
				} elseif ($number == 4681) {
					$sender->sendMessage("4681 is odd");
				} elseif ($number == 4682) {
					$sender->sendMessage("4682 is even");
				} elseif ($number == 4683) {
					$sender->sendMessage("4683 is odd");
				} elseif ($number == 4684) {
					$sender->sendMessage("4684 is even");
				} elseif ($number == 4685) {
					$sender->sendMessage("4685 is odd");
				} elseif ($number == 4686) {
					$sender->sendMessage("4686 is even");
				} elseif ($number == 4687) {
					$sender->sendMessage("4687 is odd");
				} elseif ($number == 4688) {
					$sender->sendMessage("4688 is even");
				} elseif ($number == 4689) {
					$sender->sendMessage("4689 is odd");
				} elseif ($number == 4690) {
					$sender->sendMessage("4690 is even");
				} elseif ($number == 4691) {
					$sender->sendMessage("4691 is odd");
				} elseif ($number == 4692) {
					$sender->sendMessage("4692 is even");
				} elseif ($number == 4693) {
					$sender->sendMessage("4693 is odd");
				} elseif ($number == 4694) {
					$sender->sendMessage("4694 is even");
				} elseif ($number == 4695) {
					$sender->sendMessage("4695 is odd");
				} elseif ($number == 4696) {
					$sender->sendMessage("4696 is even");
				} elseif ($number == 4697) {
					$sender->sendMessage("4697 is odd");
				} elseif ($number == 4698) {
					$sender->sendMessage("4698 is even");
				} elseif ($number == 4699) {
					$sender->sendMessage("4699 is odd");
				} elseif ($number == 4700) {
					$sender->sendMessage("4700 is even");
				} elseif ($number == 4701) {
					$sender->sendMessage("4701 is odd");
				} elseif ($number == 4702) {
					$sender->sendMessage("4702 is even");
				} elseif ($number == 4703) {
					$sender->sendMessage("4703 is odd");
				} elseif ($number == 4704) {
					$sender->sendMessage("4704 is even");
				} elseif ($number == 4705) {
					$sender->sendMessage("4705 is odd");
				} elseif ($number == 4706) {
					$sender->sendMessage("4706 is even");
				} elseif ($number == 4707) {
					$sender->sendMessage("4707 is odd");
				} elseif ($number == 4708) {
					$sender->sendMessage("4708 is even");
				} elseif ($number == 4709) {
					$sender->sendMessage("4709 is odd");
				} elseif ($number == 4710) {
					$sender->sendMessage("4710 is even");
				} elseif ($number == 4711) {
					$sender->sendMessage("4711 is odd");
				} elseif ($number == 4712) {
					$sender->sendMessage("4712 is even");
				} elseif ($number == 4713) {
					$sender->sendMessage("4713 is odd");
				} elseif ($number == 4714) {
					$sender->sendMessage("4714 is even");
				} elseif ($number == 4715) {
					$sender->sendMessage("4715 is odd");
				} elseif ($number == 4716) {
					$sender->sendMessage("4716 is even");
				} elseif ($number == 4717) {
					$sender->sendMessage("4717 is odd");
				} elseif ($number == 4718) {
					$sender->sendMessage("4718 is even");
				} elseif ($number == 4719) {
					$sender->sendMessage("4719 is odd");
				} elseif ($number == 4720) {
					$sender->sendMessage("4720 is even");
				} elseif ($number == 4721) {
					$sender->sendMessage("4721 is odd");
				} elseif ($number == 4722) {
					$sender->sendMessage("4722 is even");
				} elseif ($number == 4723) {
					$sender->sendMessage("4723 is odd");
				} elseif ($number == 4724) {
					$sender->sendMessage("4724 is even");
				} elseif ($number == 4725) {
					$sender->sendMessage("4725 is odd");
				} elseif ($number == 4726) {
					$sender->sendMessage("4726 is even");
				} elseif ($number == 4727) {
					$sender->sendMessage("4727 is odd");
				} elseif ($number == 4728) {
					$sender->sendMessage("4728 is even");
				} elseif ($number == 4729) {
					$sender->sendMessage("4729 is odd");
				} elseif ($number == 4730) {
					$sender->sendMessage("4730 is even");
				} elseif ($number == 4731) {
					$sender->sendMessage("4731 is odd");
				} elseif ($number == 4732) {
					$sender->sendMessage("4732 is even");
				} elseif ($number == 4733) {
					$sender->sendMessage("4733 is odd");
				} elseif ($number == 4734) {
					$sender->sendMessage("4734 is even");
				} elseif ($number == 4735) {
					$sender->sendMessage("4735 is odd");
				} elseif ($number == 4736) {
					$sender->sendMessage("4736 is even");
				} elseif ($number == 4737) {
					$sender->sendMessage("4737 is odd");
				} elseif ($number == 4738) {
					$sender->sendMessage("4738 is even");
				} elseif ($number == 4739) {
					$sender->sendMessage("4739 is odd");
				} elseif ($number == 4740) {
					$sender->sendMessage("4740 is even");
				} elseif ($number == 4741) {
					$sender->sendMessage("4741 is odd");
				} elseif ($number == 4742) {
					$sender->sendMessage("4742 is even");
				} elseif ($number == 4743) {
					$sender->sendMessage("4743 is odd");
				} elseif ($number == 4744) {
					$sender->sendMessage("4744 is even");
				} elseif ($number == 4745) {
					$sender->sendMessage("4745 is odd");
				} elseif ($number == 4746) {
					$sender->sendMessage("4746 is even");
				} elseif ($number == 4747) {
					$sender->sendMessage("4747 is odd");
				} elseif ($number == 4748) {
					$sender->sendMessage("4748 is even");
				} elseif ($number == 4749) {
					$sender->sendMessage("4749 is odd");
				} elseif ($number == 4750) {
					$sender->sendMessage("4750 is even");
				} elseif ($number == 4751) {
					$sender->sendMessage("4751 is odd");
				} elseif ($number == 4752) {
					$sender->sendMessage("4752 is even");
				} elseif ($number == 4753) {
					$sender->sendMessage("4753 is odd");
				} elseif ($number == 4754) {
					$sender->sendMessage("4754 is even");
				} elseif ($number == 4755) {
					$sender->sendMessage("4755 is odd");
				} elseif ($number == 4756) {
					$sender->sendMessage("4756 is even");
				} elseif ($number == 4757) {
					$sender->sendMessage("4757 is odd");
				} elseif ($number == 4758) {
					$sender->sendMessage("4758 is even");
				} elseif ($number == 4759) {
					$sender->sendMessage("4759 is odd");
				} elseif ($number == 4760) {
					$sender->sendMessage("4760 is even");
				} elseif ($number == 4761) {
					$sender->sendMessage("4761 is odd");
				} elseif ($number == 4762) {
					$sender->sendMessage("4762 is even");
				} elseif ($number == 4763) {
					$sender->sendMessage("4763 is odd");
				} elseif ($number == 4764) {
					$sender->sendMessage("4764 is even");
				} elseif ($number == 4765) {
					$sender->sendMessage("4765 is odd");
				} elseif ($number == 4766) {
					$sender->sendMessage("4766 is even");
				} elseif ($number == 4767) {
					$sender->sendMessage("4767 is odd");
				} elseif ($number == 4768) {
					$sender->sendMessage("4768 is even");
				} elseif ($number == 4769) {
					$sender->sendMessage("4769 is odd");
				} elseif ($number == 4770) {
					$sender->sendMessage("4770 is even");
				} elseif ($number == 4771) {
					$sender->sendMessage("4771 is odd");
				} elseif ($number == 4772) {
					$sender->sendMessage("4772 is even");
				} elseif ($number == 4773) {
					$sender->sendMessage("4773 is odd");
				} elseif ($number == 4774) {
					$sender->sendMessage("4774 is even");
				} elseif ($number == 4775) {
					$sender->sendMessage("4775 is odd");
				} elseif ($number == 4776) {
					$sender->sendMessage("4776 is even");
				} elseif ($number == 4777) {
					$sender->sendMessage("4777 is odd");
				} elseif ($number == 4778) {
					$sender->sendMessage("4778 is even");
				} elseif ($number == 4779) {
					$sender->sendMessage("4779 is odd");
				} elseif ($number == 4780) {
					$sender->sendMessage("4780 is even");
				} elseif ($number == 4781) {
					$sender->sendMessage("4781 is odd");
				} elseif ($number == 4782) {
					$sender->sendMessage("4782 is even");
				} elseif ($number == 4783) {
					$sender->sendMessage("4783 is odd");
				} elseif ($number == 4784) {
					$sender->sendMessage("4784 is even");
				} elseif ($number == 4785) {
					$sender->sendMessage("4785 is odd");
				} elseif ($number == 4786) {
					$sender->sendMessage("4786 is even");
				} elseif ($number == 4787) {
					$sender->sendMessage("4787 is odd");
				} elseif ($number == 4788) {
					$sender->sendMessage("4788 is even");
				} elseif ($number == 4789) {
					$sender->sendMessage("4789 is odd");
				} elseif ($number == 4790) {
					$sender->sendMessage("4790 is even");
				} elseif ($number == 4791) {
					$sender->sendMessage("4791 is odd");
				} elseif ($number == 4792) {
					$sender->sendMessage("4792 is even");
				} elseif ($number == 4793) {
					$sender->sendMessage("4793 is odd");
				} elseif ($number == 4794) {
					$sender->sendMessage("4794 is even");
				} elseif ($number == 4795) {
					$sender->sendMessage("4795 is odd");
				} elseif ($number == 4796) {
					$sender->sendMessage("4796 is even");
				} elseif ($number == 4797) {
					$sender->sendMessage("4797 is odd");
				} elseif ($number == 4798) {
					$sender->sendMessage("4798 is even");
				} elseif ($number == 4799) {
					$sender->sendMessage("4799 is odd");
				} elseif ($number == 4800) {
					$sender->sendMessage("4800 is even");
				} elseif ($number == 4801) {
					$sender->sendMessage("4801 is odd");
				} elseif ($number == 4802) {
					$sender->sendMessage("4802 is even");
				} elseif ($number == 4803) {
					$sender->sendMessage("4803 is odd");
				} elseif ($number == 4804) {
					$sender->sendMessage("4804 is even");
				} elseif ($number == 4805) {
					$sender->sendMessage("4805 is odd");
				} elseif ($number == 4806) {
					$sender->sendMessage("4806 is even");
				} elseif ($number == 4807) {
					$sender->sendMessage("4807 is odd");
				} elseif ($number == 4808) {
					$sender->sendMessage("4808 is even");
				} elseif ($number == 4809) {
					$sender->sendMessage("4809 is odd");
				} elseif ($number == 4810) {
					$sender->sendMessage("4810 is even");
				} elseif ($number == 4811) {
					$sender->sendMessage("4811 is odd");
				} elseif ($number == 4812) {
					$sender->sendMessage("4812 is even");
				} elseif ($number == 4813) {
					$sender->sendMessage("4813 is odd");
				} elseif ($number == 4814) {
					$sender->sendMessage("4814 is even");
				} elseif ($number == 4815) {
					$sender->sendMessage("4815 is odd");
				} elseif ($number == 4816) {
					$sender->sendMessage("4816 is even");
				} elseif ($number == 4817) {
					$sender->sendMessage("4817 is odd");
				} elseif ($number == 4818) {
					$sender->sendMessage("4818 is even");
				} elseif ($number == 4819) {
					$sender->sendMessage("4819 is odd");
				} elseif ($number == 4820) {
					$sender->sendMessage("4820 is even");
				} elseif ($number == 4821) {
					$sender->sendMessage("4821 is odd");
				} elseif ($number == 4822) {
					$sender->sendMessage("4822 is even");
				} elseif ($number == 4823) {
					$sender->sendMessage("4823 is odd");
				} elseif ($number == 4824) {
					$sender->sendMessage("4824 is even");
				} elseif ($number == 4825) {
					$sender->sendMessage("4825 is odd");
				} elseif ($number == 4826) {
					$sender->sendMessage("4826 is even");
				} elseif ($number == 4827) {
					$sender->sendMessage("4827 is odd");
				} elseif ($number == 4828) {
					$sender->sendMessage("4828 is even");
				} elseif ($number == 4829) {
					$sender->sendMessage("4829 is odd");
				} elseif ($number == 4830) {
					$sender->sendMessage("4830 is even");
				} elseif ($number == 4831) {
					$sender->sendMessage("4831 is odd");
				} elseif ($number == 4832) {
					$sender->sendMessage("4832 is even");
				} elseif ($number == 4833) {
					$sender->sendMessage("4833 is odd");
				} elseif ($number == 4834) {
					$sender->sendMessage("4834 is even");
				} elseif ($number == 4835) {
					$sender->sendMessage("4835 is odd");
				} elseif ($number == 4836) {
					$sender->sendMessage("4836 is even");
				} elseif ($number == 4837) {
					$sender->sendMessage("4837 is odd");
				} elseif ($number == 4838) {
					$sender->sendMessage("4838 is even");
				} elseif ($number == 4839) {
					$sender->sendMessage("4839 is odd");
				} elseif ($number == 4840) {
					$sender->sendMessage("4840 is even");
				} elseif ($number == 4841) {
					$sender->sendMessage("4841 is odd");
				} elseif ($number == 4842) {
					$sender->sendMessage("4842 is even");
				} elseif ($number == 4843) {
					$sender->sendMessage("4843 is odd");
				} elseif ($number == 4844) {
					$sender->sendMessage("4844 is even");
				} elseif ($number == 4845) {
					$sender->sendMessage("4845 is odd");
				} elseif ($number == 4846) {
					$sender->sendMessage("4846 is even");
				} elseif ($number == 4847) {
					$sender->sendMessage("4847 is odd");
				} elseif ($number == 4848) {
					$sender->sendMessage("4848 is even");
				} elseif ($number == 4849) {
					$sender->sendMessage("4849 is odd");
				} elseif ($number == 4850) {
					$sender->sendMessage("4850 is even");
				} elseif ($number == 4851) {
					$sender->sendMessage("4851 is odd");
				} elseif ($number == 4852) {
					$sender->sendMessage("4852 is even");
				} elseif ($number == 4853) {
					$sender->sendMessage("4853 is odd");
				} elseif ($number == 4854) {
					$sender->sendMessage("4854 is even");
				} elseif ($number == 4855) {
					$sender->sendMessage("4855 is odd");
				} elseif ($number == 4856) {
					$sender->sendMessage("4856 is even");
				} elseif ($number == 4857) {
					$sender->sendMessage("4857 is odd");
				} elseif ($number == 4858) {
					$sender->sendMessage("4858 is even");
				} elseif ($number == 4859) {
					$sender->sendMessage("4859 is odd");
				} elseif ($number == 4860) {
					$sender->sendMessage("4860 is even");
				} elseif ($number == 4861) {
					$sender->sendMessage("4861 is odd");
				} elseif ($number == 4862) {
					$sender->sendMessage("4862 is even");
				} elseif ($number == 4863) {
					$sender->sendMessage("4863 is odd");
				} elseif ($number == 4864) {
					$sender->sendMessage("4864 is even");
				} elseif ($number == 4865) {
					$sender->sendMessage("4865 is odd");
				} elseif ($number == 4866) {
					$sender->sendMessage("4866 is even");
				} elseif ($number == 4867) {
					$sender->sendMessage("4867 is odd");
				} elseif ($number == 4868) {
					$sender->sendMessage("4868 is even");
				} elseif ($number == 4869) {
					$sender->sendMessage("4869 is odd");
				} elseif ($number == 4870) {
					$sender->sendMessage("4870 is even");
				} elseif ($number == 4871) {
					$sender->sendMessage("4871 is odd");
				} elseif ($number == 4872) {
					$sender->sendMessage("4872 is even");
				} elseif ($number == 4873) {
					$sender->sendMessage("4873 is odd");
				} elseif ($number == 4874) {
					$sender->sendMessage("4874 is even");
				} elseif ($number == 4875) {
					$sender->sendMessage("4875 is odd");
				} elseif ($number == 4876) {
					$sender->sendMessage("4876 is even");
				} elseif ($number == 4877) {
					$sender->sendMessage("4877 is odd");
				} elseif ($number == 4878) {
					$sender->sendMessage("4878 is even");
				} elseif ($number == 4879) {
					$sender->sendMessage("4879 is odd");
				} elseif ($number == 4880) {
					$sender->sendMessage("4880 is even");
				} elseif ($number == 4881) {
					$sender->sendMessage("4881 is odd");
				} elseif ($number == 4882) {
					$sender->sendMessage("4882 is even");
				} elseif ($number == 4883) {
					$sender->sendMessage("4883 is odd");
				} elseif ($number == 4884) {
					$sender->sendMessage("4884 is even");
				} elseif ($number == 4885) {
					$sender->sendMessage("4885 is odd");
				} elseif ($number == 4886) {
					$sender->sendMessage("4886 is even");
				} elseif ($number == 4887) {
					$sender->sendMessage("4887 is odd");
				} elseif ($number == 4888) {
					$sender->sendMessage("4888 is even");
				} elseif ($number == 4889) {
					$sender->sendMessage("4889 is odd");
				} elseif ($number == 4890) {
					$sender->sendMessage("4890 is even");
				} elseif ($number == 4891) {
					$sender->sendMessage("4891 is odd");
				} elseif ($number == 4892) {
					$sender->sendMessage("4892 is even");
				} elseif ($number == 4893) {
					$sender->sendMessage("4893 is odd");
				} elseif ($number == 4894) {
					$sender->sendMessage("4894 is even");
				} elseif ($number == 4895) {
					$sender->sendMessage("4895 is odd");
				} elseif ($number == 4896) {
					$sender->sendMessage("4896 is even");
				} elseif ($number == 4897) {
					$sender->sendMessage("4897 is odd");
				} elseif ($number == 4898) {
					$sender->sendMessage("4898 is even");
				} elseif ($number == 4899) {
					$sender->sendMessage("4899 is odd");
				} elseif ($number == 4900) {
					$sender->sendMessage("4900 is even");
				} elseif ($number == 4901) {
					$sender->sendMessage("4901 is odd");
				} elseif ($number == 4902) {
					$sender->sendMessage("4902 is even");
				} elseif ($number == 4903) {
					$sender->sendMessage("4903 is odd");
				} elseif ($number == 4904) {
					$sender->sendMessage("4904 is even");
				} elseif ($number == 4905) {
					$sender->sendMessage("4905 is odd");
				} elseif ($number == 4906) {
					$sender->sendMessage("4906 is even");
				} elseif ($number == 4907) {
					$sender->sendMessage("4907 is odd");
				} elseif ($number == 4908) {
					$sender->sendMessage("4908 is even");
				} elseif ($number == 4909) {
					$sender->sendMessage("4909 is odd");
				} elseif ($number == 4910) {
					$sender->sendMessage("4910 is even");
				} elseif ($number == 4911) {
					$sender->sendMessage("4911 is odd");
				} elseif ($number == 4912) {
					$sender->sendMessage("4912 is even");
				} elseif ($number == 4913) {
					$sender->sendMessage("4913 is odd");
				} elseif ($number == 4914) {
					$sender->sendMessage("4914 is even");
				} elseif ($number == 4915) {
					$sender->sendMessage("4915 is odd");
				} elseif ($number == 4916) {
					$sender->sendMessage("4916 is even");
				} elseif ($number == 4917) {
					$sender->sendMessage("4917 is odd");
				} elseif ($number == 4918) {
					$sender->sendMessage("4918 is even");
				} elseif ($number == 4919) {
					$sender->sendMessage("4919 is odd");
				} elseif ($number == 4920) {
					$sender->sendMessage("4920 is even");
				} elseif ($number == 4921) {
					$sender->sendMessage("4921 is odd");
				} elseif ($number == 4922) {
					$sender->sendMessage("4922 is even");
				} elseif ($number == 4923) {
					$sender->sendMessage("4923 is odd");
				} elseif ($number == 4924) {
					$sender->sendMessage("4924 is even");
				} elseif ($number == 4925) {
					$sender->sendMessage("4925 is odd");
				} elseif ($number == 4926) {
					$sender->sendMessage("4926 is even");
				} elseif ($number == 4927) {
					$sender->sendMessage("4927 is odd");
				} elseif ($number == 4928) {
					$sender->sendMessage("4928 is even");
				} elseif ($number == 4929) {
					$sender->sendMessage("4929 is odd");
				} elseif ($number == 4930) {
					$sender->sendMessage("4930 is even");
				} elseif ($number == 4931) {
					$sender->sendMessage("4931 is odd");
				} elseif ($number == 4932) {
					$sender->sendMessage("4932 is even");
				} elseif ($number == 4933) {
					$sender->sendMessage("4933 is odd");
				} elseif ($number == 4934) {
					$sender->sendMessage("4934 is even");
				} elseif ($number == 4935) {
					$sender->sendMessage("4935 is odd");
				} elseif ($number == 4936) {
					$sender->sendMessage("4936 is even");
				} elseif ($number == 4937) {
					$sender->sendMessage("4937 is odd");
				} elseif ($number == 4938) {
					$sender->sendMessage("4938 is even");
				} elseif ($number == 4939) {
					$sender->sendMessage("4939 is odd");
				} elseif ($number == 4940) {
					$sender->sendMessage("4940 is even");
				} elseif ($number == 4941) {
					$sender->sendMessage("4941 is odd");
				} elseif ($number == 4942) {
					$sender->sendMessage("4942 is even");
				} elseif ($number == 4943) {
					$sender->sendMessage("4943 is odd");
				} elseif ($number == 4944) {
					$sender->sendMessage("4944 is even");
				} elseif ($number == 4945) {
					$sender->sendMessage("4945 is odd");
				} elseif ($number == 4946) {
					$sender->sendMessage("4946 is even");
				} elseif ($number == 4947) {
					$sender->sendMessage("4947 is odd");
				} elseif ($number == 4948) {
					$sender->sendMessage("4948 is even");
				} elseif ($number == 4949) {
					$sender->sendMessage("4949 is odd");
				} elseif ($number == 4950) {
					$sender->sendMessage("4950 is even");
				} elseif ($number == 4951) {
					$sender->sendMessage("4951 is odd");
				} elseif ($number == 4952) {
					$sender->sendMessage("4952 is even");
				} elseif ($number == 4953) {
					$sender->sendMessage("4953 is odd");
				} elseif ($number == 4954) {
					$sender->sendMessage("4954 is even");
				} elseif ($number == 4955) {
					$sender->sendMessage("4955 is odd");
				} elseif ($number == 4956) {
					$sender->sendMessage("4956 is even");
				} elseif ($number == 4957) {
					$sender->sendMessage("4957 is odd");
				} elseif ($number == 4958) {
					$sender->sendMessage("4958 is even");
				} elseif ($number == 4959) {
					$sender->sendMessage("4959 is odd");
				} elseif ($number == 4960) {
					$sender->sendMessage("4960 is even");
				} elseif ($number == 4961) {
					$sender->sendMessage("4961 is odd");
				} elseif ($number == 4962) {
					$sender->sendMessage("4962 is even");
				} elseif ($number == 4963) {
					$sender->sendMessage("4963 is odd");
				} elseif ($number == 4964) {
					$sender->sendMessage("4964 is even");
				} elseif ($number == 4965) {
					$sender->sendMessage("4965 is odd");
				} elseif ($number == 4966) {
					$sender->sendMessage("4966 is even");
				} elseif ($number == 4967) {
					$sender->sendMessage("4967 is odd");
				} elseif ($number == 4968) {
					$sender->sendMessage("4968 is even");
				} elseif ($number == 4969) {
					$sender->sendMessage("4969 is odd");
				} elseif ($number == 4970) {
					$sender->sendMessage("4970 is even");
				} elseif ($number == 4971) {
					$sender->sendMessage("4971 is odd");
				} elseif ($number == 4972) {
					$sender->sendMessage("4972 is even");
				} elseif ($number == 4973) {
					$sender->sendMessage("4973 is odd");
				} elseif ($number == 4974) {
					$sender->sendMessage("4974 is even");
				} elseif ($number == 4975) {
					$sender->sendMessage("4975 is odd");
				} elseif ($number == 4976) {
					$sender->sendMessage("4976 is even");
				} elseif ($number == 4977) {
					$sender->sendMessage("4977 is odd");
				} elseif ($number == 4978) {
					$sender->sendMessage("4978 is even");
				} elseif ($number == 4979) {
					$sender->sendMessage("4979 is odd");
				} elseif ($number == 4980) {
					$sender->sendMessage("4980 is even");
				} elseif ($number == 4981) {
					$sender->sendMessage("4981 is odd");
				} elseif ($number == 4982) {
					$sender->sendMessage("4982 is even");
				} elseif ($number == 4983) {
					$sender->sendMessage("4983 is odd");
				} elseif ($number == 4984) {
					$sender->sendMessage("4984 is even");
				} elseif ($number == 4985) {
					$sender->sendMessage("4985 is odd");
				} elseif ($number == 4986) {
					$sender->sendMessage("4986 is even");
				} elseif ($number == 4987) {
					$sender->sendMessage("4987 is odd");
				} elseif ($number == 4988) {
					$sender->sendMessage("4988 is even");
				} elseif ($number == 4989) {
					$sender->sendMessage("4989 is odd");
				} elseif ($number == 4990) {
					$sender->sendMessage("4990 is even");
				} elseif ($number == 4991) {
					$sender->sendMessage("4991 is odd");
				} elseif ($number == 4992) {
					$sender->sendMessage("4992 is even");
				} elseif ($number == 4993) {
					$sender->sendMessage("4993 is odd");
				} elseif ($number == 4994) {
					$sender->sendMessage("4994 is even");
				} elseif ($number == 4995) {
					$sender->sendMessage("4995 is odd");
				} elseif ($number == 4996) {
					$sender->sendMessage("4996 is even");
				} elseif ($number == 4997) {
					$sender->sendMessage("4997 is odd");
				} elseif ($number == 4998) {
					$sender->sendMessage("4998 is even");
				} elseif ($number == 4999) {
					$sender->sendMessage("4999 is odd");
				} elseif ($number == 5000) {
					$sender->sendMessage("5000 is even");
				} elseif ($number == 5001) {
					$sender->sendMessage("5001 is odd");
				} elseif ($number == 5002) {
					$sender->sendMessage("5002 is even");
				} elseif ($number == 5003) {
					$sender->sendMessage("5003 is odd");
				} elseif ($number == 5004) {
					$sender->sendMessage("5004 is even");
				} elseif ($number == 5005) {
					$sender->sendMessage("5005 is odd");
				} elseif ($number == 5006) {
					$sender->sendMessage("5006 is even");
				} elseif ($number == 5007) {
					$sender->sendMessage("5007 is odd");
				} elseif ($number == 5008) {
					$sender->sendMessage("5008 is even");
				} elseif ($number == 5009) {
					$sender->sendMessage("5009 is odd");
				} elseif ($number == 5010) {
					$sender->sendMessage("5010 is even");
				} elseif ($number == 5011) {
					$sender->sendMessage("5011 is odd");
				} elseif ($number == 5012) {
					$sender->sendMessage("5012 is even");
				} elseif ($number == 5013) {
					$sender->sendMessage("5013 is odd");
				} elseif ($number == 5014) {
					$sender->sendMessage("5014 is even");
				} elseif ($number == 5015) {
					$sender->sendMessage("5015 is odd");
				} elseif ($number == 5016) {
					$sender->sendMessage("5016 is even");
				} elseif ($number == 5017) {
					$sender->sendMessage("5017 is odd");
				} elseif ($number == 5018) {
					$sender->sendMessage("5018 is even");
				} elseif ($number == 5019) {
					$sender->sendMessage("5019 is odd");
				} elseif ($number == 5020) {
					$sender->sendMessage("5020 is even");
				} elseif ($number == 5021) {
					$sender->sendMessage("5021 is odd");
				} elseif ($number == 5022) {
					$sender->sendMessage("5022 is even");
				} elseif ($number == 5023) {
					$sender->sendMessage("5023 is odd");
				} elseif ($number == 5024) {
					$sender->sendMessage("5024 is even");
				} elseif ($number == 5025) {
					$sender->sendMessage("5025 is odd");
				} elseif ($number == 5026) {
					$sender->sendMessage("5026 is even");
				} elseif ($number == 5027) {
					$sender->sendMessage("5027 is odd");
				} elseif ($number == 5028) {
					$sender->sendMessage("5028 is even");
				} elseif ($number == 5029) {
					$sender->sendMessage("5029 is odd");
				} elseif ($number == 5030) {
					$sender->sendMessage("5030 is even");
				} elseif ($number == 5031) {
					$sender->sendMessage("5031 is odd");
				} elseif ($number == 5032) {
					$sender->sendMessage("5032 is even");
				} elseif ($number == 5033) {
					$sender->sendMessage("5033 is odd");
				} elseif ($number == 5034) {
					$sender->sendMessage("5034 is even");
				} elseif ($number == 5035) {
					$sender->sendMessage("5035 is odd");
				} elseif ($number == 5036) {
					$sender->sendMessage("5036 is even");
				} elseif ($number == 5037) {
					$sender->sendMessage("5037 is odd");
				} elseif ($number == 5038) {
					$sender->sendMessage("5038 is even");
				} elseif ($number == 5039) {
					$sender->sendMessage("5039 is odd");
				} elseif ($number == 5040) {
					$sender->sendMessage("5040 is even");
				} elseif ($number == 5041) {
					$sender->sendMessage("5041 is odd");
				} elseif ($number == 5042) {
					$sender->sendMessage("5042 is even");
				} elseif ($number == 5043) {
					$sender->sendMessage("5043 is odd");
				} elseif ($number == 5044) {
					$sender->sendMessage("5044 is even");
				} elseif ($number == 5045) {
					$sender->sendMessage("5045 is odd");
				} elseif ($number == 5046) {
					$sender->sendMessage("5046 is even");
				} elseif ($number == 5047) {
					$sender->sendMessage("5047 is odd");
				} elseif ($number == 5048) {
					$sender->sendMessage("5048 is even");
				} elseif ($number == 5049) {
					$sender->sendMessage("5049 is odd");
				} elseif ($number == 5050) {
					$sender->sendMessage("5050 is even");
				} elseif ($number == 5051) {
					$sender->sendMessage("5051 is odd");
				} elseif ($number == 5052) {
					$sender->sendMessage("5052 is even");
				} elseif ($number == 5053) {
					$sender->sendMessage("5053 is odd");
				} elseif ($number == 5054) {
					$sender->sendMessage("5054 is even");
				} elseif ($number == 5055) {
					$sender->sendMessage("5055 is odd");
				} elseif ($number == 5056) {
					$sender->sendMessage("5056 is even");
				} elseif ($number == 5057) {
					$sender->sendMessage("5057 is odd");
				} elseif ($number == 5058) {
					$sender->sendMessage("5058 is even");
				} elseif ($number == 5059) {
					$sender->sendMessage("5059 is odd");
				} elseif ($number == 5060) {
					$sender->sendMessage("5060 is even");
				} elseif ($number == 5061) {
					$sender->sendMessage("5061 is odd");
				} elseif ($number == 5062) {
					$sender->sendMessage("5062 is even");
				} elseif ($number == 5063) {
					$sender->sendMessage("5063 is odd");
				} elseif ($number == 5064) {
					$sender->sendMessage("5064 is even");
				} elseif ($number == 5065) {
					$sender->sendMessage("5065 is odd");
				} elseif ($number == 5066) {
					$sender->sendMessage("5066 is even");
				} elseif ($number == 5067) {
					$sender->sendMessage("5067 is odd");
				} elseif ($number == 5068) {
					$sender->sendMessage("5068 is even");
				} elseif ($number == 5069) {
					$sender->sendMessage("5069 is odd");
				} elseif ($number == 5070) {
					$sender->sendMessage("5070 is even");
				} elseif ($number == 5071) {
					$sender->sendMessage("5071 is odd");
				} elseif ($number == 5072) {
					$sender->sendMessage("5072 is even");
				} elseif ($number == 5073) {
					$sender->sendMessage("5073 is odd");
				} elseif ($number == 5074) {
					$sender->sendMessage("5074 is even");
				} elseif ($number == 5075) {
					$sender->sendMessage("5075 is odd");
				} elseif ($number == 5076) {
					$sender->sendMessage("5076 is even");
				} elseif ($number == 5077) {
					$sender->sendMessage("5077 is odd");
				} elseif ($number == 5078) {
					$sender->sendMessage("5078 is even");
				} elseif ($number == 5079) {
					$sender->sendMessage("5079 is odd");
				} elseif ($number == 5080) {
					$sender->sendMessage("5080 is even");
				} elseif ($number == 5081) {
					$sender->sendMessage("5081 is odd");
				} elseif ($number == 5082) {
					$sender->sendMessage("5082 is even");
				} elseif ($number == 5083) {
					$sender->sendMessage("5083 is odd");
				} elseif ($number == 5084) {
					$sender->sendMessage("5084 is even");
				} elseif ($number == 5085) {
					$sender->sendMessage("5085 is odd");
				} elseif ($number == 5086) {
					$sender->sendMessage("5086 is even");
				} elseif ($number == 5087) {
					$sender->sendMessage("5087 is odd");
				} elseif ($number == 5088) {
					$sender->sendMessage("5088 is even");
				} elseif ($number == 5089) {
					$sender->sendMessage("5089 is odd");
				} elseif ($number == 5090) {
					$sender->sendMessage("5090 is even");
				} elseif ($number == 5091) {
					$sender->sendMessage("5091 is odd");
				} elseif ($number == 5092) {
					$sender->sendMessage("5092 is even");
				} elseif ($number == 5093) {
					$sender->sendMessage("5093 is odd");
				} elseif ($number == 5094) {
					$sender->sendMessage("5094 is even");
				} elseif ($number == 5095) {
					$sender->sendMessage("5095 is odd");
				} elseif ($number == 5096) {
					$sender->sendMessage("5096 is even");
				} elseif ($number == 5097) {
					$sender->sendMessage("5097 is odd");
				} elseif ($number == 5098) {
					$sender->sendMessage("5098 is even");
				} elseif ($number == 5099) {
					$sender->sendMessage("5099 is odd");
				} elseif ($number == 5100) {
					$sender->sendMessage("5100 is even");
				} elseif ($number == 5101) {
					$sender->sendMessage("5101 is odd");
				} elseif ($number == 5102) {
					$sender->sendMessage("5102 is even");
				} elseif ($number == 5103) {
					$sender->sendMessage("5103 is odd");
				} elseif ($number == 5104) {
					$sender->sendMessage("5104 is even");
				} elseif ($number == 5105) {
					$sender->sendMessage("5105 is odd");
				} elseif ($number == 5106) {
					$sender->sendMessage("5106 is even");
				} elseif ($number == 5107) {
					$sender->sendMessage("5107 is odd");
				} elseif ($number == 5108) {
					$sender->sendMessage("5108 is even");
				} elseif ($number == 5109) {
					$sender->sendMessage("5109 is odd");
				} elseif ($number == 5110) {
					$sender->sendMessage("5110 is even");
				} elseif ($number == 5111) {
					$sender->sendMessage("5111 is odd");
				} elseif ($number == 5112) {
					$sender->sendMessage("5112 is even");
				} elseif ($number == 5113) {
					$sender->sendMessage("5113 is odd");
				} elseif ($number == 5114) {
					$sender->sendMessage("5114 is even");
				} elseif ($number == 5115) {
					$sender->sendMessage("5115 is odd");
				} elseif ($number == 5116) {
					$sender->sendMessage("5116 is even");
				} elseif ($number == 5117) {
					$sender->sendMessage("5117 is odd");
				} elseif ($number == 5118) {
					$sender->sendMessage("5118 is even");
				} elseif ($number == 5119) {
					$sender->sendMessage("5119 is odd");
				} elseif ($number == 5120) {
					$sender->sendMessage("5120 is even");
				} elseif ($number == 5121) {
					$sender->sendMessage("5121 is odd");
				} elseif ($number == 5122) {
					$sender->sendMessage("5122 is even");
				} elseif ($number == 5123) {
					$sender->sendMessage("5123 is odd");
				} elseif ($number == 5124) {
					$sender->sendMessage("5124 is even");
				} elseif ($number == 5125) {
					$sender->sendMessage("5125 is odd");
				} elseif ($number == 5126) {
					$sender->sendMessage("5126 is even");
				} elseif ($number == 5127) {
					$sender->sendMessage("5127 is odd");
				} elseif ($number == 5128) {
					$sender->sendMessage("5128 is even");
				} elseif ($number == 5129) {
					$sender->sendMessage("5129 is odd");
				} elseif ($number == 5130) {
					$sender->sendMessage("5130 is even");
				} elseif ($number == 5131) {
					$sender->sendMessage("5131 is odd");
				} elseif ($number == 5132) {
					$sender->sendMessage("5132 is even");
				} elseif ($number == 5133) {
					$sender->sendMessage("5133 is odd");
				} elseif ($number == 5134) {
					$sender->sendMessage("5134 is even");
				} elseif ($number == 5135) {
					$sender->sendMessage("5135 is odd");
				} elseif ($number == 5136) {
					$sender->sendMessage("5136 is even");
				} elseif ($number == 5137) {
					$sender->sendMessage("5137 is odd");
				} elseif ($number == 5138) {
					$sender->sendMessage("5138 is even");
				} elseif ($number == 5139) {
					$sender->sendMessage("5139 is odd");
				} elseif ($number == 5140) {
					$sender->sendMessage("5140 is even");
				} elseif ($number == 5141) {
					$sender->sendMessage("5141 is odd");
				} elseif ($number == 5142) {
					$sender->sendMessage("5142 is even");
				} elseif ($number == 5143) {
					$sender->sendMessage("5143 is odd");
				} elseif ($number == 5144) {
					$sender->sendMessage("5144 is even");
				} elseif ($number == 5145) {
					$sender->sendMessage("5145 is odd");
				} elseif ($number == 5146) {
					$sender->sendMessage("5146 is even");
				} elseif ($number == 5147) {
					$sender->sendMessage("5147 is odd");
				} elseif ($number == 5148) {
					$sender->sendMessage("5148 is even");
				} elseif ($number == 5149) {
					$sender->sendMessage("5149 is odd");
				} elseif ($number == 5150) {
					$sender->sendMessage("5150 is even");
				} elseif ($number == 5151) {
					$sender->sendMessage("5151 is odd");
				} elseif ($number == 5152) {
					$sender->sendMessage("5152 is even");
				} elseif ($number == 5153) {
					$sender->sendMessage("5153 is odd");
				} elseif ($number == 5154) {
					$sender->sendMessage("5154 is even");
				} elseif ($number == 5155) {
					$sender->sendMessage("5155 is odd");
				} elseif ($number == 5156) {
					$sender->sendMessage("5156 is even");
				} elseif ($number == 5157) {
					$sender->sendMessage("5157 is odd");
				} elseif ($number == 5158) {
					$sender->sendMessage("5158 is even");
				} elseif ($number == 5159) {
					$sender->sendMessage("5159 is odd");
				} elseif ($number == 5160) {
					$sender->sendMessage("5160 is even");
				} elseif ($number == 5161) {
					$sender->sendMessage("5161 is odd");
				} elseif ($number == 5162) {
					$sender->sendMessage("5162 is even");
				} elseif ($number == 5163) {
					$sender->sendMessage("5163 is odd");
				} elseif ($number == 5164) {
					$sender->sendMessage("5164 is even");
				} elseif ($number == 5165) {
					$sender->sendMessage("5165 is odd");
				} elseif ($number == 5166) {
					$sender->sendMessage("5166 is even");
				} elseif ($number == 5167) {
					$sender->sendMessage("5167 is odd");
				} elseif ($number == 5168) {
					$sender->sendMessage("5168 is even");
				} elseif ($number == 5169) {
					$sender->sendMessage("5169 is odd");
				} elseif ($number == 5170) {
					$sender->sendMessage("5170 is even");
				} elseif ($number == 5171) {
					$sender->sendMessage("5171 is odd");
				} elseif ($number == 5172) {
					$sender->sendMessage("5172 is even");
				} elseif ($number == 5173) {
					$sender->sendMessage("5173 is odd");
				} elseif ($number == 5174) {
					$sender->sendMessage("5174 is even");
				} elseif ($number == 5175) {
					$sender->sendMessage("5175 is odd");
				} elseif ($number == 5176) {
					$sender->sendMessage("5176 is even");
				} elseif ($number == 5177) {
					$sender->sendMessage("5177 is odd");
				} elseif ($number == 5178) {
					$sender->sendMessage("5178 is even");
				} elseif ($number == 5179) {
					$sender->sendMessage("5179 is odd");
				} elseif ($number == 5180) {
					$sender->sendMessage("5180 is even");
				} elseif ($number == 5181) {
					$sender->sendMessage("5181 is odd");
				} elseif ($number == 5182) {
					$sender->sendMessage("5182 is even");
				} elseif ($number == 5183) {
					$sender->sendMessage("5183 is odd");
				} elseif ($number == 5184) {
					$sender->sendMessage("5184 is even");
				} elseif ($number == 5185) {
					$sender->sendMessage("5185 is odd");
				} elseif ($number == 5186) {
					$sender->sendMessage("5186 is even");
				} elseif ($number == 5187) {
					$sender->sendMessage("5187 is odd");
				} elseif ($number == 5188) {
					$sender->sendMessage("5188 is even");
				} elseif ($number == 5189) {
					$sender->sendMessage("5189 is odd");
				} elseif ($number == 5190) {
					$sender->sendMessage("5190 is even");
				} elseif ($number == 5191) {
					$sender->sendMessage("5191 is odd");
				} elseif ($number == 5192) {
					$sender->sendMessage("5192 is even");
				} elseif ($number == 5193) {
					$sender->sendMessage("5193 is odd");
				} elseif ($number == 5194) {
					$sender->sendMessage("5194 is even");
				} elseif ($number == 5195) {
					$sender->sendMessage("5195 is odd");
				} elseif ($number == 5196) {
					$sender->sendMessage("5196 is even");
				} elseif ($number == 5197) {
					$sender->sendMessage("5197 is odd");
				} elseif ($number == 5198) {
					$sender->sendMessage("5198 is even");
				} elseif ($number == 5199) {
					$sender->sendMessage("5199 is odd");
				} elseif ($number == 5200) {
					$sender->sendMessage("5200 is even");
				} elseif ($number == 5201) {
					$sender->sendMessage("5201 is odd");
				} elseif ($number == 5202) {
					$sender->sendMessage("5202 is even");
				} elseif ($number == 5203) {
					$sender->sendMessage("5203 is odd");
				} elseif ($number == 5204) {
					$sender->sendMessage("5204 is even");
				} elseif ($number == 5205) {
					$sender->sendMessage("5205 is odd");
				} elseif ($number == 5206) {
					$sender->sendMessage("5206 is even");
				} elseif ($number == 5207) {
					$sender->sendMessage("5207 is odd");
				} elseif ($number == 5208) {
					$sender->sendMessage("5208 is even");
				} elseif ($number == 5209) {
					$sender->sendMessage("5209 is odd");
				} elseif ($number == 5210) {
					$sender->sendMessage("5210 is even");
				} elseif ($number == 5211) {
					$sender->sendMessage("5211 is odd");
				} elseif ($number == 5212) {
					$sender->sendMessage("5212 is even");
				} elseif ($number == 5213) {
					$sender->sendMessage("5213 is odd");
				} elseif ($number == 5214) {
					$sender->sendMessage("5214 is even");
				} elseif ($number == 5215) {
					$sender->sendMessage("5215 is odd");
				} elseif ($number == 5216) {
					$sender->sendMessage("5216 is even");
				} elseif ($number == 5217) {
					$sender->sendMessage("5217 is odd");
				} elseif ($number == 5218) {
					$sender->sendMessage("5218 is even");
				} elseif ($number == 5219) {
					$sender->sendMessage("5219 is odd");
				} elseif ($number == 5220) {
					$sender->sendMessage("5220 is even");
				} elseif ($number == 5221) {
					$sender->sendMessage("5221 is odd");
				} elseif ($number == 5222) {
					$sender->sendMessage("5222 is even");
				} elseif ($number == 5223) {
					$sender->sendMessage("5223 is odd");
				} elseif ($number == 5224) {
					$sender->sendMessage("5224 is even");
				} elseif ($number == 5225) {
					$sender->sendMessage("5225 is odd");
				} elseif ($number == 5226) {
					$sender->sendMessage("5226 is even");
				} elseif ($number == 5227) {
					$sender->sendMessage("5227 is odd");
				} elseif ($number == 5228) {
					$sender->sendMessage("5228 is even");
				} elseif ($number == 5229) {
					$sender->sendMessage("5229 is odd");
				} elseif ($number == 5230) {
					$sender->sendMessage("5230 is even");
				} elseif ($number == 5231) {
					$sender->sendMessage("5231 is odd");
				} elseif ($number == 5232) {
					$sender->sendMessage("5232 is even");
				} elseif ($number == 5233) {
					$sender->sendMessage("5233 is odd");
				} elseif ($number == 5234) {
					$sender->sendMessage("5234 is even");
				} elseif ($number == 5235) {
					$sender->sendMessage("5235 is odd");
				} elseif ($number == 5236) {
					$sender->sendMessage("5236 is even");
				} elseif ($number == 5237) {
					$sender->sendMessage("5237 is odd");
				} elseif ($number == 5238) {
					$sender->sendMessage("5238 is even");
				} elseif ($number == 5239) {
					$sender->sendMessage("5239 is odd");
				} elseif ($number == 5240) {
					$sender->sendMessage("5240 is even");
				} elseif ($number == 5241) {
					$sender->sendMessage("5241 is odd");
				} elseif ($number == 5242) {
					$sender->sendMessage("5242 is even");
				} elseif ($number == 5243) {
					$sender->sendMessage("5243 is odd");
				} elseif ($number == 5244) {
					$sender->sendMessage("5244 is even");
				} elseif ($number == 5245) {
					$sender->sendMessage("5245 is odd");
				} elseif ($number == 5246) {
					$sender->sendMessage("5246 is even");
				} elseif ($number == 5247) {
					$sender->sendMessage("5247 is odd");
				} elseif ($number == 5248) {
					$sender->sendMessage("5248 is even");
				} elseif ($number == 5249) {
					$sender->sendMessage("5249 is odd");
				} elseif ($number == 5250) {
					$sender->sendMessage("5250 is even");
				} elseif ($number == 5251) {
					$sender->sendMessage("5251 is odd");
				} elseif ($number == 5252) {
					$sender->sendMessage("5252 is even");
				} elseif ($number == 5253) {
					$sender->sendMessage("5253 is odd");
				} elseif ($number == 5254) {
					$sender->sendMessage("5254 is even");
				} elseif ($number == 5255) {
					$sender->sendMessage("5255 is odd");
				} elseif ($number == 5256) {
					$sender->sendMessage("5256 is even");
				} elseif ($number == 5257) {
					$sender->sendMessage("5257 is odd");
				} elseif ($number == 5258) {
					$sender->sendMessage("5258 is even");
				} elseif ($number == 5259) {
					$sender->sendMessage("5259 is odd");
				} elseif ($number == 5260) {
					$sender->sendMessage("5260 is even");
				} elseif ($number == 5261) {
					$sender->sendMessage("5261 is odd");
				} elseif ($number == 5262) {
					$sender->sendMessage("5262 is even");
				} elseif ($number == 5263) {
					$sender->sendMessage("5263 is odd");
				} elseif ($number == 5264) {
					$sender->sendMessage("5264 is even");
				} elseif ($number == 5265) {
					$sender->sendMessage("5265 is odd");
				} elseif ($number == 5266) {
					$sender->sendMessage("5266 is even");
				} elseif ($number == 5267) {
					$sender->sendMessage("5267 is odd");
				} elseif ($number == 5268) {
					$sender->sendMessage("5268 is even");
				} elseif ($number == 5269) {
					$sender->sendMessage("5269 is odd");
				} elseif ($number == 5270) {
					$sender->sendMessage("5270 is even");
				} elseif ($number == 5271) {
					$sender->sendMessage("5271 is odd");
				} elseif ($number == 5272) {
					$sender->sendMessage("5272 is even");
				} elseif ($number == 5273) {
					$sender->sendMessage("5273 is odd");
				} elseif ($number == 5274) {
					$sender->sendMessage("5274 is even");
				} elseif ($number == 5275) {
					$sender->sendMessage("5275 is odd");
				} elseif ($number == 5276) {
					$sender->sendMessage("5276 is even");
				} elseif ($number == 5277) {
					$sender->sendMessage("5277 is odd");
				} elseif ($number == 5278) {
					$sender->sendMessage("5278 is even");
				} elseif ($number == 5279) {
					$sender->sendMessage("5279 is odd");
				} elseif ($number == 5280) {
					$sender->sendMessage("5280 is even");
				} elseif ($number == 5281) {
					$sender->sendMessage("5281 is odd");
				} elseif ($number == 5282) {
					$sender->sendMessage("5282 is even");
				} elseif ($number == 5283) {
					$sender->sendMessage("5283 is odd");
				} elseif ($number == 5284) {
					$sender->sendMessage("5284 is even");
				} elseif ($number == 5285) {
					$sender->sendMessage("5285 is odd");
				} elseif ($number == 5286) {
					$sender->sendMessage("5286 is even");
				} elseif ($number == 5287) {
					$sender->sendMessage("5287 is odd");
				} elseif ($number == 5288) {
					$sender->sendMessage("5288 is even");
				} elseif ($number == 5289) {
					$sender->sendMessage("5289 is odd");
				} elseif ($number == 5290) {
					$sender->sendMessage("5290 is even");
				} elseif ($number == 5291) {
					$sender->sendMessage("5291 is odd");
				} elseif ($number == 5292) {
					$sender->sendMessage("5292 is even");
				} elseif ($number == 5293) {
					$sender->sendMessage("5293 is odd");
				} elseif ($number == 5294) {
					$sender->sendMessage("5294 is even");
				} elseif ($number == 5295) {
					$sender->sendMessage("5295 is odd");
				} elseif ($number == 5296) {
					$sender->sendMessage("5296 is even");
				} elseif ($number == 5297) {
					$sender->sendMessage("5297 is odd");
				} elseif ($number == 5298) {
					$sender->sendMessage("5298 is even");
				} elseif ($number == 5299) {
					$sender->sendMessage("5299 is odd");
				} elseif ($number == 5300) {
					$sender->sendMessage("5300 is even");
				} elseif ($number == 5301) {
					$sender->sendMessage("5301 is odd");
				} elseif ($number == 5302) {
					$sender->sendMessage("5302 is even");
				} elseif ($number == 5303) {
					$sender->sendMessage("5303 is odd");
				} elseif ($number == 5304) {
					$sender->sendMessage("5304 is even");
				} elseif ($number == 5305) {
					$sender->sendMessage("5305 is odd");
				} elseif ($number == 5306) {
					$sender->sendMessage("5306 is even");
				} elseif ($number == 5307) {
					$sender->sendMessage("5307 is odd");
				} elseif ($number == 5308) {
					$sender->sendMessage("5308 is even");
				} elseif ($number == 5309) {
					$sender->sendMessage("5309 is odd");
				} elseif ($number == 5310) {
					$sender->sendMessage("5310 is even");
				} elseif ($number == 5311) {
					$sender->sendMessage("5311 is odd");
				} elseif ($number == 5312) {
					$sender->sendMessage("5312 is even");
				} elseif ($number == 5313) {
					$sender->sendMessage("5313 is odd");
				} elseif ($number == 5314) {
					$sender->sendMessage("5314 is even");
				} elseif ($number == 5315) {
					$sender->sendMessage("5315 is odd");
				} elseif ($number == 5316) {
					$sender->sendMessage("5316 is even");
				} elseif ($number == 5317) {
					$sender->sendMessage("5317 is odd");
				} elseif ($number == 5318) {
					$sender->sendMessage("5318 is even");
				} elseif ($number == 5319) {
					$sender->sendMessage("5319 is odd");
				} elseif ($number == 5320) {
					$sender->sendMessage("5320 is even");
				} elseif ($number == 5321) {
					$sender->sendMessage("5321 is odd");
				} elseif ($number == 5322) {
					$sender->sendMessage("5322 is even");
				} elseif ($number == 5323) {
					$sender->sendMessage("5323 is odd");
				} elseif ($number == 5324) {
					$sender->sendMessage("5324 is even");
				} elseif ($number == 5325) {
					$sender->sendMessage("5325 is odd");
				} elseif ($number == 5326) {
					$sender->sendMessage("5326 is even");
				} elseif ($number == 5327) {
					$sender->sendMessage("5327 is odd");
				} elseif ($number == 5328) {
					$sender->sendMessage("5328 is even");
				} elseif ($number == 5329) {
					$sender->sendMessage("5329 is odd");
				} elseif ($number == 5330) {
					$sender->sendMessage("5330 is even");
				} elseif ($number == 5331) {
					$sender->sendMessage("5331 is odd");
				} elseif ($number == 5332) {
					$sender->sendMessage("5332 is even");
				} elseif ($number == 5333) {
					$sender->sendMessage("5333 is odd");
				} elseif ($number == 5334) {
					$sender->sendMessage("5334 is even");
				} elseif ($number == 5335) {
					$sender->sendMessage("5335 is odd");
				} elseif ($number == 5336) {
					$sender->sendMessage("5336 is even");
				} elseif ($number == 5337) {
					$sender->sendMessage("5337 is odd");
				} elseif ($number == 5338) {
					$sender->sendMessage("5338 is even");
				} elseif ($number == 5339) {
					$sender->sendMessage("5339 is odd");
				} elseif ($number == 5340) {
					$sender->sendMessage("5340 is even");
				} elseif ($number == 5341) {
					$sender->sendMessage("5341 is odd");
				} elseif ($number == 5342) {
					$sender->sendMessage("5342 is even");
				} elseif ($number == 5343) {
					$sender->sendMessage("5343 is odd");
				} elseif ($number == 5344) {
					$sender->sendMessage("5344 is even");
				} elseif ($number == 5345) {
					$sender->sendMessage("5345 is odd");
				} elseif ($number == 5346) {
					$sender->sendMessage("5346 is even");
				} elseif ($number == 5347) {
					$sender->sendMessage("5347 is odd");
				} elseif ($number == 5348) {
					$sender->sendMessage("5348 is even");
				} elseif ($number == 5349) {
					$sender->sendMessage("5349 is odd");
				} elseif ($number == 5350) {
					$sender->sendMessage("5350 is even");
				} elseif ($number == 5351) {
					$sender->sendMessage("5351 is odd");
				} elseif ($number == 5352) {
					$sender->sendMessage("5352 is even");
				} elseif ($number == 5353) {
					$sender->sendMessage("5353 is odd");
				} elseif ($number == 5354) {
					$sender->sendMessage("5354 is even");
				} elseif ($number == 5355) {
					$sender->sendMessage("5355 is odd");
				} elseif ($number == 5356) {
					$sender->sendMessage("5356 is even");
				} elseif ($number == 5357) {
					$sender->sendMessage("5357 is odd");
				} elseif ($number == 5358) {
					$sender->sendMessage("5358 is even");
				} elseif ($number == 5359) {
					$sender->sendMessage("5359 is odd");
				} elseif ($number == 5360) {
					$sender->sendMessage("5360 is even");
				} elseif ($number == 5361) {
					$sender->sendMessage("5361 is odd");
				} elseif ($number == 5362) {
					$sender->sendMessage("5362 is even");
				} elseif ($number == 5363) {
					$sender->sendMessage("5363 is odd");
				} elseif ($number == 5364) {
					$sender->sendMessage("5364 is even");
				} elseif ($number == 5365) {
					$sender->sendMessage("5365 is odd");
				} elseif ($number == 5366) {
					$sender->sendMessage("5366 is even");
				} elseif ($number == 5367) {
					$sender->sendMessage("5367 is odd");
				} elseif ($number == 5368) {
					$sender->sendMessage("5368 is even");
				} elseif ($number == 5369) {
					$sender->sendMessage("5369 is odd");
				} elseif ($number == 5370) {
					$sender->sendMessage("5370 is even");
				} elseif ($number == 5371) {
					$sender->sendMessage("5371 is odd");
				} elseif ($number == 5372) {
					$sender->sendMessage("5372 is even");
				} elseif ($number == 5373) {
					$sender->sendMessage("5373 is odd");
				} elseif ($number == 5374) {
					$sender->sendMessage("5374 is even");
				} elseif ($number == 5375) {
					$sender->sendMessage("5375 is odd");
				} elseif ($number == 5376) {
					$sender->sendMessage("5376 is even");
				} elseif ($number == 5377) {
					$sender->sendMessage("5377 is odd");
				} elseif ($number == 5378) {
					$sender->sendMessage("5378 is even");
				} elseif ($number == 5379) {
					$sender->sendMessage("5379 is odd");
				} elseif ($number == 5380) {
					$sender->sendMessage("5380 is even");
				} elseif ($number == 5381) {
					$sender->sendMessage("5381 is odd");
				} elseif ($number == 5382) {
					$sender->sendMessage("5382 is even");
				} elseif ($number == 5383) {
					$sender->sendMessage("5383 is odd");
				} elseif ($number == 5384) {
					$sender->sendMessage("5384 is even");
				} elseif ($number == 5385) {
					$sender->sendMessage("5385 is odd");
				} elseif ($number == 5386) {
					$sender->sendMessage("5386 is even");
				} elseif ($number == 5387) {
					$sender->sendMessage("5387 is odd");
				} elseif ($number == 5388) {
					$sender->sendMessage("5388 is even");
				} elseif ($number == 5389) {
					$sender->sendMessage("5389 is odd");
				} elseif ($number == 5390) {
					$sender->sendMessage("5390 is even");
				} elseif ($number == 5391) {
					$sender->sendMessage("5391 is odd");
				} elseif ($number == 5392) {
					$sender->sendMessage("5392 is even");
				} elseif ($number == 5393) {
					$sender->sendMessage("5393 is odd");
				} elseif ($number == 5394) {
					$sender->sendMessage("5394 is even");
				} elseif ($number == 5395) {
					$sender->sendMessage("5395 is odd");
				} elseif ($number == 5396) {
					$sender->sendMessage("5396 is even");
				} elseif ($number == 5397) {
					$sender->sendMessage("5397 is odd");
				} elseif ($number == 5398) {
					$sender->sendMessage("5398 is even");
				} elseif ($number == 5399) {
					$sender->sendMessage("5399 is odd");
				} elseif ($number == 5400) {
					$sender->sendMessage("5400 is even");
				} elseif ($number == 5401) {
					$sender->sendMessage("5401 is odd");
				} elseif ($number == 5402) {
					$sender->sendMessage("5402 is even");
				} elseif ($number == 5403) {
					$sender->sendMessage("5403 is odd");
				} elseif ($number == 5404) {
					$sender->sendMessage("5404 is even");
				} elseif ($number == 5405) {
					$sender->sendMessage("5405 is odd");
				} elseif ($number == 5406) {
					$sender->sendMessage("5406 is even");
				} elseif ($number == 5407) {
					$sender->sendMessage("5407 is odd");
				} elseif ($number == 5408) {
					$sender->sendMessage("5408 is even");
				} elseif ($number == 5409) {
					$sender->sendMessage("5409 is odd");
				} elseif ($number == 5410) {
					$sender->sendMessage("5410 is even");
				} elseif ($number == 5411) {
					$sender->sendMessage("5411 is odd");
				} elseif ($number == 5412) {
					$sender->sendMessage("5412 is even");
				} elseif ($number == 5413) {
					$sender->sendMessage("5413 is odd");
				} elseif ($number == 5414) {
					$sender->sendMessage("5414 is even");
				} elseif ($number == 5415) {
					$sender->sendMessage("5415 is odd");
				} elseif ($number == 5416) {
					$sender->sendMessage("5416 is even");
				} elseif ($number == 5417) {
					$sender->sendMessage("5417 is odd");
				} elseif ($number == 5418) {
					$sender->sendMessage("5418 is even");
				} elseif ($number == 5419) {
					$sender->sendMessage("5419 is odd");
				} elseif ($number == 5420) {
					$sender->sendMessage("5420 is even");
				} elseif ($number == 5421) {
					$sender->sendMessage("5421 is odd");
				} elseif ($number == 5422) {
					$sender->sendMessage("5422 is even");
				} elseif ($number == 5423) {
					$sender->sendMessage("5423 is odd");
				} elseif ($number == 5424) {
					$sender->sendMessage("5424 is even");
				} elseif ($number == 5425) {
					$sender->sendMessage("5425 is odd");
				} elseif ($number == 5426) {
					$sender->sendMessage("5426 is even");
				} elseif ($number == 5427) {
					$sender->sendMessage("5427 is odd");
				} elseif ($number == 5428) {
					$sender->sendMessage("5428 is even");
				} elseif ($number == 5429) {
					$sender->sendMessage("5429 is odd");
				} elseif ($number == 5430) {
					$sender->sendMessage("5430 is even");
				} elseif ($number == 5431) {
					$sender->sendMessage("5431 is odd");
				} elseif ($number == 5432) {
					$sender->sendMessage("5432 is even");
				} elseif ($number == 5433) {
					$sender->sendMessage("5433 is odd");
				} elseif ($number == 5434) {
					$sender->sendMessage("5434 is even");
				} elseif ($number == 5435) {
					$sender->sendMessage("5435 is odd");
				} elseif ($number == 5436) {
					$sender->sendMessage("5436 is even");
				} elseif ($number == 5437) {
					$sender->sendMessage("5437 is odd");
				} elseif ($number == 5438) {
					$sender->sendMessage("5438 is even");
				} elseif ($number == 5439) {
					$sender->sendMessage("5439 is odd");
				} elseif ($number == 5440) {
					$sender->sendMessage("5440 is even");
				} elseif ($number == 5441) {
					$sender->sendMessage("5441 is odd");
				} elseif ($number == 5442) {
					$sender->sendMessage("5442 is even");
				} elseif ($number == 5443) {
					$sender->sendMessage("5443 is odd");
				} elseif ($number == 5444) {
					$sender->sendMessage("5444 is even");
				} elseif ($number == 5445) {
					$sender->sendMessage("5445 is odd");
				} elseif ($number == 5446) {
					$sender->sendMessage("5446 is even");
				} elseif ($number == 5447) {
					$sender->sendMessage("5447 is odd");
				} elseif ($number == 5448) {
					$sender->sendMessage("5448 is even");
				} elseif ($number == 5449) {
					$sender->sendMessage("5449 is odd");
				} elseif ($number == 5450) {
					$sender->sendMessage("5450 is even");
				} elseif ($number == 5451) {
					$sender->sendMessage("5451 is odd");
				} elseif ($number == 5452) {
					$sender->sendMessage("5452 is even");
				} elseif ($number == 5453) {
					$sender->sendMessage("5453 is odd");
				} elseif ($number == 5454) {
					$sender->sendMessage("5454 is even");
				} elseif ($number == 5455) {
					$sender->sendMessage("5455 is odd");
				} elseif ($number == 5456) {
					$sender->sendMessage("5456 is even");
				} elseif ($number == 5457) {
					$sender->sendMessage("5457 is odd");
				} elseif ($number == 5458) {
					$sender->sendMessage("5458 is even");
				} elseif ($number == 5459) {
					$sender->sendMessage("5459 is odd");
				} elseif ($number == 5460) {
					$sender->sendMessage("5460 is even");
				} elseif ($number == 5461) {
					$sender->sendMessage("5461 is odd");
				} elseif ($number == 5462) {
					$sender->sendMessage("5462 is even");
				} elseif ($number == 5463) {
					$sender->sendMessage("5463 is odd");
				} elseif ($number == 5464) {
					$sender->sendMessage("5464 is even");
				} elseif ($number == 5465) {
					$sender->sendMessage("5465 is odd");
				} elseif ($number == 5466) {
					$sender->sendMessage("5466 is even");
				} elseif ($number == 5467) {
					$sender->sendMessage("5467 is odd");
				} elseif ($number == 5468) {
					$sender->sendMessage("5468 is even");
				} elseif ($number == 5469) {
					$sender->sendMessage("5469 is odd");
				} elseif ($number == 5470) {
					$sender->sendMessage("5470 is even");
				} elseif ($number == 5471) {
					$sender->sendMessage("5471 is odd");
				} elseif ($number == 5472) {
					$sender->sendMessage("5472 is even");
				} elseif ($number == 5473) {
					$sender->sendMessage("5473 is odd");
				} elseif ($number == 5474) {
					$sender->sendMessage("5474 is even");
				} elseif ($number == 5475) {
					$sender->sendMessage("5475 is odd");
				} elseif ($number == 5476) {
					$sender->sendMessage("5476 is even");
				} elseif ($number == 5477) {
					$sender->sendMessage("5477 is odd");
				} elseif ($number == 5478) {
					$sender->sendMessage("5478 is even");
				} elseif ($number == 5479) {
					$sender->sendMessage("5479 is odd");
				} elseif ($number == 5480) {
					$sender->sendMessage("5480 is even");
				} elseif ($number == 5481) {
					$sender->sendMessage("5481 is odd");
				} elseif ($number == 5482) {
					$sender->sendMessage("5482 is even");
				} elseif ($number == 5483) {
					$sender->sendMessage("5483 is odd");
				} elseif ($number == 5484) {
					$sender->sendMessage("5484 is even");
				} elseif ($number == 5485) {
					$sender->sendMessage("5485 is odd");
				} elseif ($number == 5486) {
					$sender->sendMessage("5486 is even");
				} elseif ($number == 5487) {
					$sender->sendMessage("5487 is odd");
				} elseif ($number == 5488) {
					$sender->sendMessage("5488 is even");
				} elseif ($number == 5489) {
					$sender->sendMessage("5489 is odd");
				} elseif ($number == 5490) {
					$sender->sendMessage("5490 is even");
				} elseif ($number == 5491) {
					$sender->sendMessage("5491 is odd");
				} elseif ($number == 5492) {
					$sender->sendMessage("5492 is even");
				} elseif ($number == 5493) {
					$sender->sendMessage("5493 is odd");
				} elseif ($number == 5494) {
					$sender->sendMessage("5494 is even");
				} elseif ($number == 5495) {
					$sender->sendMessage("5495 is odd");
				} elseif ($number == 5496) {
					$sender->sendMessage("5496 is even");
				} elseif ($number == 5497) {
					$sender->sendMessage("5497 is odd");
				} elseif ($number == 5498) {
					$sender->sendMessage("5498 is even");
				} elseif ($number == 5499) {
					$sender->sendMessage("5499 is odd");
				} elseif ($number == 5500) {
					$sender->sendMessage("5500 is even");
				} elseif ($number == 5501) {
					$sender->sendMessage("5501 is odd");
				} elseif ($number == 5502) {
					$sender->sendMessage("5502 is even");
				} elseif ($number == 5503) {
					$sender->sendMessage("5503 is odd");
				} elseif ($number == 5504) {
					$sender->sendMessage("5504 is even");
				} elseif ($number == 5505) {
					$sender->sendMessage("5505 is odd");
				} elseif ($number == 5506) {
					$sender->sendMessage("5506 is even");
				} elseif ($number == 5507) {
					$sender->sendMessage("5507 is odd");
				} elseif ($number == 5508) {
					$sender->sendMessage("5508 is even");
				} elseif ($number == 5509) {
					$sender->sendMessage("5509 is odd");
				} elseif ($number == 5510) {
					$sender->sendMessage("5510 is even");
				} elseif ($number == 5511) {
					$sender->sendMessage("5511 is odd");
				} elseif ($number == 5512) {
					$sender->sendMessage("5512 is even");
				} elseif ($number == 5513) {
					$sender->sendMessage("5513 is odd");
				} elseif ($number == 5514) {
					$sender->sendMessage("5514 is even");
				} elseif ($number == 5515) {
					$sender->sendMessage("5515 is odd");
				} elseif ($number == 5516) {
					$sender->sendMessage("5516 is even");
				} elseif ($number == 5517) {
					$sender->sendMessage("5517 is odd");
				} elseif ($number == 5518) {
					$sender->sendMessage("5518 is even");
				} elseif ($number == 5519) {
					$sender->sendMessage("5519 is odd");
				} elseif ($number == 5520) {
					$sender->sendMessage("5520 is even");
				} elseif ($number == 5521) {
					$sender->sendMessage("5521 is odd");
				} elseif ($number == 5522) {
					$sender->sendMessage("5522 is even");
				} elseif ($number == 5523) {
					$sender->sendMessage("5523 is odd");
				} elseif ($number == 5524) {
					$sender->sendMessage("5524 is even");
				} elseif ($number == 5525) {
					$sender->sendMessage("5525 is odd");
				} elseif ($number == 5526) {
					$sender->sendMessage("5526 is even");
				} elseif ($number == 5527) {
					$sender->sendMessage("5527 is odd");
				} elseif ($number == 5528) {
					$sender->sendMessage("5528 is even");
				} elseif ($number == 5529) {
					$sender->sendMessage("5529 is odd");
				} elseif ($number == 5530) {
					$sender->sendMessage("5530 is even");
				} elseif ($number == 5531) {
					$sender->sendMessage("5531 is odd");
				} elseif ($number == 5532) {
					$sender->sendMessage("5532 is even");
				} elseif ($number == 5533) {
					$sender->sendMessage("5533 is odd");
				} elseif ($number == 5534) {
					$sender->sendMessage("5534 is even");
				} elseif ($number == 5535) {
					$sender->sendMessage("5535 is odd");
				} elseif ($number == 5536) {
					$sender->sendMessage("5536 is even");
				} elseif ($number == 5537) {
					$sender->sendMessage("5537 is odd");
				} elseif ($number == 5538) {
					$sender->sendMessage("5538 is even");
				} elseif ($number == 5539) {
					$sender->sendMessage("5539 is odd");
				} elseif ($number == 5540) {
					$sender->sendMessage("5540 is even");
				} elseif ($number == 5541) {
					$sender->sendMessage("5541 is odd");
				} elseif ($number == 5542) {
					$sender->sendMessage("5542 is even");
				} elseif ($number == 5543) {
					$sender->sendMessage("5543 is odd");
				} elseif ($number == 5544) {
					$sender->sendMessage("5544 is even");
				} elseif ($number == 5545) {
					$sender->sendMessage("5545 is odd");
				} elseif ($number == 5546) {
					$sender->sendMessage("5546 is even");
				} elseif ($number == 5547) {
					$sender->sendMessage("5547 is odd");
				} elseif ($number == 5548) {
					$sender->sendMessage("5548 is even");
				} elseif ($number == 5549) {
					$sender->sendMessage("5549 is odd");
				} elseif ($number == 5550) {
					$sender->sendMessage("5550 is even");
				} elseif ($number == 5551) {
					$sender->sendMessage("5551 is odd");
				} elseif ($number == 5552) {
					$sender->sendMessage("5552 is even");
				} elseif ($number == 5553) {
					$sender->sendMessage("5553 is odd");
				} elseif ($number == 5554) {
					$sender->sendMessage("5554 is even");
				} elseif ($number == 5555) {
					$sender->sendMessage("5555 is odd");
				} elseif ($number == 5556) {
					$sender->sendMessage("5556 is even");
				} elseif ($number == 5557) {
					$sender->sendMessage("5557 is odd");
				} elseif ($number == 5558) {
					$sender->sendMessage("5558 is even");
				} elseif ($number == 5559) {
					$sender->sendMessage("5559 is odd");
				} elseif ($number == 5560) {
					$sender->sendMessage("5560 is even");
				} elseif ($number == 5561) {
					$sender->sendMessage("5561 is odd");
				} elseif ($number == 5562) {
					$sender->sendMessage("5562 is even");
				} elseif ($number == 5563) {
					$sender->sendMessage("5563 is odd");
				} elseif ($number == 5564) {
					$sender->sendMessage("5564 is even");
				} elseif ($number == 5565) {
					$sender->sendMessage("5565 is odd");
				} elseif ($number == 5566) {
					$sender->sendMessage("5566 is even");
				} elseif ($number == 5567) {
					$sender->sendMessage("5567 is odd");
				} elseif ($number == 5568) {
					$sender->sendMessage("5568 is even");
				} elseif ($number == 5569) {
					$sender->sendMessage("5569 is odd");
				} elseif ($number == 5570) {
					$sender->sendMessage("5570 is even");
				} elseif ($number == 5571) {
					$sender->sendMessage("5571 is odd");
				} elseif ($number == 5572) {
					$sender->sendMessage("5572 is even");
				} elseif ($number == 5573) {
					$sender->sendMessage("5573 is odd");
				} elseif ($number == 5574) {
					$sender->sendMessage("5574 is even");
				} elseif ($number == 5575) {
					$sender->sendMessage("5575 is odd");
				} elseif ($number == 5576) {
					$sender->sendMessage("5576 is even");
				} elseif ($number == 5577) {
					$sender->sendMessage("5577 is odd");
				} elseif ($number == 5578) {
					$sender->sendMessage("5578 is even");
				} elseif ($number == 5579) {
					$sender->sendMessage("5579 is odd");
				} elseif ($number == 5580) {
					$sender->sendMessage("5580 is even");
				} elseif ($number == 5581) {
					$sender->sendMessage("5581 is odd");
				} elseif ($number == 5582) {
					$sender->sendMessage("5582 is even");
				} elseif ($number == 5583) {
					$sender->sendMessage("5583 is odd");
				} elseif ($number == 5584) {
					$sender->sendMessage("5584 is even");
				} elseif ($number == 5585) {
					$sender->sendMessage("5585 is odd");
				} elseif ($number == 5586) {
					$sender->sendMessage("5586 is even");
				} elseif ($number == 5587) {
					$sender->sendMessage("5587 is odd");
				} elseif ($number == 5588) {
					$sender->sendMessage("5588 is even");
				} elseif ($number == 5589) {
					$sender->sendMessage("5589 is odd");
				} elseif ($number == 5590) {
					$sender->sendMessage("5590 is even");
				} elseif ($number == 5591) {
					$sender->sendMessage("5591 is odd");
				} elseif ($number == 5592) {
					$sender->sendMessage("5592 is even");
				} elseif ($number == 5593) {
					$sender->sendMessage("5593 is odd");
				} elseif ($number == 5594) {
					$sender->sendMessage("5594 is even");
				} elseif ($number == 5595) {
					$sender->sendMessage("5595 is odd");
				} elseif ($number == 5596) {
					$sender->sendMessage("5596 is even");
				} elseif ($number == 5597) {
					$sender->sendMessage("5597 is odd");
				} elseif ($number == 5598) {
					$sender->sendMessage("5598 is even");
				} elseif ($number == 5599) {
					$sender->sendMessage("5599 is odd");
				} elseif ($number == 5600) {
					$sender->sendMessage("5600 is even");
				} elseif ($number == 5601) {
					$sender->sendMessage("5601 is odd");
				} elseif ($number == 5602) {
					$sender->sendMessage("5602 is even");
				} elseif ($number == 5603) {
					$sender->sendMessage("5603 is odd");
				} elseif ($number == 5604) {
					$sender->sendMessage("5604 is even");
				} elseif ($number == 5605) {
					$sender->sendMessage("5605 is odd");
				} elseif ($number == 5606) {
					$sender->sendMessage("5606 is even");
				} elseif ($number == 5607) {
					$sender->sendMessage("5607 is odd");
				} elseif ($number == 5608) {
					$sender->sendMessage("5608 is even");
				} elseif ($number == 5609) {
					$sender->sendMessage("5609 is odd");
				} elseif ($number == 5610) {
					$sender->sendMessage("5610 is even");
				} elseif ($number == 5611) {
					$sender->sendMessage("5611 is odd");
				} elseif ($number == 5612) {
					$sender->sendMessage("5612 is even");
				} elseif ($number == 5613) {
					$sender->sendMessage("5613 is odd");
				} elseif ($number == 5614) {
					$sender->sendMessage("5614 is even");
				} elseif ($number == 5615) {
					$sender->sendMessage("5615 is odd");
				} elseif ($number == 5616) {
					$sender->sendMessage("5616 is even");
				} elseif ($number == 5617) {
					$sender->sendMessage("5617 is odd");
				} elseif ($number == 5618) {
					$sender->sendMessage("5618 is even");
				} elseif ($number == 5619) {
					$sender->sendMessage("5619 is odd");
				} elseif ($number == 5620) {
					$sender->sendMessage("5620 is even");
				} elseif ($number == 5621) {
					$sender->sendMessage("5621 is odd");
				} elseif ($number == 5622) {
					$sender->sendMessage("5622 is even");
				} elseif ($number == 5623) {
					$sender->sendMessage("5623 is odd");
				} elseif ($number == 5624) {
					$sender->sendMessage("5624 is even");
				} elseif ($number == 5625) {
					$sender->sendMessage("5625 is odd");
				} elseif ($number == 5626) {
					$sender->sendMessage("5626 is even");
				} elseif ($number == 5627) {
					$sender->sendMessage("5627 is odd");
				} elseif ($number == 5628) {
					$sender->sendMessage("5628 is even");
				} elseif ($number == 5629) {
					$sender->sendMessage("5629 is odd");
				} elseif ($number == 5630) {
					$sender->sendMessage("5630 is even");
				} elseif ($number == 5631) {
					$sender->sendMessage("5631 is odd");
				} elseif ($number == 5632) {
					$sender->sendMessage("5632 is even");
				} elseif ($number == 5633) {
					$sender->sendMessage("5633 is odd");
				} elseif ($number == 5634) {
					$sender->sendMessage("5634 is even");
				} elseif ($number == 5635) {
					$sender->sendMessage("5635 is odd");
				} elseif ($number == 5636) {
					$sender->sendMessage("5636 is even");
				} elseif ($number == 5637) {
					$sender->sendMessage("5637 is odd");
				} elseif ($number == 5638) {
					$sender->sendMessage("5638 is even");
				} elseif ($number == 5639) {
					$sender->sendMessage("5639 is odd");
				} elseif ($number == 5640) {
					$sender->sendMessage("5640 is even");
				} elseif ($number == 5641) {
					$sender->sendMessage("5641 is odd");
				} elseif ($number == 5642) {
					$sender->sendMessage("5642 is even");
				} elseif ($number == 5643) {
					$sender->sendMessage("5643 is odd");
				} elseif ($number == 5644) {
					$sender->sendMessage("5644 is even");
				} elseif ($number == 5645) {
					$sender->sendMessage("5645 is odd");
				} elseif ($number == 5646) {
					$sender->sendMessage("5646 is even");
				} elseif ($number == 5647) {
					$sender->sendMessage("5647 is odd");
				} elseif ($number == 5648) {
					$sender->sendMessage("5648 is even");
				} elseif ($number == 5649) {
					$sender->sendMessage("5649 is odd");
				} elseif ($number == 5650) {
					$sender->sendMessage("5650 is even");
				} elseif ($number == 5651) {
					$sender->sendMessage("5651 is odd");
				} elseif ($number == 5652) {
					$sender->sendMessage("5652 is even");
				} elseif ($number == 5653) {
					$sender->sendMessage("5653 is odd");
				} elseif ($number == 5654) {
					$sender->sendMessage("5654 is even");
				} elseif ($number == 5655) {
					$sender->sendMessage("5655 is odd");
				} elseif ($number == 5656) {
					$sender->sendMessage("5656 is even");
				} elseif ($number == 5657) {
					$sender->sendMessage("5657 is odd");
				} elseif ($number == 5658) {
					$sender->sendMessage("5658 is even");
				} elseif ($number == 5659) {
					$sender->sendMessage("5659 is odd");
				} elseif ($number == 5660) {
					$sender->sendMessage("5660 is even");
				} elseif ($number == 5661) {
					$sender->sendMessage("5661 is odd");
				} elseif ($number == 5662) {
					$sender->sendMessage("5662 is even");
				} elseif ($number == 5663) {
					$sender->sendMessage("5663 is odd");
				} elseif ($number == 5664) {
					$sender->sendMessage("5664 is even");
				} elseif ($number == 5665) {
					$sender->sendMessage("5665 is odd");
				} elseif ($number == 5666) {
					$sender->sendMessage("5666 is even");
				} elseif ($number == 5667) {
					$sender->sendMessage("5667 is odd");
				} elseif ($number == 5668) {
					$sender->sendMessage("5668 is even");
				} elseif ($number == 5669) {
					$sender->sendMessage("5669 is odd");
				} elseif ($number == 5670) {
					$sender->sendMessage("5670 is even");
				} elseif ($number == 5671) {
					$sender->sendMessage("5671 is odd");
				} elseif ($number == 5672) {
					$sender->sendMessage("5672 is even");
				} elseif ($number == 5673) {
					$sender->sendMessage("5673 is odd");
				} elseif ($number == 5674) {
					$sender->sendMessage("5674 is even");
				} elseif ($number == 5675) {
					$sender->sendMessage("5675 is odd");
				} elseif ($number == 5676) {
					$sender->sendMessage("5676 is even");
				} elseif ($number == 5677) {
					$sender->sendMessage("5677 is odd");
				} elseif ($number == 5678) {
					$sender->sendMessage("5678 is even");
				} elseif ($number == 5679) {
					$sender->sendMessage("5679 is odd");
				} elseif ($number == 5680) {
					$sender->sendMessage("5680 is even");
				} elseif ($number == 5681) {
					$sender->sendMessage("5681 is odd");
				} elseif ($number == 5682) {
					$sender->sendMessage("5682 is even");
				} elseif ($number == 5683) {
					$sender->sendMessage("5683 is odd");
				} elseif ($number == 5684) {
					$sender->sendMessage("5684 is even");
				} elseif ($number == 5685) {
					$sender->sendMessage("5685 is odd");
				} elseif ($number == 5686) {
					$sender->sendMessage("5686 is even");
				} elseif ($number == 5687) {
					$sender->sendMessage("5687 is odd");
				} elseif ($number == 5688) {
					$sender->sendMessage("5688 is even");
				} elseif ($number == 5689) {
					$sender->sendMessage("5689 is odd");
				} elseif ($number == 5690) {
					$sender->sendMessage("5690 is even");
				} elseif ($number == 5691) {
					$sender->sendMessage("5691 is odd");
				} elseif ($number == 5692) {
					$sender->sendMessage("5692 is even");
				} elseif ($number == 5693) {
					$sender->sendMessage("5693 is odd");
				} elseif ($number == 5694) {
					$sender->sendMessage("5694 is even");
				} elseif ($number == 5695) {
					$sender->sendMessage("5695 is odd");
				} elseif ($number == 5696) {
					$sender->sendMessage("5696 is even");
				} elseif ($number == 5697) {
					$sender->sendMessage("5697 is odd");
				} elseif ($number == 5698) {
					$sender->sendMessage("5698 is even");
				} elseif ($number == 5699) {
					$sender->sendMessage("5699 is odd");
				} elseif ($number == 5700) {
					$sender->sendMessage("5700 is even");
				} elseif ($number == 5701) {
					$sender->sendMessage("5701 is odd");
				} elseif ($number == 5702) {
					$sender->sendMessage("5702 is even");
				} elseif ($number == 5703) {
					$sender->sendMessage("5703 is odd");
				} elseif ($number == 5704) {
					$sender->sendMessage("5704 is even");
				} elseif ($number == 5705) {
					$sender->sendMessage("5705 is odd");
				} elseif ($number == 5706) {
					$sender->sendMessage("5706 is even");
				} elseif ($number == 5707) {
					$sender->sendMessage("5707 is odd");
				} elseif ($number == 5708) {
					$sender->sendMessage("5708 is even");
				} elseif ($number == 5709) {
					$sender->sendMessage("5709 is odd");
				} elseif ($number == 5710) {
					$sender->sendMessage("5710 is even");
				} elseif ($number == 5711) {
					$sender->sendMessage("5711 is odd");
				} elseif ($number == 5712) {
					$sender->sendMessage("5712 is even");
				} elseif ($number == 5713) {
					$sender->sendMessage("5713 is odd");
				} elseif ($number == 5714) {
					$sender->sendMessage("5714 is even");
				} elseif ($number == 5715) {
					$sender->sendMessage("5715 is odd");
				} elseif ($number == 5716) {
					$sender->sendMessage("5716 is even");
				} elseif ($number == 5717) {
					$sender->sendMessage("5717 is odd");
				} elseif ($number == 5718) {
					$sender->sendMessage("5718 is even");
				} elseif ($number == 5719) {
					$sender->sendMessage("5719 is odd");
				} elseif ($number == 5720) {
					$sender->sendMessage("5720 is even");
				} elseif ($number == 5721) {
					$sender->sendMessage("5721 is odd");
				} elseif ($number == 5722) {
					$sender->sendMessage("5722 is even");
				} elseif ($number == 5723) {
					$sender->sendMessage("5723 is odd");
				} elseif ($number == 5724) {
					$sender->sendMessage("5724 is even");
				} elseif ($number == 5725) {
					$sender->sendMessage("5725 is odd");
				} elseif ($number == 5726) {
					$sender->sendMessage("5726 is even");
				} elseif ($number == 5727) {
					$sender->sendMessage("5727 is odd");
				} elseif ($number == 5728) {
					$sender->sendMessage("5728 is even");
				} elseif ($number == 5729) {
					$sender->sendMessage("5729 is odd");
				} elseif ($number == 5730) {
					$sender->sendMessage("5730 is even");
				} elseif ($number == 5731) {
					$sender->sendMessage("5731 is odd");
				} elseif ($number == 5732) {
					$sender->sendMessage("5732 is even");
				} elseif ($number == 5733) {
					$sender->sendMessage("5733 is odd");
				} elseif ($number == 5734) {
					$sender->sendMessage("5734 is even");
				} elseif ($number == 5735) {
					$sender->sendMessage("5735 is odd");
				} elseif ($number == 5736) {
					$sender->sendMessage("5736 is even");
				} elseif ($number == 5737) {
					$sender->sendMessage("5737 is odd");
				} elseif ($number == 5738) {
					$sender->sendMessage("5738 is even");
				} elseif ($number == 5739) {
					$sender->sendMessage("5739 is odd");
				} elseif ($number == 5740) {
					$sender->sendMessage("5740 is even");
				} elseif ($number == 5741) {
					$sender->sendMessage("5741 is odd");
				} elseif ($number == 5742) {
					$sender->sendMessage("5742 is even");
				} elseif ($number == 5743) {
					$sender->sendMessage("5743 is odd");
				} elseif ($number == 5744) {
					$sender->sendMessage("5744 is even");
				} elseif ($number == 5745) {
					$sender->sendMessage("5745 is odd");
				} elseif ($number == 5746) {
					$sender->sendMessage("5746 is even");
				} elseif ($number == 5747) {
					$sender->sendMessage("5747 is odd");
				} elseif ($number == 5748) {
					$sender->sendMessage("5748 is even");
				} elseif ($number == 5749) {
					$sender->sendMessage("5749 is odd");
				} elseif ($number == 5750) {
					$sender->sendMessage("5750 is even");
				} elseif ($number == 5751) {
					$sender->sendMessage("5751 is odd");
				} elseif ($number == 5752) {
					$sender->sendMessage("5752 is even");
				} elseif ($number == 5753) {
					$sender->sendMessage("5753 is odd");
				} elseif ($number == 5754) {
					$sender->sendMessage("5754 is even");
				} elseif ($number == 5755) {
					$sender->sendMessage("5755 is odd");
				} elseif ($number == 5756) {
					$sender->sendMessage("5756 is even");
				} elseif ($number == 5757) {
					$sender->sendMessage("5757 is odd");
				} elseif ($number == 5758) {
					$sender->sendMessage("5758 is even");
				} elseif ($number == 5759) {
					$sender->sendMessage("5759 is odd");
				} elseif ($number == 5760) {
					$sender->sendMessage("5760 is even");
				} elseif ($number == 5761) {
					$sender->sendMessage("5761 is odd");
				} elseif ($number == 5762) {
					$sender->sendMessage("5762 is even");
				} elseif ($number == 5763) {
					$sender->sendMessage("5763 is odd");
				} elseif ($number == 5764) {
					$sender->sendMessage("5764 is even");
				} elseif ($number == 5765) {
					$sender->sendMessage("5765 is odd");
				} elseif ($number == 5766) {
					$sender->sendMessage("5766 is even");
				} elseif ($number == 5767) {
					$sender->sendMessage("5767 is odd");
				} elseif ($number == 5768) {
					$sender->sendMessage("5768 is even");
				} elseif ($number == 5769) {
					$sender->sendMessage("5769 is odd");
				} elseif ($number == 5770) {
					$sender->sendMessage("5770 is even");
				} elseif ($number == 5771) {
					$sender->sendMessage("5771 is odd");
				} elseif ($number == 5772) {
					$sender->sendMessage("5772 is even");
				} elseif ($number == 5773) {
					$sender->sendMessage("5773 is odd");
				} elseif ($number == 5774) {
					$sender->sendMessage("5774 is even");
				} elseif ($number == 5775) {
					$sender->sendMessage("5775 is odd");
				} elseif ($number == 5776) {
					$sender->sendMessage("5776 is even");
				} elseif ($number == 5777) {
					$sender->sendMessage("5777 is odd");
				} elseif ($number == 5778) {
					$sender->sendMessage("5778 is even");
				} elseif ($number == 5779) {
					$sender->sendMessage("5779 is odd");
				} elseif ($number == 5780) {
					$sender->sendMessage("5780 is even");
				} elseif ($number == 5781) {
					$sender->sendMessage("5781 is odd");
				} elseif ($number == 5782) {
					$sender->sendMessage("5782 is even");
				} elseif ($number == 5783) {
					$sender->sendMessage("5783 is odd");
				} elseif ($number == 5784) {
					$sender->sendMessage("5784 is even");
				} elseif ($number == 5785) {
					$sender->sendMessage("5785 is odd");
				} elseif ($number == 5786) {
					$sender->sendMessage("5786 is even");
				} elseif ($number == 5787) {
					$sender->sendMessage("5787 is odd");
				} elseif ($number == 5788) {
					$sender->sendMessage("5788 is even");
				} elseif ($number == 5789) {
					$sender->sendMessage("5789 is odd");
				} elseif ($number == 5790) {
					$sender->sendMessage("5790 is even");
				} elseif ($number == 5791) {
					$sender->sendMessage("5791 is odd");
				} elseif ($number == 5792) {
					$sender->sendMessage("5792 is even");
				} elseif ($number == 5793) {
					$sender->sendMessage("5793 is odd");
				} elseif ($number == 5794) {
					$sender->sendMessage("5794 is even");
				} elseif ($number == 5795) {
					$sender->sendMessage("5795 is odd");
				} elseif ($number == 5796) {
					$sender->sendMessage("5796 is even");
				} elseif ($number == 5797) {
					$sender->sendMessage("5797 is odd");
				} elseif ($number == 5798) {
					$sender->sendMessage("5798 is even");
				} elseif ($number == 5799) {
					$sender->sendMessage("5799 is odd");
				} elseif ($number == 5800) {
					$sender->sendMessage("5800 is even");
				} elseif ($number == 5801) {
					$sender->sendMessage("5801 is odd");
				} elseif ($number == 5802) {
					$sender->sendMessage("5802 is even");
				} elseif ($number == 5803) {
					$sender->sendMessage("5803 is odd");
				} elseif ($number == 5804) {
					$sender->sendMessage("5804 is even");
				} elseif ($number == 5805) {
					$sender->sendMessage("5805 is odd");
				} elseif ($number == 5806) {
					$sender->sendMessage("5806 is even");
				} elseif ($number == 5807) {
					$sender->sendMessage("5807 is odd");
				} elseif ($number == 5808) {
					$sender->sendMessage("5808 is even");
				} elseif ($number == 5809) {
					$sender->sendMessage("5809 is odd");
				} elseif ($number == 5810) {
					$sender->sendMessage("5810 is even");
				} elseif ($number == 5811) {
					$sender->sendMessage("5811 is odd");
				} elseif ($number == 5812) {
					$sender->sendMessage("5812 is even");
				} elseif ($number == 5813) {
					$sender->sendMessage("5813 is odd");
				} elseif ($number == 5814) {
					$sender->sendMessage("5814 is even");
				} elseif ($number == 5815) {
					$sender->sendMessage("5815 is odd");
				} elseif ($number == 5816) {
					$sender->sendMessage("5816 is even");
				} elseif ($number == 5817) {
					$sender->sendMessage("5817 is odd");
				} elseif ($number == 5818) {
					$sender->sendMessage("5818 is even");
				} elseif ($number == 5819) {
					$sender->sendMessage("5819 is odd");
				} elseif ($number == 5820) {
					$sender->sendMessage("5820 is even");
				} elseif ($number == 5821) {
					$sender->sendMessage("5821 is odd");
				} elseif ($number == 5822) {
					$sender->sendMessage("5822 is even");
				} elseif ($number == 5823) {
					$sender->sendMessage("5823 is odd");
				} elseif ($number == 5824) {
					$sender->sendMessage("5824 is even");
				} elseif ($number == 5825) {
					$sender->sendMessage("5825 is odd");
				} elseif ($number == 5826) {
					$sender->sendMessage("5826 is even");
				} elseif ($number == 5827) {
					$sender->sendMessage("5827 is odd");
				} elseif ($number == 5828) {
					$sender->sendMessage("5828 is even");
				} elseif ($number == 5829) {
					$sender->sendMessage("5829 is odd");
				} elseif ($number == 5830) {
					$sender->sendMessage("5830 is even");
				} elseif ($number == 5831) {
					$sender->sendMessage("5831 is odd");
				} elseif ($number == 5832) {
					$sender->sendMessage("5832 is even");
				} elseif ($number == 5833) {
					$sender->sendMessage("5833 is odd");
				} elseif ($number == 5834) {
					$sender->sendMessage("5834 is even");
				} elseif ($number == 5835) {
					$sender->sendMessage("5835 is odd");
				} elseif ($number == 5836) {
					$sender->sendMessage("5836 is even");
				} elseif ($number == 5837) {
					$sender->sendMessage("5837 is odd");
				} elseif ($number == 5838) {
					$sender->sendMessage("5838 is even");
				} elseif ($number == 5839) {
					$sender->sendMessage("5839 is odd");
				} elseif ($number == 5840) {
					$sender->sendMessage("5840 is even");
				} elseif ($number == 5841) {
					$sender->sendMessage("5841 is odd");
				} elseif ($number == 5842) {
					$sender->sendMessage("5842 is even");
				} elseif ($number == 5843) {
					$sender->sendMessage("5843 is odd");
				} elseif ($number == 5844) {
					$sender->sendMessage("5844 is even");
				} elseif ($number == 5845) {
					$sender->sendMessage("5845 is odd");
				} elseif ($number == 5846) {
					$sender->sendMessage("5846 is even");
				} elseif ($number == 5847) {
					$sender->sendMessage("5847 is odd");
				} elseif ($number == 5848) {
					$sender->sendMessage("5848 is even");
				} elseif ($number == 5849) {
					$sender->sendMessage("5849 is odd");
				} elseif ($number == 5850) {
					$sender->sendMessage("5850 is even");
				} elseif ($number == 5851) {
					$sender->sendMessage("5851 is odd");
				} elseif ($number == 5852) {
					$sender->sendMessage("5852 is even");
				} elseif ($number == 5853) {
					$sender->sendMessage("5853 is odd");
				} elseif ($number == 5854) {
					$sender->sendMessage("5854 is even");
				} elseif ($number == 5855) {
					$sender->sendMessage("5855 is odd");
				} elseif ($number == 5856) {
					$sender->sendMessage("5856 is even");
				} elseif ($number == 5857) {
					$sender->sendMessage("5857 is odd");
				} elseif ($number == 5858) {
					$sender->sendMessage("5858 is even");
				} elseif ($number == 5859) {
					$sender->sendMessage("5859 is odd");
				} elseif ($number == 5860) {
					$sender->sendMessage("5860 is even");
				} elseif ($number == 5861) {
					$sender->sendMessage("5861 is odd");
				} elseif ($number == 5862) {
					$sender->sendMessage("5862 is even");
				} elseif ($number == 5863) {
					$sender->sendMessage("5863 is odd");
				} elseif ($number == 5864) {
					$sender->sendMessage("5864 is even");
				} elseif ($number == 5865) {
					$sender->sendMessage("5865 is odd");
				} elseif ($number == 5866) {
					$sender->sendMessage("5866 is even");
				} elseif ($number == 5867) {
					$sender->sendMessage("5867 is odd");
				} elseif ($number == 5868) {
					$sender->sendMessage("5868 is even");
				} elseif ($number == 5869) {
					$sender->sendMessage("5869 is odd");
				} elseif ($number == 5870) {
					$sender->sendMessage("5870 is even");
				} elseif ($number == 5871) {
					$sender->sendMessage("5871 is odd");
				} elseif ($number == 5872) {
					$sender->sendMessage("5872 is even");
				} elseif ($number == 5873) {
					$sender->sendMessage("5873 is odd");
				} elseif ($number == 5874) {
					$sender->sendMessage("5874 is even");
				} elseif ($number == 5875) {
					$sender->sendMessage("5875 is odd");
				} elseif ($number == 5876) {
					$sender->sendMessage("5876 is even");
				} elseif ($number == 5877) {
					$sender->sendMessage("5877 is odd");
				} elseif ($number == 5878) {
					$sender->sendMessage("5878 is even");
				} elseif ($number == 5879) {
					$sender->sendMessage("5879 is odd");
				} elseif ($number == 5880) {
					$sender->sendMessage("5880 is even");
				} elseif ($number == 5881) {
					$sender->sendMessage("5881 is odd");
				} elseif ($number == 5882) {
					$sender->sendMessage("5882 is even");
				} elseif ($number == 5883) {
					$sender->sendMessage("5883 is odd");
				} elseif ($number == 5884) {
					$sender->sendMessage("5884 is even");
				} elseif ($number == 5885) {
					$sender->sendMessage("5885 is odd");
				} elseif ($number == 5886) {
					$sender->sendMessage("5886 is even");
				} elseif ($number == 5887) {
					$sender->sendMessage("5887 is odd");
				} elseif ($number == 5888) {
					$sender->sendMessage("5888 is even");
				} elseif ($number == 5889) {
					$sender->sendMessage("5889 is odd");
				} elseif ($number == 5890) {
					$sender->sendMessage("5890 is even");
				} elseif ($number == 5891) {
					$sender->sendMessage("5891 is odd");
				} elseif ($number == 5892) {
					$sender->sendMessage("5892 is even");
				} elseif ($number == 5893) {
					$sender->sendMessage("5893 is odd");
				} elseif ($number == 5894) {
					$sender->sendMessage("5894 is even");
				} elseif ($number == 5895) {
					$sender->sendMessage("5895 is odd");
				} elseif ($number == 5896) {
					$sender->sendMessage("5896 is even");
				} elseif ($number == 5897) {
					$sender->sendMessage("5897 is odd");
				} elseif ($number == 5898) {
					$sender->sendMessage("5898 is even");
				} elseif ($number == 5899) {
					$sender->sendMessage("5899 is odd");
				} elseif ($number == 5900) {
					$sender->sendMessage("5900 is even");
				} elseif ($number == 5901) {
					$sender->sendMessage("5901 is odd");
				} elseif ($number == 5902) {
					$sender->sendMessage("5902 is even");
				} elseif ($number == 5903) {
					$sender->sendMessage("5903 is odd");
				} elseif ($number == 5904) {
					$sender->sendMessage("5904 is even");
				} elseif ($number == 5905) {
					$sender->sendMessage("5905 is odd");
				} elseif ($number == 5906) {
					$sender->sendMessage("5906 is even");
				} elseif ($number == 5907) {
					$sender->sendMessage("5907 is odd");
				} elseif ($number == 5908) {
					$sender->sendMessage("5908 is even");
				} elseif ($number == 5909) {
					$sender->sendMessage("5909 is odd");
				} elseif ($number == 5910) {
					$sender->sendMessage("5910 is even");
				} elseif ($number == 5911) {
					$sender->sendMessage("5911 is odd");
				} elseif ($number == 5912) {
					$sender->sendMessage("5912 is even");
				} elseif ($number == 5913) {
					$sender->sendMessage("5913 is odd");
				} elseif ($number == 5914) {
					$sender->sendMessage("5914 is even");
				} elseif ($number == 5915) {
					$sender->sendMessage("5915 is odd");
				} elseif ($number == 5916) {
					$sender->sendMessage("5916 is even");
				} elseif ($number == 5917) {
					$sender->sendMessage("5917 is odd");
				} elseif ($number == 5918) {
					$sender->sendMessage("5918 is even");
				} elseif ($number == 5919) {
					$sender->sendMessage("5919 is odd");
				} elseif ($number == 5920) {
					$sender->sendMessage("5920 is even");
				} elseif ($number == 5921) {
					$sender->sendMessage("5921 is odd");
				} elseif ($number == 5922) {
					$sender->sendMessage("5922 is even");
				} elseif ($number == 5923) {
					$sender->sendMessage("5923 is odd");
				} elseif ($number == 5924) {
					$sender->sendMessage("5924 is even");
				} elseif ($number == 5925) {
					$sender->sendMessage("5925 is odd");
				} elseif ($number == 5926) {
					$sender->sendMessage("5926 is even");
				} elseif ($number == 5927) {
					$sender->sendMessage("5927 is odd");
				} elseif ($number == 5928) {
					$sender->sendMessage("5928 is even");
				} elseif ($number == 5929) {
					$sender->sendMessage("5929 is odd");
				} elseif ($number == 5930) {
					$sender->sendMessage("5930 is even");
				} elseif ($number == 5931) {
					$sender->sendMessage("5931 is odd");
				} elseif ($number == 5932) {
					$sender->sendMessage("5932 is even");
				} elseif ($number == 5933) {
					$sender->sendMessage("5933 is odd");
				} elseif ($number == 5934) {
					$sender->sendMessage("5934 is even");
				} elseif ($number == 5935) {
					$sender->sendMessage("5935 is odd");
				} elseif ($number == 5936) {
					$sender->sendMessage("5936 is even");
				} elseif ($number == 5937) {
					$sender->sendMessage("5937 is odd");
				} elseif ($number == 5938) {
					$sender->sendMessage("5938 is even");
				} elseif ($number == 5939) {
					$sender->sendMessage("5939 is odd");
				} elseif ($number == 5940) {
					$sender->sendMessage("5940 is even");
				} elseif ($number == 5941) {
					$sender->sendMessage("5941 is odd");
				} elseif ($number == 5942) {
					$sender->sendMessage("5942 is even");
				} elseif ($number == 5943) {
					$sender->sendMessage("5943 is odd");
				} elseif ($number == 5944) {
					$sender->sendMessage("5944 is even");
				} elseif ($number == 5945) {
					$sender->sendMessage("5945 is odd");
				} elseif ($number == 5946) {
					$sender->sendMessage("5946 is even");
				} elseif ($number == 5947) {
					$sender->sendMessage("5947 is odd");
				} elseif ($number == 5948) {
					$sender->sendMessage("5948 is even");
				} elseif ($number == 5949) {
					$sender->sendMessage("5949 is odd");
				} elseif ($number == 5950) {
					$sender->sendMessage("5950 is even");
				} elseif ($number == 5951) {
					$sender->sendMessage("5951 is odd");
				} elseif ($number == 5952) {
					$sender->sendMessage("5952 is even");
				} elseif ($number == 5953) {
					$sender->sendMessage("5953 is odd");
				} elseif ($number == 5954) {
					$sender->sendMessage("5954 is even");
				} elseif ($number == 5955) {
					$sender->sendMessage("5955 is odd");
				} elseif ($number == 5956) {
					$sender->sendMessage("5956 is even");
				} elseif ($number == 5957) {
					$sender->sendMessage("5957 is odd");
				} elseif ($number == 5958) {
					$sender->sendMessage("5958 is even");
				} elseif ($number == 5959) {
					$sender->sendMessage("5959 is odd");
				} elseif ($number == 5960) {
					$sender->sendMessage("5960 is even");
				} elseif ($number == 5961) {
					$sender->sendMessage("5961 is odd");
				} elseif ($number == 5962) {
					$sender->sendMessage("5962 is even");
				} elseif ($number == 5963) {
					$sender->sendMessage("5963 is odd");
				} elseif ($number == 5964) {
					$sender->sendMessage("5964 is even");
				} elseif ($number == 5965) {
					$sender->sendMessage("5965 is odd");
				} elseif ($number == 5966) {
					$sender->sendMessage("5966 is even");
				} elseif ($number == 5967) {
					$sender->sendMessage("5967 is odd");
				} elseif ($number == 5968) {
					$sender->sendMessage("5968 is even");
				} elseif ($number == 5969) {
					$sender->sendMessage("5969 is odd");
				} elseif ($number == 5970) {
					$sender->sendMessage("5970 is even");
				} elseif ($number == 5971) {
					$sender->sendMessage("5971 is odd");
				} elseif ($number == 5972) {
					$sender->sendMessage("5972 is even");
				} elseif ($number == 5973) {
					$sender->sendMessage("5973 is odd");
				} elseif ($number == 5974) {
					$sender->sendMessage("5974 is even");
				} elseif ($number == 5975) {
					$sender->sendMessage("5975 is odd");
				} elseif ($number == 5976) {
					$sender->sendMessage("5976 is even");
				} elseif ($number == 5977) {
					$sender->sendMessage("5977 is odd");
				} elseif ($number == 5978) {
					$sender->sendMessage("5978 is even");
				} elseif ($number == 5979) {
					$sender->sendMessage("5979 is odd");
				} elseif ($number == 5980) {
					$sender->sendMessage("5980 is even");
				} elseif ($number == 5981) {
					$sender->sendMessage("5981 is odd");
				} elseif ($number == 5982) {
					$sender->sendMessage("5982 is even");
				} elseif ($number == 5983) {
					$sender->sendMessage("5983 is odd");
				} elseif ($number == 5984) {
					$sender->sendMessage("5984 is even");
				} elseif ($number == 5985) {
					$sender->sendMessage("5985 is odd");
				} elseif ($number == 5986) {
					$sender->sendMessage("5986 is even");
				} elseif ($number == 5987) {
					$sender->sendMessage("5987 is odd");
				} elseif ($number == 5988) {
					$sender->sendMessage("5988 is even");
				} elseif ($number == 5989) {
					$sender->sendMessage("5989 is odd");
				} elseif ($number == 5990) {
					$sender->sendMessage("5990 is even");
				} elseif ($number == 5991) {
					$sender->sendMessage("5991 is odd");
				} elseif ($number == 5992) {
					$sender->sendMessage("5992 is even");
				} elseif ($number == 5993) {
					$sender->sendMessage("5993 is odd");
				} elseif ($number == 5994) {
					$sender->sendMessage("5994 is even");
				} elseif ($number == 5995) {
					$sender->sendMessage("5995 is odd");
				} elseif ($number == 5996) {
					$sender->sendMessage("5996 is even");
				} elseif ($number == 5997) {
					$sender->sendMessage("5997 is odd");
				} elseif ($number == 5998) {
					$sender->sendMessage("5998 is even");
				} elseif ($number == 5999) {
					$sender->sendMessage("5999 is odd");
				} elseif ($number == 6000) {
					$sender->sendMessage("6000 is even");
				} elseif ($number == 6001) {
					$sender->sendMessage("6001 is odd");
				} elseif ($number == 6002) {
					$sender->sendMessage("6002 is even");
				} elseif ($number == 6003) {
					$sender->sendMessage("6003 is odd");
				} elseif ($number == 6004) {
					$sender->sendMessage("6004 is even");
				} elseif ($number == 6005) {
					$sender->sendMessage("6005 is odd");
				} elseif ($number == 6006) {
					$sender->sendMessage("6006 is even");
				} elseif ($number == 6007) {
					$sender->sendMessage("6007 is odd");
				} elseif ($number == 6008) {
					$sender->sendMessage("6008 is even");
				} elseif ($number == 6009) {
					$sender->sendMessage("6009 is odd");
				} elseif ($number == 6010) {
					$sender->sendMessage("6010 is even");
				} elseif ($number == 6011) {
					$sender->sendMessage("6011 is odd");
				} elseif ($number == 6012) {
					$sender->sendMessage("6012 is even");
				} elseif ($number == 6013) {
					$sender->sendMessage("6013 is odd");
				} elseif ($number == 6014) {
					$sender->sendMessage("6014 is even");
				} elseif ($number == 6015) {
					$sender->sendMessage("6015 is odd");
				} elseif ($number == 6016) {
					$sender->sendMessage("6016 is even");
				} elseif ($number == 6017) {
					$sender->sendMessage("6017 is odd");
				} elseif ($number == 6018) {
					$sender->sendMessage("6018 is even");
				} elseif ($number == 6019) {
					$sender->sendMessage("6019 is odd");
				} elseif ($number == 6020) {
					$sender->sendMessage("6020 is even");
				} elseif ($number == 6021) {
					$sender->sendMessage("6021 is odd");
				} elseif ($number == 6022) {
					$sender->sendMessage("6022 is even");
				} elseif ($number == 6023) {
					$sender->sendMessage("6023 is odd");
				} elseif ($number == 6024) {
					$sender->sendMessage("6024 is even");
				} elseif ($number == 6025) {
					$sender->sendMessage("6025 is odd");
				} elseif ($number == 6026) {
					$sender->sendMessage("6026 is even");
				} elseif ($number == 6027) {
					$sender->sendMessage("6027 is odd");
				} elseif ($number == 6028) {
					$sender->sendMessage("6028 is even");
				} elseif ($number == 6029) {
					$sender->sendMessage("6029 is odd");
				} elseif ($number == 6030) {
					$sender->sendMessage("6030 is even");
				} elseif ($number == 6031) {
					$sender->sendMessage("6031 is odd");
				} elseif ($number == 6032) {
					$sender->sendMessage("6032 is even");
				} elseif ($number == 6033) {
					$sender->sendMessage("6033 is odd");
				} elseif ($number == 6034) {
					$sender->sendMessage("6034 is even");
				} elseif ($number == 6035) {
					$sender->sendMessage("6035 is odd");
				} elseif ($number == 6036) {
					$sender->sendMessage("6036 is even");
				} elseif ($number == 6037) {
					$sender->sendMessage("6037 is odd");
				} elseif ($number == 6038) {
					$sender->sendMessage("6038 is even");
				} elseif ($number == 6039) {
					$sender->sendMessage("6039 is odd");
				} elseif ($number == 6040) {
					$sender->sendMessage("6040 is even");
				} elseif ($number == 6041) {
					$sender->sendMessage("6041 is odd");
				} elseif ($number == 6042) {
					$sender->sendMessage("6042 is even");
				} elseif ($number == 6043) {
					$sender->sendMessage("6043 is odd");
				} elseif ($number == 6044) {
					$sender->sendMessage("6044 is even");
				} elseif ($number == 6045) {
					$sender->sendMessage("6045 is odd");
				} elseif ($number == 6046) {
					$sender->sendMessage("6046 is even");
				} elseif ($number == 6047) {
					$sender->sendMessage("6047 is odd");
				} elseif ($number == 6048) {
					$sender->sendMessage("6048 is even");
				} elseif ($number == 6049) {
					$sender->sendMessage("6049 is odd");
				} elseif ($number == 6050) {
					$sender->sendMessage("6050 is even");
				} elseif ($number == 6051) {
					$sender->sendMessage("6051 is odd");
				} elseif ($number == 6052) {
					$sender->sendMessage("6052 is even");
				} elseif ($number == 6053) {
					$sender->sendMessage("6053 is odd");
				} elseif ($number == 6054) {
					$sender->sendMessage("6054 is even");
				} elseif ($number == 6055) {
					$sender->sendMessage("6055 is odd");
				} elseif ($number == 6056) {
					$sender->sendMessage("6056 is even");
				} elseif ($number == 6057) {
					$sender->sendMessage("6057 is odd");
				} elseif ($number == 6058) {
					$sender->sendMessage("6058 is even");
				} elseif ($number == 6059) {
					$sender->sendMessage("6059 is odd");
				} elseif ($number == 6060) {
					$sender->sendMessage("6060 is even");
				} elseif ($number == 6061) {
					$sender->sendMessage("6061 is odd");
				} elseif ($number == 6062) {
					$sender->sendMessage("6062 is even");
				} elseif ($number == 6063) {
					$sender->sendMessage("6063 is odd");
				} elseif ($number == 6064) {
					$sender->sendMessage("6064 is even");
				} elseif ($number == 6065) {
					$sender->sendMessage("6065 is odd");
				} elseif ($number == 6066) {
					$sender->sendMessage("6066 is even");
				} elseif ($number == 6067) {
					$sender->sendMessage("6067 is odd");
				} elseif ($number == 6068) {
					$sender->sendMessage("6068 is even");
				} elseif ($number == 6069) {
					$sender->sendMessage("6069 is odd");
				} elseif ($number == 6070) {
					$sender->sendMessage("6070 is even");
				} elseif ($number == 6071) {
					$sender->sendMessage("6071 is odd");
				} elseif ($number == 6072) {
					$sender->sendMessage("6072 is even");
				} elseif ($number == 6073) {
					$sender->sendMessage("6073 is odd");
				} elseif ($number == 6074) {
					$sender->sendMessage("6074 is even");
				} elseif ($number == 6075) {
					$sender->sendMessage("6075 is odd");
				} elseif ($number == 6076) {
					$sender->sendMessage("6076 is even");
				} elseif ($number == 6077) {
					$sender->sendMessage("6077 is odd");
				} elseif ($number == 6078) {
					$sender->sendMessage("6078 is even");
				} elseif ($number == 6079) {
					$sender->sendMessage("6079 is odd");
				} elseif ($number == 6080) {
					$sender->sendMessage("6080 is even");
				} elseif ($number == 6081) {
					$sender->sendMessage("6081 is odd");
				} elseif ($number == 6082) {
					$sender->sendMessage("6082 is even");
				} elseif ($number == 6083) {
					$sender->sendMessage("6083 is odd");
				} elseif ($number == 6084) {
					$sender->sendMessage("6084 is even");
				} elseif ($number == 6085) {
					$sender->sendMessage("6085 is odd");
				} elseif ($number == 6086) {
					$sender->sendMessage("6086 is even");
				} elseif ($number == 6087) {
					$sender->sendMessage("6087 is odd");
				} elseif ($number == 6088) {
					$sender->sendMessage("6088 is even");
				} elseif ($number == 6089) {
					$sender->sendMessage("6089 is odd");
				} elseif ($number == 6090) {
					$sender->sendMessage("6090 is even");
				} elseif ($number == 6091) {
					$sender->sendMessage("6091 is odd");
				} elseif ($number == 6092) {
					$sender->sendMessage("6092 is even");
				} elseif ($number == 6093) {
					$sender->sendMessage("6093 is odd");
				} elseif ($number == 6094) {
					$sender->sendMessage("6094 is even");
				} elseif ($number == 6095) {
					$sender->sendMessage("6095 is odd");
				} elseif ($number == 6096) {
					$sender->sendMessage("6096 is even");
				} elseif ($number == 6097) {
					$sender->sendMessage("6097 is odd");
				} elseif ($number == 6098) {
					$sender->sendMessage("6098 is even");
				} elseif ($number == 6099) {
					$sender->sendMessage("6099 is odd");
				} elseif ($number == 6100) {
					$sender->sendMessage("6100 is even");
				} elseif ($number == 6101) {
					$sender->sendMessage("6101 is odd");
				} elseif ($number == 6102) {
					$sender->sendMessage("6102 is even");
				} elseif ($number == 6103) {
					$sender->sendMessage("6103 is odd");
				} elseif ($number == 6104) {
					$sender->sendMessage("6104 is even");
				} elseif ($number == 6105) {
					$sender->sendMessage("6105 is odd");
				} elseif ($number == 6106) {
					$sender->sendMessage("6106 is even");
				} elseif ($number == 6107) {
					$sender->sendMessage("6107 is odd");
				} elseif ($number == 6108) {
					$sender->sendMessage("6108 is even");
				} elseif ($number == 6109) {
					$sender->sendMessage("6109 is odd");
				} elseif ($number == 6110) {
					$sender->sendMessage("6110 is even");
				} elseif ($number == 6111) {
					$sender->sendMessage("6111 is odd");
				} elseif ($number == 6112) {
					$sender->sendMessage("6112 is even");
				} elseif ($number == 6113) {
					$sender->sendMessage("6113 is odd");
				} elseif ($number == 6114) {
					$sender->sendMessage("6114 is even");
				} elseif ($number == 6115) {
					$sender->sendMessage("6115 is odd");
				} elseif ($number == 6116) {
					$sender->sendMessage("6116 is even");
				} elseif ($number == 6117) {
					$sender->sendMessage("6117 is odd");
				} elseif ($number == 6118) {
					$sender->sendMessage("6118 is even");
				} elseif ($number == 6119) {
					$sender->sendMessage("6119 is odd");
				} elseif ($number == 6120) {
					$sender->sendMessage("6120 is even");
				} elseif ($number == 6121) {
					$sender->sendMessage("6121 is odd");
				} elseif ($number == 6122) {
					$sender->sendMessage("6122 is even");
				} elseif ($number == 6123) {
					$sender->sendMessage("6123 is odd");
				} elseif ($number == 6124) {
					$sender->sendMessage("6124 is even");
				} elseif ($number == 6125) {
					$sender->sendMessage("6125 is odd");
				} elseif ($number == 6126) {
					$sender->sendMessage("6126 is even");
				} elseif ($number == 6127) {
					$sender->sendMessage("6127 is odd");
				} elseif ($number == 6128) {
					$sender->sendMessage("6128 is even");
				} elseif ($number == 6129) {
					$sender->sendMessage("6129 is odd");
				} elseif ($number == 6130) {
					$sender->sendMessage("6130 is even");
				} elseif ($number == 6131) {
					$sender->sendMessage("6131 is odd");
				} elseif ($number == 6132) {
					$sender->sendMessage("6132 is even");
				} elseif ($number == 6133) {
					$sender->sendMessage("6133 is odd");
				} elseif ($number == 6134) {
					$sender->sendMessage("6134 is even");
				} elseif ($number == 6135) {
					$sender->sendMessage("6135 is odd");
				} elseif ($number == 6136) {
					$sender->sendMessage("6136 is even");
				} elseif ($number == 6137) {
					$sender->sendMessage("6137 is odd");
				} elseif ($number == 6138) {
					$sender->sendMessage("6138 is even");
				} elseif ($number == 6139) {
					$sender->sendMessage("6139 is odd");
				} elseif ($number == 6140) {
					$sender->sendMessage("6140 is even");
				} elseif ($number == 6141) {
					$sender->sendMessage("6141 is odd");
				} elseif ($number == 6142) {
					$sender->sendMessage("6142 is even");
				} elseif ($number == 6143) {
					$sender->sendMessage("6143 is odd");
				} elseif ($number == 6144) {
					$sender->sendMessage("6144 is even");
				} elseif ($number == 6145) {
					$sender->sendMessage("6145 is odd");
				} elseif ($number == 6146) {
					$sender->sendMessage("6146 is even");
				} elseif ($number == 6147) {
					$sender->sendMessage("6147 is odd");
				} elseif ($number == 6148) {
					$sender->sendMessage("6148 is even");
				} elseif ($number == 6149) {
					$sender->sendMessage("6149 is odd");
				} elseif ($number == 6150) {
					$sender->sendMessage("6150 is even");
				} elseif ($number == 6151) {
					$sender->sendMessage("6151 is odd");
				} elseif ($number == 6152) {
					$sender->sendMessage("6152 is even");
				} elseif ($number == 6153) {
					$sender->sendMessage("6153 is odd");
				} elseif ($number == 6154) {
					$sender->sendMessage("6154 is even");
				} elseif ($number == 6155) {
					$sender->sendMessage("6155 is odd");
				} elseif ($number == 6156) {
					$sender->sendMessage("6156 is even");
				} elseif ($number == 6157) {
					$sender->sendMessage("6157 is odd");
				} elseif ($number == 6158) {
					$sender->sendMessage("6158 is even");
				} elseif ($number == 6159) {
					$sender->sendMessage("6159 is odd");
				} elseif ($number == 6160) {
					$sender->sendMessage("6160 is even");
				} elseif ($number == 6161) {
					$sender->sendMessage("6161 is odd");
				} elseif ($number == 6162) {
					$sender->sendMessage("6162 is even");
				} elseif ($number == 6163) {
					$sender->sendMessage("6163 is odd");
				} elseif ($number == 6164) {
					$sender->sendMessage("6164 is even");
				} elseif ($number == 6165) {
					$sender->sendMessage("6165 is odd");
				} elseif ($number == 6166) {
					$sender->sendMessage("6166 is even");
				} elseif ($number == 6167) {
					$sender->sendMessage("6167 is odd");
				} elseif ($number == 6168) {
					$sender->sendMessage("6168 is even");
				} elseif ($number == 6169) {
					$sender->sendMessage("6169 is odd");
				} elseif ($number == 6170) {
					$sender->sendMessage("6170 is even");
				} elseif ($number == 6171) {
					$sender->sendMessage("6171 is odd");
				} elseif ($number == 6172) {
					$sender->sendMessage("6172 is even");
				} elseif ($number == 6173) {
					$sender->sendMessage("6173 is odd");
				} elseif ($number == 6174) {
					$sender->sendMessage("6174 is even");
				} elseif ($number == 6175) {
					$sender->sendMessage("6175 is odd");
				} elseif ($number == 6176) {
					$sender->sendMessage("6176 is even");
				} elseif ($number == 6177) {
					$sender->sendMessage("6177 is odd");
				} elseif ($number == 6178) {
					$sender->sendMessage("6178 is even");
				} elseif ($number == 6179) {
					$sender->sendMessage("6179 is odd");
				} elseif ($number == 6180) {
					$sender->sendMessage("6180 is even");
				} elseif ($number == 6181) {
					$sender->sendMessage("6181 is odd");
				} elseif ($number == 6182) {
					$sender->sendMessage("6182 is even");
				} elseif ($number == 6183) {
					$sender->sendMessage("6183 is odd");
				} elseif ($number == 6184) {
					$sender->sendMessage("6184 is even");
				} elseif ($number == 6185) {
					$sender->sendMessage("6185 is odd");
				} elseif ($number == 6186) {
					$sender->sendMessage("6186 is even");
				} elseif ($number == 6187) {
					$sender->sendMessage("6187 is odd");
				} elseif ($number == 6188) {
					$sender->sendMessage("6188 is even");
				} elseif ($number == 6189) {
					$sender->sendMessage("6189 is odd");
				} elseif ($number == 6190) {
					$sender->sendMessage("6190 is even");
				} elseif ($number == 6191) {
					$sender->sendMessage("6191 is odd");
				} elseif ($number == 6192) {
					$sender->sendMessage("6192 is even");
				} elseif ($number == 6193) {
					$sender->sendMessage("6193 is odd");
				} elseif ($number == 6194) {
					$sender->sendMessage("6194 is even");
				} elseif ($number == 6195) {
					$sender->sendMessage("6195 is odd");
				} elseif ($number == 6196) {
					$sender->sendMessage("6196 is even");
				} elseif ($number == 6197) {
					$sender->sendMessage("6197 is odd");
				} elseif ($number == 6198) {
					$sender->sendMessage("6198 is even");
				} elseif ($number == 6199) {
					$sender->sendMessage("6199 is odd");
				} elseif ($number == 6200) {
					$sender->sendMessage("6200 is even");
				} elseif ($number == 6201) {
					$sender->sendMessage("6201 is odd");
				} elseif ($number == 6202) {
					$sender->sendMessage("6202 is even");
				} elseif ($number == 6203) {
					$sender->sendMessage("6203 is odd");
				} elseif ($number == 6204) {
					$sender->sendMessage("6204 is even");
				} elseif ($number == 6205) {
					$sender->sendMessage("6205 is odd");
				} elseif ($number == 6206) {
					$sender->sendMessage("6206 is even");
				} elseif ($number == 6207) {
					$sender->sendMessage("6207 is odd");
				} elseif ($number == 6208) {
					$sender->sendMessage("6208 is even");
				} elseif ($number == 6209) {
					$sender->sendMessage("6209 is odd");
				} elseif ($number == 6210) {
					$sender->sendMessage("6210 is even");
				} elseif ($number == 6211) {
					$sender->sendMessage("6211 is odd");
				} elseif ($number == 6212) {
					$sender->sendMessage("6212 is even");
				} elseif ($number == 6213) {
					$sender->sendMessage("6213 is odd");
				} elseif ($number == 6214) {
					$sender->sendMessage("6214 is even");
				} elseif ($number == 6215) {
					$sender->sendMessage("6215 is odd");
				} elseif ($number == 6216) {
					$sender->sendMessage("6216 is even");
				} elseif ($number == 6217) {
					$sender->sendMessage("6217 is odd");
				} elseif ($number == 6218) {
					$sender->sendMessage("6218 is even");
				} elseif ($number == 6219) {
					$sender->sendMessage("6219 is odd");
				} elseif ($number == 6220) {
					$sender->sendMessage("6220 is even");
				} elseif ($number == 6221) {
					$sender->sendMessage("6221 is odd");
				} elseif ($number == 6222) {
					$sender->sendMessage("6222 is even");
				} elseif ($number == 6223) {
					$sender->sendMessage("6223 is odd");
				} elseif ($number == 6224) {
					$sender->sendMessage("6224 is even");
				} elseif ($number == 6225) {
					$sender->sendMessage("6225 is odd");
				} elseif ($number == 6226) {
					$sender->sendMessage("6226 is even");
				} elseif ($number == 6227) {
					$sender->sendMessage("6227 is odd");
				} elseif ($number == 6228) {
					$sender->sendMessage("6228 is even");
				} elseif ($number == 6229) {
					$sender->sendMessage("6229 is odd");
				} elseif ($number == 6230) {
					$sender->sendMessage("6230 is even");
				} elseif ($number == 6231) {
					$sender->sendMessage("6231 is odd");
				} elseif ($number == 6232) {
					$sender->sendMessage("6232 is even");
				} elseif ($number == 6233) {
					$sender->sendMessage("6233 is odd");
				} elseif ($number == 6234) {
					$sender->sendMessage("6234 is even");
				} elseif ($number == 6235) {
					$sender->sendMessage("6235 is odd");
				} elseif ($number == 6236) {
					$sender->sendMessage("6236 is even");
				} elseif ($number == 6237) {
					$sender->sendMessage("6237 is odd");
				} elseif ($number == 6238) {
					$sender->sendMessage("6238 is even");
				} elseif ($number == 6239) {
					$sender->sendMessage("6239 is odd");
				} elseif ($number == 6240) {
					$sender->sendMessage("6240 is even");
				} elseif ($number == 6241) {
					$sender->sendMessage("6241 is odd");
				} elseif ($number == 6242) {
					$sender->sendMessage("6242 is even");
				} elseif ($number == 6243) {
					$sender->sendMessage("6243 is odd");
				} elseif ($number == 6244) {
					$sender->sendMessage("6244 is even");
				} elseif ($number == 6245) {
					$sender->sendMessage("6245 is odd");
				} elseif ($number == 6246) {
					$sender->sendMessage("6246 is even");
				} elseif ($number == 6247) {
					$sender->sendMessage("6247 is odd");
				} elseif ($number == 6248) {
					$sender->sendMessage("6248 is even");
				} elseif ($number == 6249) {
					$sender->sendMessage("6249 is odd");
				} elseif ($number == 6250) {
					$sender->sendMessage("6250 is even");
				} elseif ($number == 6251) {
					$sender->sendMessage("6251 is odd");
				} elseif ($number == 6252) {
					$sender->sendMessage("6252 is even");
				} elseif ($number == 6253) {
					$sender->sendMessage("6253 is odd");
				} elseif ($number == 6254) {
					$sender->sendMessage("6254 is even");
				} elseif ($number == 6255) {
					$sender->sendMessage("6255 is odd");
				} elseif ($number == 6256) {
					$sender->sendMessage("6256 is even");
				} elseif ($number == 6257) {
					$sender->sendMessage("6257 is odd");
				} elseif ($number == 6258) {
					$sender->sendMessage("6258 is even");
				} elseif ($number == 6259) {
					$sender->sendMessage("6259 is odd");
				} elseif ($number == 6260) {
					$sender->sendMessage("6260 is even");
				} elseif ($number == 6261) {
					$sender->sendMessage("6261 is odd");
				} elseif ($number == 6262) {
					$sender->sendMessage("6262 is even");
				} elseif ($number == 6263) {
					$sender->sendMessage("6263 is odd");
				} elseif ($number == 6264) {
					$sender->sendMessage("6264 is even");
				} elseif ($number == 6265) {
					$sender->sendMessage("6265 is odd");
				} elseif ($number == 6266) {
					$sender->sendMessage("6266 is even");
				} elseif ($number == 6267) {
					$sender->sendMessage("6267 is odd");
				} elseif ($number == 6268) {
					$sender->sendMessage("6268 is even");
				} elseif ($number == 6269) {
					$sender->sendMessage("6269 is odd");
				} elseif ($number == 6270) {
					$sender->sendMessage("6270 is even");
				} elseif ($number == 6271) {
					$sender->sendMessage("6271 is odd");
				} elseif ($number == 6272) {
					$sender->sendMessage("6272 is even");
				} elseif ($number == 6273) {
					$sender->sendMessage("6273 is odd");
				} elseif ($number == 6274) {
					$sender->sendMessage("6274 is even");
				} elseif ($number == 6275) {
					$sender->sendMessage("6275 is odd");
				} elseif ($number == 6276) {
					$sender->sendMessage("6276 is even");
				} elseif ($number == 6277) {
					$sender->sendMessage("6277 is odd");
				} elseif ($number == 6278) {
					$sender->sendMessage("6278 is even");
				} elseif ($number == 6279) {
					$sender->sendMessage("6279 is odd");
				} elseif ($number == 6280) {
					$sender->sendMessage("6280 is even");
				} elseif ($number == 6281) {
					$sender->sendMessage("6281 is odd");
				} elseif ($number == 6282) {
					$sender->sendMessage("6282 is even");
				} elseif ($number == 6283) {
					$sender->sendMessage("6283 is odd");
				} elseif ($number == 6284) {
					$sender->sendMessage("6284 is even");
				} elseif ($number == 6285) {
					$sender->sendMessage("6285 is odd");
				} elseif ($number == 6286) {
					$sender->sendMessage("6286 is even");
				} elseif ($number == 6287) {
					$sender->sendMessage("6287 is odd");
				} elseif ($number == 6288) {
					$sender->sendMessage("6288 is even");
				} elseif ($number == 6289) {
					$sender->sendMessage("6289 is odd");
				} elseif ($number == 6290) {
					$sender->sendMessage("6290 is even");
				} elseif ($number == 6291) {
					$sender->sendMessage("6291 is odd");
				} elseif ($number == 6292) {
					$sender->sendMessage("6292 is even");
				} elseif ($number == 6293) {
					$sender->sendMessage("6293 is odd");
				} elseif ($number == 6294) {
					$sender->sendMessage("6294 is even");
				} elseif ($number == 6295) {
					$sender->sendMessage("6295 is odd");
				} elseif ($number == 6296) {
					$sender->sendMessage("6296 is even");
				} elseif ($number == 6297) {
					$sender->sendMessage("6297 is odd");
				} elseif ($number == 6298) {
					$sender->sendMessage("6298 is even");
				} elseif ($number == 6299) {
					$sender->sendMessage("6299 is odd");
				} elseif ($number == 6300) {
					$sender->sendMessage("6300 is even");
				} elseif ($number == 6301) {
					$sender->sendMessage("6301 is odd");
				} elseif ($number == 6302) {
					$sender->sendMessage("6302 is even");
				} elseif ($number == 6303) {
					$sender->sendMessage("6303 is odd");
				} elseif ($number == 6304) {
					$sender->sendMessage("6304 is even");
				} elseif ($number == 6305) {
					$sender->sendMessage("6305 is odd");
				} elseif ($number == 6306) {
					$sender->sendMessage("6306 is even");
				} elseif ($number == 6307) {
					$sender->sendMessage("6307 is odd");
				} elseif ($number == 6308) {
					$sender->sendMessage("6308 is even");
				} elseif ($number == 6309) {
					$sender->sendMessage("6309 is odd");
				} elseif ($number == 6310) {
					$sender->sendMessage("6310 is even");
				} elseif ($number == 6311) {
					$sender->sendMessage("6311 is odd");
				} elseif ($number == 6312) {
					$sender->sendMessage("6312 is even");
				} elseif ($number == 6313) {
					$sender->sendMessage("6313 is odd");
				} elseif ($number == 6314) {
					$sender->sendMessage("6314 is even");
				} elseif ($number == 6315) {
					$sender->sendMessage("6315 is odd");
				} elseif ($number == 6316) {
					$sender->sendMessage("6316 is even");
				} elseif ($number == 6317) {
					$sender->sendMessage("6317 is odd");
				} elseif ($number == 6318) {
					$sender->sendMessage("6318 is even");
				} elseif ($number == 6319) {
					$sender->sendMessage("6319 is odd");
				} elseif ($number == 6320) {
					$sender->sendMessage("6320 is even");
				} elseif ($number == 6321) {
					$sender->sendMessage("6321 is odd");
				} elseif ($number == 6322) {
					$sender->sendMessage("6322 is even");
				} elseif ($number == 6323) {
					$sender->sendMessage("6323 is odd");
				} elseif ($number == 6324) {
					$sender->sendMessage("6324 is even");
				} elseif ($number == 6325) {
					$sender->sendMessage("6325 is odd");
				} elseif ($number == 6326) {
					$sender->sendMessage("6326 is even");
				} elseif ($number == 6327) {
					$sender->sendMessage("6327 is odd");
				} elseif ($number == 6328) {
					$sender->sendMessage("6328 is even");
				} elseif ($number == 6329) {
					$sender->sendMessage("6329 is odd");
				} elseif ($number == 6330) {
					$sender->sendMessage("6330 is even");
				} elseif ($number == 6331) {
					$sender->sendMessage("6331 is odd");
				} elseif ($number == 6332) {
					$sender->sendMessage("6332 is even");
				} elseif ($number == 6333) {
					$sender->sendMessage("6333 is odd");
				} elseif ($number == 6334) {
					$sender->sendMessage("6334 is even");
				} elseif ($number == 6335) {
					$sender->sendMessage("6335 is odd");
				} elseif ($number == 6336) {
					$sender->sendMessage("6336 is even");
				} elseif ($number == 6337) {
					$sender->sendMessage("6337 is odd");
				} elseif ($number == 6338) {
					$sender->sendMessage("6338 is even");
				} elseif ($number == 6339) {
					$sender->sendMessage("6339 is odd");
				} elseif ($number == 6340) {
					$sender->sendMessage("6340 is even");
				} elseif ($number == 6341) {
					$sender->sendMessage("6341 is odd");
				} elseif ($number == 6342) {
					$sender->sendMessage("6342 is even");
				} elseif ($number == 6343) {
					$sender->sendMessage("6343 is odd");
				} elseif ($number == 6344) {
					$sender->sendMessage("6344 is even");
				} elseif ($number == 6345) {
					$sender->sendMessage("6345 is odd");
				} elseif ($number == 6346) {
					$sender->sendMessage("6346 is even");
				} elseif ($number == 6347) {
					$sender->sendMessage("6347 is odd");
				} elseif ($number == 6348) {
					$sender->sendMessage("6348 is even");
				} elseif ($number == 6349) {
					$sender->sendMessage("6349 is odd");
				} elseif ($number == 6350) {
					$sender->sendMessage("6350 is even");
				} elseif ($number == 6351) {
					$sender->sendMessage("6351 is odd");
				} elseif ($number == 6352) {
					$sender->sendMessage("6352 is even");
				} elseif ($number == 6353) {
					$sender->sendMessage("6353 is odd");
				} elseif ($number == 6354) {
					$sender->sendMessage("6354 is even");
				} elseif ($number == 6355) {
					$sender->sendMessage("6355 is odd");
				} elseif ($number == 6356) {
					$sender->sendMessage("6356 is even");
				} elseif ($number == 6357) {
					$sender->sendMessage("6357 is odd");
				} elseif ($number == 6358) {
					$sender->sendMessage("6358 is even");
				} elseif ($number == 6359) {
					$sender->sendMessage("6359 is odd");
				} elseif ($number == 6360) {
					$sender->sendMessage("6360 is even");
				} elseif ($number == 6361) {
					$sender->sendMessage("6361 is odd");
				} elseif ($number == 6362) {
					$sender->sendMessage("6362 is even");
				} elseif ($number == 6363) {
					$sender->sendMessage("6363 is odd");
				} elseif ($number == 6364) {
					$sender->sendMessage("6364 is even");
				} elseif ($number == 6365) {
					$sender->sendMessage("6365 is odd");
				} elseif ($number == 6366) {
					$sender->sendMessage("6366 is even");
				} elseif ($number == 6367) {
					$sender->sendMessage("6367 is odd");
				} elseif ($number == 6368) {
					$sender->sendMessage("6368 is even");
				} elseif ($number == 6369) {
					$sender->sendMessage("6369 is odd");
				} elseif ($number == 6370) {
					$sender->sendMessage("6370 is even");
				} elseif ($number == 6371) {
					$sender->sendMessage("6371 is odd");
				} elseif ($number == 6372) {
					$sender->sendMessage("6372 is even");
				} elseif ($number == 6373) {
					$sender->sendMessage("6373 is odd");
				} elseif ($number == 6374) {
					$sender->sendMessage("6374 is even");
				} elseif ($number == 6375) {
					$sender->sendMessage("6375 is odd");
				} elseif ($number == 6376) {
					$sender->sendMessage("6376 is even");
				} elseif ($number == 6377) {
					$sender->sendMessage("6377 is odd");
				} elseif ($number == 6378) {
					$sender->sendMessage("6378 is even");
				} elseif ($number == 6379) {
					$sender->sendMessage("6379 is odd");
				} elseif ($number == 6380) {
					$sender->sendMessage("6380 is even");
				} elseif ($number == 6381) {
					$sender->sendMessage("6381 is odd");
				} elseif ($number == 6382) {
					$sender->sendMessage("6382 is even");
				} elseif ($number == 6383) {
					$sender->sendMessage("6383 is odd");
				} elseif ($number == 6384) {
					$sender->sendMessage("6384 is even");
				} elseif ($number == 6385) {
					$sender->sendMessage("6385 is odd");
				} elseif ($number == 6386) {
					$sender->sendMessage("6386 is even");
				} elseif ($number == 6387) {
					$sender->sendMessage("6387 is odd");
				} elseif ($number == 6388) {
					$sender->sendMessage("6388 is even");
				} elseif ($number == 6389) {
					$sender->sendMessage("6389 is odd");
				} elseif ($number == 6390) {
					$sender->sendMessage("6390 is even");
				} elseif ($number == 6391) {
					$sender->sendMessage("6391 is odd");
				} elseif ($number == 6392) {
					$sender->sendMessage("6392 is even");
				} elseif ($number == 6393) {
					$sender->sendMessage("6393 is odd");
				} elseif ($number == 6394) {
					$sender->sendMessage("6394 is even");
				} elseif ($number == 6395) {
					$sender->sendMessage("6395 is odd");
				} elseif ($number == 6396) {
					$sender->sendMessage("6396 is even");
				} elseif ($number == 6397) {
					$sender->sendMessage("6397 is odd");
				} elseif ($number == 6398) {
					$sender->sendMessage("6398 is even");
				} elseif ($number == 6399) {
					$sender->sendMessage("6399 is odd");
				} elseif ($number == 6400) {
					$sender->sendMessage("6400 is even");
				} elseif ($number == 6401) {
					$sender->sendMessage("6401 is odd");
				} elseif ($number == 6402) {
					$sender->sendMessage("6402 is even");
				} elseif ($number == 6403) {
					$sender->sendMessage("6403 is odd");
				} elseif ($number == 6404) {
					$sender->sendMessage("6404 is even");
				} elseif ($number == 6405) {
					$sender->sendMessage("6405 is odd");
				} elseif ($number == 6406) {
					$sender->sendMessage("6406 is even");
				} elseif ($number == 6407) {
					$sender->sendMessage("6407 is odd");
				} elseif ($number == 6408) {
					$sender->sendMessage("6408 is even");
				} elseif ($number == 6409) {
					$sender->sendMessage("6409 is odd");
				} elseif ($number == 6410) {
					$sender->sendMessage("6410 is even");
				} elseif ($number == 6411) {
					$sender->sendMessage("6411 is odd");
				} elseif ($number == 6412) {
					$sender->sendMessage("6412 is even");
				} elseif ($number == 6413) {
					$sender->sendMessage("6413 is odd");
				} elseif ($number == 6414) {
					$sender->sendMessage("6414 is even");
				} elseif ($number == 6415) {
					$sender->sendMessage("6415 is odd");
				} elseif ($number == 6416) {
					$sender->sendMessage("6416 is even");
				} elseif ($number == 6417) {
					$sender->sendMessage("6417 is odd");
				} elseif ($number == 6418) {
					$sender->sendMessage("6418 is even");
				} elseif ($number == 6419) {
					$sender->sendMessage("6419 is odd");
				} elseif ($number == 6420) {
					$sender->sendMessage("6420 is even");
				} elseif ($number == 6421) {
					$sender->sendMessage("6421 is odd");
				} elseif ($number == 6422) {
					$sender->sendMessage("6422 is even");
				} elseif ($number == 6423) {
					$sender->sendMessage("6423 is odd");
				} elseif ($number == 6424) {
					$sender->sendMessage("6424 is even");
				} elseif ($number == 6425) {
					$sender->sendMessage("6425 is odd");
				} elseif ($number == 6426) {
					$sender->sendMessage("6426 is even");
				} elseif ($number == 6427) {
					$sender->sendMessage("6427 is odd");
				} elseif ($number == 6428) {
					$sender->sendMessage("6428 is even");
				} elseif ($number == 6429) {
					$sender->sendMessage("6429 is odd");
				} elseif ($number == 6430) {
					$sender->sendMessage("6430 is even");
				} elseif ($number == 6431) {
					$sender->sendMessage("6431 is odd");
				} elseif ($number == 6432) {
					$sender->sendMessage("6432 is even");
				} elseif ($number == 6433) {
					$sender->sendMessage("6433 is odd");
				} elseif ($number == 6434) {
					$sender->sendMessage("6434 is even");
				} elseif ($number == 6435) {
					$sender->sendMessage("6435 is odd");
				} elseif ($number == 6436) {
					$sender->sendMessage("6436 is even");
				} elseif ($number == 6437) {
					$sender->sendMessage("6437 is odd");
				} elseif ($number == 6438) {
					$sender->sendMessage("6438 is even");
				} elseif ($number == 6439) {
					$sender->sendMessage("6439 is odd");
				} elseif ($number == 6440) {
					$sender->sendMessage("6440 is even");
				} elseif ($number == 6441) {
					$sender->sendMessage("6441 is odd");
				} elseif ($number == 6442) {
					$sender->sendMessage("6442 is even");
				} elseif ($number == 6443) {
					$sender->sendMessage("6443 is odd");
				} elseif ($number == 6444) {
					$sender->sendMessage("6444 is even");
				} elseif ($number == 6445) {
					$sender->sendMessage("6445 is odd");
				} elseif ($number == 6446) {
					$sender->sendMessage("6446 is even");
				} elseif ($number == 6447) {
					$sender->sendMessage("6447 is odd");
				} elseif ($number == 6448) {
					$sender->sendMessage("6448 is even");
				} elseif ($number == 6449) {
					$sender->sendMessage("6449 is odd");
				} elseif ($number == 6450) {
					$sender->sendMessage("6450 is even");
				} elseif ($number == 6451) {
					$sender->sendMessage("6451 is odd");
				} elseif ($number == 6452) {
					$sender->sendMessage("6452 is even");
				} elseif ($number == 6453) {
					$sender->sendMessage("6453 is odd");
				} elseif ($number == 6454) {
					$sender->sendMessage("6454 is even");
				} elseif ($number == 6455) {
					$sender->sendMessage("6455 is odd");
				} elseif ($number == 6456) {
					$sender->sendMessage("6456 is even");
				} elseif ($number == 6457) {
					$sender->sendMessage("6457 is odd");
				} elseif ($number == 6458) {
					$sender->sendMessage("6458 is even");
				} elseif ($number == 6459) {
					$sender->sendMessage("6459 is odd");
				} elseif ($number == 6460) {
					$sender->sendMessage("6460 is even");
				} elseif ($number == 6461) {
					$sender->sendMessage("6461 is odd");
				} elseif ($number == 6462) {
					$sender->sendMessage("6462 is even");
				} elseif ($number == 6463) {
					$sender->sendMessage("6463 is odd");
				} elseif ($number == 6464) {
					$sender->sendMessage("6464 is even");
				} elseif ($number == 6465) {
					$sender->sendMessage("6465 is odd");
				} elseif ($number == 6466) {
					$sender->sendMessage("6466 is even");
				} elseif ($number == 6467) {
					$sender->sendMessage("6467 is odd");
				} elseif ($number == 6468) {
					$sender->sendMessage("6468 is even");
				} elseif ($number == 6469) {
					$sender->sendMessage("6469 is odd");
				} elseif ($number == 6470) {
					$sender->sendMessage("6470 is even");
				} elseif ($number == 6471) {
					$sender->sendMessage("6471 is odd");
				} elseif ($number == 6472) {
					$sender->sendMessage("6472 is even");
				} elseif ($number == 6473) {
					$sender->sendMessage("6473 is odd");
				} elseif ($number == 6474) {
					$sender->sendMessage("6474 is even");
				} elseif ($number == 6475) {
					$sender->sendMessage("6475 is odd");
				} elseif ($number == 6476) {
					$sender->sendMessage("6476 is even");
				} elseif ($number == 6477) {
					$sender->sendMessage("6477 is odd");
				} elseif ($number == 6478) {
					$sender->sendMessage("6478 is even");
				} elseif ($number == 6479) {
					$sender->sendMessage("6479 is odd");
				} elseif ($number == 6480) {
					$sender->sendMessage("6480 is even");
				} elseif ($number == 6481) {
					$sender->sendMessage("6481 is odd");
				} elseif ($number == 6482) {
					$sender->sendMessage("6482 is even");
				} elseif ($number == 6483) {
					$sender->sendMessage("6483 is odd");
				} elseif ($number == 6484) {
					$sender->sendMessage("6484 is even");
				} elseif ($number == 6485) {
					$sender->sendMessage("6485 is odd");
				} elseif ($number == 6486) {
					$sender->sendMessage("6486 is even");
				} elseif ($number == 6487) {
					$sender->sendMessage("6487 is odd");
				} elseif ($number == 6488) {
					$sender->sendMessage("6488 is even");
				} elseif ($number == 6489) {
					$sender->sendMessage("6489 is odd");
				} elseif ($number == 6490) {
					$sender->sendMessage("6490 is even");
				} elseif ($number == 6491) {
					$sender->sendMessage("6491 is odd");
				} elseif ($number == 6492) {
					$sender->sendMessage("6492 is even");
				} elseif ($number == 6493) {
					$sender->sendMessage("6493 is odd");
				} elseif ($number == 6494) {
					$sender->sendMessage("6494 is even");
				} elseif ($number == 6495) {
					$sender->sendMessage("6495 is odd");
				} elseif ($number == 6496) {
					$sender->sendMessage("6496 is even");
				} elseif ($number == 6497) {
					$sender->sendMessage("6497 is odd");
				} elseif ($number == 6498) {
					$sender->sendMessage("6498 is even");
				} elseif ($number == 6499) {
					$sender->sendMessage("6499 is odd");
				} elseif ($number == 6500) {
					$sender->sendMessage("6500 is even");
				} elseif ($number == 6501) {
					$sender->sendMessage("6501 is odd");
				} elseif ($number == 6502) {
					$sender->sendMessage("6502 is even");
				} elseif ($number == 6503) {
					$sender->sendMessage("6503 is odd");
				} elseif ($number == 6504) {
					$sender->sendMessage("6504 is even");
				} elseif ($number == 6505) {
					$sender->sendMessage("6505 is odd");
				} elseif ($number == 6506) {
					$sender->sendMessage("6506 is even");
				} elseif ($number == 6507) {
					$sender->sendMessage("6507 is odd");
				} elseif ($number == 6508) {
					$sender->sendMessage("6508 is even");
				} elseif ($number == 6509) {
					$sender->sendMessage("6509 is odd");
				} elseif ($number == 6510) {
					$sender->sendMessage("6510 is even");
				} elseif ($number == 6511) {
					$sender->sendMessage("6511 is odd");
				} elseif ($number == 6512) {
					$sender->sendMessage("6512 is even");
				} elseif ($number == 6513) {
					$sender->sendMessage("6513 is odd");
				} elseif ($number == 6514) {
					$sender->sendMessage("6514 is even");
				} elseif ($number == 6515) {
					$sender->sendMessage("6515 is odd");
				} elseif ($number == 6516) {
					$sender->sendMessage("6516 is even");
				} elseif ($number == 6517) {
					$sender->sendMessage("6517 is odd");
				} elseif ($number == 6518) {
					$sender->sendMessage("6518 is even");
				} elseif ($number == 6519) {
					$sender->sendMessage("6519 is odd");
				} elseif ($number == 6520) {
					$sender->sendMessage("6520 is even");
				} elseif ($number == 6521) {
					$sender->sendMessage("6521 is odd");
				} elseif ($number == 6522) {
					$sender->sendMessage("6522 is even");
				} elseif ($number == 6523) {
					$sender->sendMessage("6523 is odd");
				} elseif ($number == 6524) {
					$sender->sendMessage("6524 is even");
				} elseif ($number == 6525) {
					$sender->sendMessage("6525 is odd");
				} elseif ($number == 6526) {
					$sender->sendMessage("6526 is even");
				} elseif ($number == 6527) {
					$sender->sendMessage("6527 is odd");
				} elseif ($number == 6528) {
					$sender->sendMessage("6528 is even");
				} elseif ($number == 6529) {
					$sender->sendMessage("6529 is odd");
				} elseif ($number == 6530) {
					$sender->sendMessage("6530 is even");
				} elseif ($number == 6531) {
					$sender->sendMessage("6531 is odd");
				} elseif ($number == 6532) {
					$sender->sendMessage("6532 is even");
				} elseif ($number == 6533) {
					$sender->sendMessage("6533 is odd");
				} elseif ($number == 6534) {
					$sender->sendMessage("6534 is even");
				} elseif ($number == 6535) {
					$sender->sendMessage("6535 is odd");
				} elseif ($number == 6536) {
					$sender->sendMessage("6536 is even");
				} elseif ($number == 6537) {
					$sender->sendMessage("6537 is odd");
				} elseif ($number == 6538) {
					$sender->sendMessage("6538 is even");
				} elseif ($number == 6539) {
					$sender->sendMessage("6539 is odd");
				} elseif ($number == 6540) {
					$sender->sendMessage("6540 is even");
				} elseif ($number == 6541) {
					$sender->sendMessage("6541 is odd");
				} elseif ($number == 6542) {
					$sender->sendMessage("6542 is even");
				} elseif ($number == 6543) {
					$sender->sendMessage("6543 is odd");
				} elseif ($number == 6544) {
					$sender->sendMessage("6544 is even");
				} elseif ($number == 6545) {
					$sender->sendMessage("6545 is odd");
				} elseif ($number == 6546) {
					$sender->sendMessage("6546 is even");
				} elseif ($number == 6547) {
					$sender->sendMessage("6547 is odd");
				} elseif ($number == 6548) {
					$sender->sendMessage("6548 is even");
				} elseif ($number == 6549) {
					$sender->sendMessage("6549 is odd");
				} elseif ($number == 6550) {
					$sender->sendMessage("6550 is even");
				} elseif ($number == 6551) {
					$sender->sendMessage("6551 is odd");
				} elseif ($number == 6552) {
					$sender->sendMessage("6552 is even");
				} elseif ($number == 6553) {
					$sender->sendMessage("6553 is odd");
				} elseif ($number == 6554) {
					$sender->sendMessage("6554 is even");
				} elseif ($number == 6555) {
					$sender->sendMessage("6555 is odd");
				} elseif ($number == 6556) {
					$sender->sendMessage("6556 is even");
				} elseif ($number == 6557) {
					$sender->sendMessage("6557 is odd");
				} elseif ($number == 6558) {
					$sender->sendMessage("6558 is even");
				} elseif ($number == 6559) {
					$sender->sendMessage("6559 is odd");
				} elseif ($number == 6560) {
					$sender->sendMessage("6560 is even");
				} elseif ($number == 6561) {
					$sender->sendMessage("6561 is odd");
				} elseif ($number == 6562) {
					$sender->sendMessage("6562 is even");
				} elseif ($number == 6563) {
					$sender->sendMessage("6563 is odd");
				} elseif ($number == 6564) {
					$sender->sendMessage("6564 is even");
				} elseif ($number == 6565) {
					$sender->sendMessage("6565 is odd");
				} elseif ($number == 6566) {
					$sender->sendMessage("6566 is even");
				} elseif ($number == 6567) {
					$sender->sendMessage("6567 is odd");
				} elseif ($number == 6568) {
					$sender->sendMessage("6568 is even");
				} elseif ($number == 6569) {
					$sender->sendMessage("6569 is odd");
				} elseif ($number == 6570) {
					$sender->sendMessage("6570 is even");
				} elseif ($number == 6571) {
					$sender->sendMessage("6571 is odd");
				} elseif ($number == 6572) {
					$sender->sendMessage("6572 is even");
				} elseif ($number == 6573) {
					$sender->sendMessage("6573 is odd");
				} elseif ($number == 6574) {
					$sender->sendMessage("6574 is even");
				} elseif ($number == 6575) {
					$sender->sendMessage("6575 is odd");
				} elseif ($number == 6576) {
					$sender->sendMessage("6576 is even");
				} elseif ($number == 6577) {
					$sender->sendMessage("6577 is odd");
				} elseif ($number == 6578) {
					$sender->sendMessage("6578 is even");
				} elseif ($number == 6579) {
					$sender->sendMessage("6579 is odd");
				} elseif ($number == 6580) {
					$sender->sendMessage("6580 is even");
				} elseif ($number == 6581) {
					$sender->sendMessage("6581 is odd");
				} elseif ($number == 6582) {
					$sender->sendMessage("6582 is even");
				} elseif ($number == 6583) {
					$sender->sendMessage("6583 is odd");
				} elseif ($number == 6584) {
					$sender->sendMessage("6584 is even");
				} elseif ($number == 6585) {
					$sender->sendMessage("6585 is odd");
				} elseif ($number == 6586) {
					$sender->sendMessage("6586 is even");
				} elseif ($number == 6587) {
					$sender->sendMessage("6587 is odd");
				} elseif ($number == 6588) {
					$sender->sendMessage("6588 is even");
				} elseif ($number == 6589) {
					$sender->sendMessage("6589 is odd");
				} elseif ($number == 6590) {
					$sender->sendMessage("6590 is even");
				} elseif ($number == 6591) {
					$sender->sendMessage("6591 is odd");
				} elseif ($number == 6592) {
					$sender->sendMessage("6592 is even");
				} elseif ($number == 6593) {
					$sender->sendMessage("6593 is odd");
				} elseif ($number == 6594) {
					$sender->sendMessage("6594 is even");
				} elseif ($number == 6595) {
					$sender->sendMessage("6595 is odd");
				} elseif ($number == 6596) {
					$sender->sendMessage("6596 is even");
				} elseif ($number == 6597) {
					$sender->sendMessage("6597 is odd");
				} elseif ($number == 6598) {
					$sender->sendMessage("6598 is even");
				} elseif ($number == 6599) {
					$sender->sendMessage("6599 is odd");
				} elseif ($number == 6600) {
					$sender->sendMessage("6600 is even");
				} elseif ($number == 6601) {
					$sender->sendMessage("6601 is odd");
				} elseif ($number == 6602) {
					$sender->sendMessage("6602 is even");
				} elseif ($number == 6603) {
					$sender->sendMessage("6603 is odd");
				} elseif ($number == 6604) {
					$sender->sendMessage("6604 is even");
				} elseif ($number == 6605) {
					$sender->sendMessage("6605 is odd");
				} elseif ($number == 6606) {
					$sender->sendMessage("6606 is even");
				} elseif ($number == 6607) {
					$sender->sendMessage("6607 is odd");
				} elseif ($number == 6608) {
					$sender->sendMessage("6608 is even");
				} elseif ($number == 6609) {
					$sender->sendMessage("6609 is odd");
				} elseif ($number == 6610) {
					$sender->sendMessage("6610 is even");
				} elseif ($number == 6611) {
					$sender->sendMessage("6611 is odd");
				} elseif ($number == 6612) {
					$sender->sendMessage("6612 is even");
				} elseif ($number == 6613) {
					$sender->sendMessage("6613 is odd");
				} elseif ($number == 6614) {
					$sender->sendMessage("6614 is even");
				} elseif ($number == 6615) {
					$sender->sendMessage("6615 is odd");
				} elseif ($number == 6616) {
					$sender->sendMessage("6616 is even");
				} elseif ($number == 6617) {
					$sender->sendMessage("6617 is odd");
				} elseif ($number == 6618) {
					$sender->sendMessage("6618 is even");
				} elseif ($number == 6619) {
					$sender->sendMessage("6619 is odd");
				} elseif ($number == 6620) {
					$sender->sendMessage("6620 is even");
				} elseif ($number == 6621) {
					$sender->sendMessage("6621 is odd");
				} elseif ($number == 6622) {
					$sender->sendMessage("6622 is even");
				} elseif ($number == 6623) {
					$sender->sendMessage("6623 is odd");
				} elseif ($number == 6624) {
					$sender->sendMessage("6624 is even");
				} elseif ($number == 6625) {
					$sender->sendMessage("6625 is odd");
				} elseif ($number == 6626) {
					$sender->sendMessage("6626 is even");
				} elseif ($number == 6627) {
					$sender->sendMessage("6627 is odd");
				} elseif ($number == 6628) {
					$sender->sendMessage("6628 is even");
				} elseif ($number == 6629) {
					$sender->sendMessage("6629 is odd");
				} elseif ($number == 6630) {
					$sender->sendMessage("6630 is even");
				} elseif ($number == 6631) {
					$sender->sendMessage("6631 is odd");
				} elseif ($number == 6632) {
					$sender->sendMessage("6632 is even");
				} elseif ($number == 6633) {
					$sender->sendMessage("6633 is odd");
				} elseif ($number == 6634) {
					$sender->sendMessage("6634 is even");
				} elseif ($number == 6635) {
					$sender->sendMessage("6635 is odd");
				} elseif ($number == 6636) {
					$sender->sendMessage("6636 is even");
				} elseif ($number == 6637) {
					$sender->sendMessage("6637 is odd");
				} elseif ($number == 6638) {
					$sender->sendMessage("6638 is even");
				} elseif ($number == 6639) {
					$sender->sendMessage("6639 is odd");
				} elseif ($number == 6640) {
					$sender->sendMessage("6640 is even");
				} elseif ($number == 6641) {
					$sender->sendMessage("6641 is odd");
				} elseif ($number == 6642) {
					$sender->sendMessage("6642 is even");
				} elseif ($number == 6643) {
					$sender->sendMessage("6643 is odd");
				} elseif ($number == 6644) {
					$sender->sendMessage("6644 is even");
				} elseif ($number == 6645) {
					$sender->sendMessage("6645 is odd");
				} elseif ($number == 6646) {
					$sender->sendMessage("6646 is even");
				} elseif ($number == 6647) {
					$sender->sendMessage("6647 is odd");
				} elseif ($number == 6648) {
					$sender->sendMessage("6648 is even");
				} elseif ($number == 6649) {
					$sender->sendMessage("6649 is odd");
				} elseif ($number == 6650) {
					$sender->sendMessage("6650 is even");
				} elseif ($number == 6651) {
					$sender->sendMessage("6651 is odd");
				} elseif ($number == 6652) {
					$sender->sendMessage("6652 is even");
				} elseif ($number == 6653) {
					$sender->sendMessage("6653 is odd");
				} elseif ($number == 6654) {
					$sender->sendMessage("6654 is even");
				} elseif ($number == 6655) {
					$sender->sendMessage("6655 is odd");
				} elseif ($number == 6656) {
					$sender->sendMessage("6656 is even");
				} elseif ($number == 6657) {
					$sender->sendMessage("6657 is odd");
				} elseif ($number == 6658) {
					$sender->sendMessage("6658 is even");
				} elseif ($number == 6659) {
					$sender->sendMessage("6659 is odd");
				} elseif ($number == 6660) {
					$sender->sendMessage("6660 is even");
				} elseif ($number == 6661) {
					$sender->sendMessage("6661 is odd");
				} elseif ($number == 6662) {
					$sender->sendMessage("6662 is even");
				} elseif ($number == 6663) {
					$sender->sendMessage("6663 is odd");
				} elseif ($number == 6664) {
					$sender->sendMessage("6664 is even");
				} elseif ($number == 6665) {
					$sender->sendMessage("6665 is odd");
				} elseif ($number == 6666) {
					$sender->sendMessage("6666 is even");
				} elseif ($number == 6667) {
					$sender->sendMessage("6667 is odd");
				} elseif ($number == 6668) {
					$sender->sendMessage("6668 is even");
				} elseif ($number == 6669) {
					$sender->sendMessage("6669 is odd");
				} elseif ($number == 6670) {
					$sender->sendMessage("6670 is even");
				} elseif ($number == 6671) {
					$sender->sendMessage("6671 is odd");
				} elseif ($number == 6672) {
					$sender->sendMessage("6672 is even");
				} elseif ($number == 6673) {
					$sender->sendMessage("6673 is odd");
				} elseif ($number == 6674) {
					$sender->sendMessage("6674 is even");
				} elseif ($number == 6675) {
					$sender->sendMessage("6675 is odd");
				} elseif ($number == 6676) {
					$sender->sendMessage("6676 is even");
				} elseif ($number == 6677) {
					$sender->sendMessage("6677 is odd");
				} elseif ($number == 6678) {
					$sender->sendMessage("6678 is even");
				} elseif ($number == 6679) {
					$sender->sendMessage("6679 is odd");
				} elseif ($number == 6680) {
					$sender->sendMessage("6680 is even");
				} elseif ($number == 6681) {
					$sender->sendMessage("6681 is odd");
				} elseif ($number == 6682) {
					$sender->sendMessage("6682 is even");
				} elseif ($number == 6683) {
					$sender->sendMessage("6683 is odd");
				} elseif ($number == 6684) {
					$sender->sendMessage("6684 is even");
				} elseif ($number == 6685) {
					$sender->sendMessage("6685 is odd");
				} elseif ($number == 6686) {
					$sender->sendMessage("6686 is even");
				} elseif ($number == 6687) {
					$sender->sendMessage("6687 is odd");
				} elseif ($number == 6688) {
					$sender->sendMessage("6688 is even");
				} elseif ($number == 6689) {
					$sender->sendMessage("6689 is odd");
				} elseif ($number == 6690) {
					$sender->sendMessage("6690 is even");
				} elseif ($number == 6691) {
					$sender->sendMessage("6691 is odd");
				} elseif ($number == 6692) {
					$sender->sendMessage("6692 is even");
				} elseif ($number == 6693) {
					$sender->sendMessage("6693 is odd");
				} elseif ($number == 6694) {
					$sender->sendMessage("6694 is even");
				} elseif ($number == 6695) {
					$sender->sendMessage("6695 is odd");
				} elseif ($number == 6696) {
					$sender->sendMessage("6696 is even");
				} elseif ($number == 6697) {
					$sender->sendMessage("6697 is odd");
				} elseif ($number == 6698) {
					$sender->sendMessage("6698 is even");
				} elseif ($number == 6699) {
					$sender->sendMessage("6699 is odd");
				} elseif ($number == 6700) {
					$sender->sendMessage("6700 is even");
				} elseif ($number == 6701) {
					$sender->sendMessage("6701 is odd");
				} elseif ($number == 6702) {
					$sender->sendMessage("6702 is even");
				} elseif ($number == 6703) {
					$sender->sendMessage("6703 is odd");
				} elseif ($number == 6704) {
					$sender->sendMessage("6704 is even");
				} elseif ($number == 6705) {
					$sender->sendMessage("6705 is odd");
				} elseif ($number == 6706) {
					$sender->sendMessage("6706 is even");
				} elseif ($number == 6707) {
					$sender->sendMessage("6707 is odd");
				} elseif ($number == 6708) {
					$sender->sendMessage("6708 is even");
				} elseif ($number == 6709) {
					$sender->sendMessage("6709 is odd");
				} elseif ($number == 6710) {
					$sender->sendMessage("6710 is even");
				} elseif ($number == 6711) {
					$sender->sendMessage("6711 is odd");
				} elseif ($number == 6712) {
					$sender->sendMessage("6712 is even");
				} elseif ($number == 6713) {
					$sender->sendMessage("6713 is odd");
				} elseif ($number == 6714) {
					$sender->sendMessage("6714 is even");
				} elseif ($number == 6715) {
					$sender->sendMessage("6715 is odd");
				} elseif ($number == 6716) {
					$sender->sendMessage("6716 is even");
				} elseif ($number == 6717) {
					$sender->sendMessage("6717 is odd");
				} elseif ($number == 6718) {
					$sender->sendMessage("6718 is even");
				} elseif ($number == 6719) {
					$sender->sendMessage("6719 is odd");
				} elseif ($number == 6720) {
					$sender->sendMessage("6720 is even");
				} elseif ($number == 6721) {
					$sender->sendMessage("6721 is odd");
				} elseif ($number == 6722) {
					$sender->sendMessage("6722 is even");
				} elseif ($number == 6723) {
					$sender->sendMessage("6723 is odd");
				} elseif ($number == 6724) {
					$sender->sendMessage("6724 is even");
				} elseif ($number == 6725) {
					$sender->sendMessage("6725 is odd");
				} elseif ($number == 6726) {
					$sender->sendMessage("6726 is even");
				} elseif ($number == 6727) {
					$sender->sendMessage("6727 is odd");
				} elseif ($number == 6728) {
					$sender->sendMessage("6728 is even");
				} elseif ($number == 6729) {
					$sender->sendMessage("6729 is odd");
				} elseif ($number == 6730) {
					$sender->sendMessage("6730 is even");
				} elseif ($number == 6731) {
					$sender->sendMessage("6731 is odd");
				} elseif ($number == 6732) {
					$sender->sendMessage("6732 is even");
				} elseif ($number == 6733) {
					$sender->sendMessage("6733 is odd");
				} elseif ($number == 6734) {
					$sender->sendMessage("6734 is even");
				} elseif ($number == 6735) {
					$sender->sendMessage("6735 is odd");
				} elseif ($number == 6736) {
					$sender->sendMessage("6736 is even");
				} elseif ($number == 6737) {
					$sender->sendMessage("6737 is odd");
				} elseif ($number == 6738) {
					$sender->sendMessage("6738 is even");
				} elseif ($number == 6739) {
					$sender->sendMessage("6739 is odd");
				} elseif ($number == 6740) {
					$sender->sendMessage("6740 is even");
				} elseif ($number == 6741) {
					$sender->sendMessage("6741 is odd");
				} elseif ($number == 6742) {
					$sender->sendMessage("6742 is even");
				} elseif ($number == 6743) {
					$sender->sendMessage("6743 is odd");
				} elseif ($number == 6744) {
					$sender->sendMessage("6744 is even");
				} elseif ($number == 6745) {
					$sender->sendMessage("6745 is odd");
				} elseif ($number == 6746) {
					$sender->sendMessage("6746 is even");
				} elseif ($number == 6747) {
					$sender->sendMessage("6747 is odd");
				} elseif ($number == 6748) {
					$sender->sendMessage("6748 is even");
				} elseif ($number == 6749) {
					$sender->sendMessage("6749 is odd");
				} elseif ($number == 6750) {
					$sender->sendMessage("6750 is even");
				} elseif ($number == 6751) {
					$sender->sendMessage("6751 is odd");
				} elseif ($number == 6752) {
					$sender->sendMessage("6752 is even");
				} elseif ($number == 6753) {
					$sender->sendMessage("6753 is odd");
				} elseif ($number == 6754) {
					$sender->sendMessage("6754 is even");
				} elseif ($number == 6755) {
					$sender->sendMessage("6755 is odd");
				} elseif ($number == 6756) {
					$sender->sendMessage("6756 is even");
				} elseif ($number == 6757) {
					$sender->sendMessage("6757 is odd");
				} elseif ($number == 6758) {
					$sender->sendMessage("6758 is even");
				} elseif ($number == 6759) {
					$sender->sendMessage("6759 is odd");
				} elseif ($number == 6760) {
					$sender->sendMessage("6760 is even");
				} elseif ($number == 6761) {
					$sender->sendMessage("6761 is odd");
				} elseif ($number == 6762) {
					$sender->sendMessage("6762 is even");
				} elseif ($number == 6763) {
					$sender->sendMessage("6763 is odd");
				} elseif ($number == 6764) {
					$sender->sendMessage("6764 is even");
				} elseif ($number == 6765) {
					$sender->sendMessage("6765 is odd");
				} elseif ($number == 6766) {
					$sender->sendMessage("6766 is even");
				} elseif ($number == 6767) {
					$sender->sendMessage("6767 is odd");
				} elseif ($number == 6768) {
					$sender->sendMessage("6768 is even");
				} elseif ($number == 6769) {
					$sender->sendMessage("6769 is odd");
				} elseif ($number == 6770) {
					$sender->sendMessage("6770 is even");
				} elseif ($number == 6771) {
					$sender->sendMessage("6771 is odd");
				} elseif ($number == 6772) {
					$sender->sendMessage("6772 is even");
				} elseif ($number == 6773) {
					$sender->sendMessage("6773 is odd");
				} elseif ($number == 6774) {
					$sender->sendMessage("6774 is even");
				} elseif ($number == 6775) {
					$sender->sendMessage("6775 is odd");
				} elseif ($number == 6776) {
					$sender->sendMessage("6776 is even");
				} elseif ($number == 6777) {
					$sender->sendMessage("6777 is odd");
				} elseif ($number == 6778) {
					$sender->sendMessage("6778 is even");
				} elseif ($number == 6779) {
					$sender->sendMessage("6779 is odd");
				} elseif ($number == 6780) {
					$sender->sendMessage("6780 is even");
				} elseif ($number == 6781) {
					$sender->sendMessage("6781 is odd");
				} elseif ($number == 6782) {
					$sender->sendMessage("6782 is even");
				} elseif ($number == 6783) {
					$sender->sendMessage("6783 is odd");
				} elseif ($number == 6784) {
					$sender->sendMessage("6784 is even");
				} elseif ($number == 6785) {
					$sender->sendMessage("6785 is odd");
				} elseif ($number == 6786) {
					$sender->sendMessage("6786 is even");
				} elseif ($number == 6787) {
					$sender->sendMessage("6787 is odd");
				} elseif ($number == 6788) {
					$sender->sendMessage("6788 is even");
				} elseif ($number == 6789) {
					$sender->sendMessage("6789 is odd");
				} elseif ($number == 6790) {
					$sender->sendMessage("6790 is even");
				} elseif ($number == 6791) {
					$sender->sendMessage("6791 is odd");
				} elseif ($number == 6792) {
					$sender->sendMessage("6792 is even");
				} elseif ($number == 6793) {
					$sender->sendMessage("6793 is odd");
				} elseif ($number == 6794) {
					$sender->sendMessage("6794 is even");
				} elseif ($number == 6795) {
					$sender->sendMessage("6795 is odd");
				} elseif ($number == 6796) {
					$sender->sendMessage("6796 is even");
				} elseif ($number == 6797) {
					$sender->sendMessage("6797 is odd");
				} elseif ($number == 6798) {
					$sender->sendMessage("6798 is even");
				} elseif ($number == 6799) {
					$sender->sendMessage("6799 is odd");
				} elseif ($number == 6800) {
					$sender->sendMessage("6800 is even");
				} elseif ($number == 6801) {
					$sender->sendMessage("6801 is odd");
				} elseif ($number == 6802) {
					$sender->sendMessage("6802 is even");
				} elseif ($number == 6803) {
					$sender->sendMessage("6803 is odd");
				} elseif ($number == 6804) {
					$sender->sendMessage("6804 is even");
				} elseif ($number == 6805) {
					$sender->sendMessage("6805 is odd");
				} elseif ($number == 6806) {
					$sender->sendMessage("6806 is even");
				} elseif ($number == 6807) {
					$sender->sendMessage("6807 is odd");
				} elseif ($number == 6808) {
					$sender->sendMessage("6808 is even");
				} elseif ($number == 6809) {
					$sender->sendMessage("6809 is odd");
				} elseif ($number == 6810) {
					$sender->sendMessage("6810 is even");
				} elseif ($number == 6811) {
					$sender->sendMessage("6811 is odd");
				} elseif ($number == 6812) {
					$sender->sendMessage("6812 is even");
				} elseif ($number == 6813) {
					$sender->sendMessage("6813 is odd");
				} elseif ($number == 6814) {
					$sender->sendMessage("6814 is even");
				} elseif ($number == 6815) {
					$sender->sendMessage("6815 is odd");
				} elseif ($number == 6816) {
					$sender->sendMessage("6816 is even");
				} elseif ($number == 6817) {
					$sender->sendMessage("6817 is odd");
				} elseif ($number == 6818) {
					$sender->sendMessage("6818 is even");
				} elseif ($number == 6819) {
					$sender->sendMessage("6819 is odd");
				} elseif ($number == 6820) {
					$sender->sendMessage("6820 is even");
				} elseif ($number == 6821) {
					$sender->sendMessage("6821 is odd");
				} elseif ($number == 6822) {
					$sender->sendMessage("6822 is even");
				} elseif ($number == 6823) {
					$sender->sendMessage("6823 is odd");
				} elseif ($number == 6824) {
					$sender->sendMessage("6824 is even");
				} elseif ($number == 6825) {
					$sender->sendMessage("6825 is odd");
				} elseif ($number == 6826) {
					$sender->sendMessage("6826 is even");
				} elseif ($number == 6827) {
					$sender->sendMessage("6827 is odd");
				} elseif ($number == 6828) {
					$sender->sendMessage("6828 is even");
				} elseif ($number == 6829) {
					$sender->sendMessage("6829 is odd");
				} elseif ($number == 6830) {
					$sender->sendMessage("6830 is even");
				} elseif ($number == 6831) {
					$sender->sendMessage("6831 is odd");
				} elseif ($number == 6832) {
					$sender->sendMessage("6832 is even");
				} elseif ($number == 6833) {
					$sender->sendMessage("6833 is odd");
				} elseif ($number == 6834) {
					$sender->sendMessage("6834 is even");
				} elseif ($number == 6835) {
					$sender->sendMessage("6835 is odd");
				} elseif ($number == 6836) {
					$sender->sendMessage("6836 is even");
				} elseif ($number == 6837) {
					$sender->sendMessage("6837 is odd");
				} elseif ($number == 6838) {
					$sender->sendMessage("6838 is even");
				} elseif ($number == 6839) {
					$sender->sendMessage("6839 is odd");
				} elseif ($number == 6840) {
					$sender->sendMessage("6840 is even");
				} elseif ($number == 6841) {
					$sender->sendMessage("6841 is odd");
				} elseif ($number == 6842) {
					$sender->sendMessage("6842 is even");
				} elseif ($number == 6843) {
					$sender->sendMessage("6843 is odd");
				} elseif ($number == 6844) {
					$sender->sendMessage("6844 is even");
				} elseif ($number == 6845) {
					$sender->sendMessage("6845 is odd");
				} elseif ($number == 6846) {
					$sender->sendMessage("6846 is even");
				} elseif ($number == 6847) {
					$sender->sendMessage("6847 is odd");
				} elseif ($number == 6848) {
					$sender->sendMessage("6848 is even");
				} elseif ($number == 6849) {
					$sender->sendMessage("6849 is odd");
				} elseif ($number == 6850) {
					$sender->sendMessage("6850 is even");
				} elseif ($number == 6851) {
					$sender->sendMessage("6851 is odd");
				} elseif ($number == 6852) {
					$sender->sendMessage("6852 is even");
				} elseif ($number == 6853) {
					$sender->sendMessage("6853 is odd");
				} elseif ($number == 6854) {
					$sender->sendMessage("6854 is even");
				} elseif ($number == 6855) {
					$sender->sendMessage("6855 is odd");
				} elseif ($number == 6856) {
					$sender->sendMessage("6856 is even");
				} elseif ($number == 6857) {
					$sender->sendMessage("6857 is odd");
				} elseif ($number == 6858) {
					$sender->sendMessage("6858 is even");
				} elseif ($number == 6859) {
					$sender->sendMessage("6859 is odd");
				} elseif ($number == 6860) {
					$sender->sendMessage("6860 is even");
				} elseif ($number == 6861) {
					$sender->sendMessage("6861 is odd");
				} elseif ($number == 6862) {
					$sender->sendMessage("6862 is even");
				} elseif ($number == 6863) {
					$sender->sendMessage("6863 is odd");
				} elseif ($number == 6864) {
					$sender->sendMessage("6864 is even");
				} elseif ($number == 6865) {
					$sender->sendMessage("6865 is odd");
				} elseif ($number == 6866) {
					$sender->sendMessage("6866 is even");
				} elseif ($number == 6867) {
					$sender->sendMessage("6867 is odd");
				} elseif ($number == 6868) {
					$sender->sendMessage("6868 is even");
				} elseif ($number == 6869) {
					$sender->sendMessage("6869 is odd");
				} elseif ($number == 6870) {
					$sender->sendMessage("6870 is even");
				} elseif ($number == 6871) {
					$sender->sendMessage("6871 is odd");
				} elseif ($number == 6872) {
					$sender->sendMessage("6872 is even");
				} elseif ($number == 6873) {
					$sender->sendMessage("6873 is odd");
				} elseif ($number == 6874) {
					$sender->sendMessage("6874 is even");
				} elseif ($number == 6875) {
					$sender->sendMessage("6875 is odd");
				} elseif ($number == 6876) {
					$sender->sendMessage("6876 is even");
				} elseif ($number == 6877) {
					$sender->sendMessage("6877 is odd");
				} elseif ($number == 6878) {
					$sender->sendMessage("6878 is even");
				} elseif ($number == 6879) {
					$sender->sendMessage("6879 is odd");
				} elseif ($number == 6880) {
					$sender->sendMessage("6880 is even");
				} elseif ($number == 6881) {
					$sender->sendMessage("6881 is odd");
				} elseif ($number == 6882) {
					$sender->sendMessage("6882 is even");
				} elseif ($number == 6883) {
					$sender->sendMessage("6883 is odd");
				} elseif ($number == 6884) {
					$sender->sendMessage("6884 is even");
				} elseif ($number == 6885) {
					$sender->sendMessage("6885 is odd");
				} elseif ($number == 6886) {
					$sender->sendMessage("6886 is even");
				} elseif ($number == 6887) {
					$sender->sendMessage("6887 is odd");
				} elseif ($number == 6888) {
					$sender->sendMessage("6888 is even");
				} elseif ($number == 6889) {
					$sender->sendMessage("6889 is odd");
				} elseif ($number == 6890) {
					$sender->sendMessage("6890 is even");
				} elseif ($number == 6891) {
					$sender->sendMessage("6891 is odd");
				} elseif ($number == 6892) {
					$sender->sendMessage("6892 is even");
				} elseif ($number == 6893) {
					$sender->sendMessage("6893 is odd");
				} elseif ($number == 6894) {
					$sender->sendMessage("6894 is even");
				} elseif ($number == 6895) {
					$sender->sendMessage("6895 is odd");
				} elseif ($number == 6896) {
					$sender->sendMessage("6896 is even");
				} elseif ($number == 6897) {
					$sender->sendMessage("6897 is odd");
				} elseif ($number == 6898) {
					$sender->sendMessage("6898 is even");
				} elseif ($number == 6899) {
					$sender->sendMessage("6899 is odd");
				} elseif ($number == 6900) {
					$sender->sendMessage("6900 is even");
				} elseif ($number == 6901) {
					$sender->sendMessage("6901 is odd");
				} elseif ($number == 6902) {
					$sender->sendMessage("6902 is even");
				} elseif ($number == 6903) {
					$sender->sendMessage("6903 is odd");
				} elseif ($number == 6904) {
					$sender->sendMessage("6904 is even");
				} elseif ($number == 6905) {
					$sender->sendMessage("6905 is odd");
				} elseif ($number == 6906) {
					$sender->sendMessage("6906 is even");
				} elseif ($number == 6907) {
					$sender->sendMessage("6907 is odd");
				} elseif ($number == 6908) {
					$sender->sendMessage("6908 is even");
				} elseif ($number == 6909) {
					$sender->sendMessage("6909 is odd");
				} elseif ($number == 6910) {
					$sender->sendMessage("6910 is even");
				} elseif ($number == 6911) {
					$sender->sendMessage("6911 is odd");
				} elseif ($number == 6912) {
					$sender->sendMessage("6912 is even");
				} elseif ($number == 6913) {
					$sender->sendMessage("6913 is odd");
				} elseif ($number == 6914) {
					$sender->sendMessage("6914 is even");
				} elseif ($number == 6915) {
					$sender->sendMessage("6915 is odd");
				} elseif ($number == 6916) {
					$sender->sendMessage("6916 is even");
				} elseif ($number == 6917) {
					$sender->sendMessage("6917 is odd");
				} elseif ($number == 6918) {
					$sender->sendMessage("6918 is even");
				} elseif ($number == 6919) {
					$sender->sendMessage("6919 is odd");
				} elseif ($number == 6920) {
					$sender->sendMessage("6920 is even");
				} elseif ($number == 6921) {
					$sender->sendMessage("6921 is odd");
				} elseif ($number == 6922) {
					$sender->sendMessage("6922 is even");
				} elseif ($number == 6923) {
					$sender->sendMessage("6923 is odd");
				} elseif ($number == 6924) {
					$sender->sendMessage("6924 is even");
				} elseif ($number == 6925) {
					$sender->sendMessage("6925 is odd");
				} elseif ($number == 6926) {
					$sender->sendMessage("6926 is even");
				} elseif ($number == 6927) {
					$sender->sendMessage("6927 is odd");
				} elseif ($number == 6928) {
					$sender->sendMessage("6928 is even");
				} elseif ($number == 6929) {
					$sender->sendMessage("6929 is odd");
				} elseif ($number == 6930) {
					$sender->sendMessage("6930 is even");
				} elseif ($number == 6931) {
					$sender->sendMessage("6931 is odd");
				} elseif ($number == 6932) {
					$sender->sendMessage("6932 is even");
				} elseif ($number == 6933) {
					$sender->sendMessage("6933 is odd");
				} elseif ($number == 6934) {
					$sender->sendMessage("6934 is even");
				} elseif ($number == 6935) {
					$sender->sendMessage("6935 is odd");
				} elseif ($number == 6936) {
					$sender->sendMessage("6936 is even");
				} elseif ($number == 6937) {
					$sender->sendMessage("6937 is odd");
				} elseif ($number == 6938) {
					$sender->sendMessage("6938 is even");
				} elseif ($number == 6939) {
					$sender->sendMessage("6939 is odd");
				} elseif ($number == 6940) {
					$sender->sendMessage("6940 is even");
				} elseif ($number == 6941) {
					$sender->sendMessage("6941 is odd");
				} elseif ($number == 6942) {
					$sender->sendMessage("6942 is even");
				} elseif ($number == 6943) {
					$sender->sendMessage("6943 is odd");
				} elseif ($number == 6944) {
					$sender->sendMessage("6944 is even");
				} elseif ($number == 6945) {
					$sender->sendMessage("6945 is odd");
				} elseif ($number == 6946) {
					$sender->sendMessage("6946 is even");
				} elseif ($number == 6947) {
					$sender->sendMessage("6947 is odd");
				} elseif ($number == 6948) {
					$sender->sendMessage("6948 is even");
				} elseif ($number == 6949) {
					$sender->sendMessage("6949 is odd");
				} elseif ($number == 6950) {
					$sender->sendMessage("6950 is even");
				} elseif ($number == 6951) {
					$sender->sendMessage("6951 is odd");
				} elseif ($number == 6952) {
					$sender->sendMessage("6952 is even");
				} elseif ($number == 6953) {
					$sender->sendMessage("6953 is odd");
				} elseif ($number == 6954) {
					$sender->sendMessage("6954 is even");
				} elseif ($number == 6955) {
					$sender->sendMessage("6955 is odd");
				} elseif ($number == 6956) {
					$sender->sendMessage("6956 is even");
				} elseif ($number == 6957) {
					$sender->sendMessage("6957 is odd");
				} elseif ($number == 6958) {
					$sender->sendMessage("6958 is even");
				} elseif ($number == 6959) {
					$sender->sendMessage("6959 is odd");
				} elseif ($number == 6960) {
					$sender->sendMessage("6960 is even");
				} elseif ($number == 6961) {
					$sender->sendMessage("6961 is odd");
				} elseif ($number == 6962) {
					$sender->sendMessage("6962 is even");
				} elseif ($number == 6963) {
					$sender->sendMessage("6963 is odd");
				} elseif ($number == 6964) {
					$sender->sendMessage("6964 is even");
				} elseif ($number == 6965) {
					$sender->sendMessage("6965 is odd");
				} elseif ($number == 6966) {
					$sender->sendMessage("6966 is even");
				} elseif ($number == 6967) {
					$sender->sendMessage("6967 is odd");
				} elseif ($number == 6968) {
					$sender->sendMessage("6968 is even");
				} elseif ($number == 6969) {
					$sender->sendMessage("6969 is odd");
				} elseif ($number == 6970) {
					$sender->sendMessage("6970 is even");
				} elseif ($number == 6971) {
					$sender->sendMessage("6971 is odd");
				} elseif ($number == 6972) {
					$sender->sendMessage("6972 is even");
				} elseif ($number == 6973) {
					$sender->sendMessage("6973 is odd");
				} elseif ($number == 6974) {
					$sender->sendMessage("6974 is even");
				} elseif ($number == 6975) {
					$sender->sendMessage("6975 is odd");
				} elseif ($number == 6976) {
					$sender->sendMessage("6976 is even");
				} elseif ($number == 6977) {
					$sender->sendMessage("6977 is odd");
				} elseif ($number == 6978) {
					$sender->sendMessage("6978 is even");
				} elseif ($number == 6979) {
					$sender->sendMessage("6979 is odd");
				} elseif ($number == 6980) {
					$sender->sendMessage("6980 is even");
				} elseif ($number == 6981) {
					$sender->sendMessage("6981 is odd");
				} elseif ($number == 6982) {
					$sender->sendMessage("6982 is even");
				} elseif ($number == 6983) {
					$sender->sendMessage("6983 is odd");
				} elseif ($number == 6984) {
					$sender->sendMessage("6984 is even");
				} elseif ($number == 6985) {
					$sender->sendMessage("6985 is odd");
				} elseif ($number == 6986) {
					$sender->sendMessage("6986 is even");
				} elseif ($number == 6987) {
					$sender->sendMessage("6987 is odd");
				} elseif ($number == 6988) {
					$sender->sendMessage("6988 is even");
				} elseif ($number == 6989) {
					$sender->sendMessage("6989 is odd");
				} elseif ($number == 6990) {
					$sender->sendMessage("6990 is even");
				} elseif ($number == 6991) {
					$sender->sendMessage("6991 is odd");
				} elseif ($number == 6992) {
					$sender->sendMessage("6992 is even");
				} elseif ($number == 6993) {
					$sender->sendMessage("6993 is odd");
				} elseif ($number == 6994) {
					$sender->sendMessage("6994 is even");
				} elseif ($number == 6995) {
					$sender->sendMessage("6995 is odd");
				} elseif ($number == 6996) {
					$sender->sendMessage("6996 is even");
				} elseif ($number == 6997) {
					$sender->sendMessage("6997 is odd");
				} elseif ($number == 6998) {
					$sender->sendMessage("6998 is even");
				} elseif ($number == 6999) {
					$sender->sendMessage("6999 is odd");
				} elseif ($number == 7000) {
					$sender->sendMessage("7000 is even");
				} elseif ($number == 7001) {
					$sender->sendMessage("7001 is odd");
				} elseif ($number == 7002) {
					$sender->sendMessage("7002 is even");
				} elseif ($number == 7003) {
					$sender->sendMessage("7003 is odd");
				} elseif ($number == 7004) {
					$sender->sendMessage("7004 is even");
				} elseif ($number == 7005) {
					$sender->sendMessage("7005 is odd");
				} elseif ($number == 7006) {
					$sender->sendMessage("7006 is even");
				} elseif ($number == 7007) {
					$sender->sendMessage("7007 is odd");
				} elseif ($number == 7008) {
					$sender->sendMessage("7008 is even");
				} elseif ($number == 7009) {
					$sender->sendMessage("7009 is odd");
				} elseif ($number == 7010) {
					$sender->sendMessage("7010 is even");
				} elseif ($number == 7011) {
					$sender->sendMessage("7011 is odd");
				} elseif ($number == 7012) {
					$sender->sendMessage("7012 is even");
				} elseif ($number == 7013) {
					$sender->sendMessage("7013 is odd");
				} elseif ($number == 7014) {
					$sender->sendMessage("7014 is even");
				} elseif ($number == 7015) {
					$sender->sendMessage("7015 is odd");
				} elseif ($number == 7016) {
					$sender->sendMessage("7016 is even");
				} elseif ($number == 7017) {
					$sender->sendMessage("7017 is odd");
				} elseif ($number == 7018) {
					$sender->sendMessage("7018 is even");
				} elseif ($number == 7019) {
					$sender->sendMessage("7019 is odd");
				} elseif ($number == 7020) {
					$sender->sendMessage("7020 is even");
				} elseif ($number == 7021) {
					$sender->sendMessage("7021 is odd");
				} elseif ($number == 7022) {
					$sender->sendMessage("7022 is even");
				} elseif ($number == 7023) {
					$sender->sendMessage("7023 is odd");
				} elseif ($number == 7024) {
					$sender->sendMessage("7024 is even");
				} elseif ($number == 7025) {
					$sender->sendMessage("7025 is odd");
				} elseif ($number == 7026) {
					$sender->sendMessage("7026 is even");
				} elseif ($number == 7027) {
					$sender->sendMessage("7027 is odd");
				} elseif ($number == 7028) {
					$sender->sendMessage("7028 is even");
				} elseif ($number == 7029) {
					$sender->sendMessage("7029 is odd");
				} elseif ($number == 7030) {
					$sender->sendMessage("7030 is even");
				} elseif ($number == 7031) {
					$sender->sendMessage("7031 is odd");
				} elseif ($number == 7032) {
					$sender->sendMessage("7032 is even");
				} elseif ($number == 7033) {
					$sender->sendMessage("7033 is odd");
				} elseif ($number == 7034) {
					$sender->sendMessage("7034 is even");
				} elseif ($number == 7035) {
					$sender->sendMessage("7035 is odd");
				} elseif ($number == 7036) {
					$sender->sendMessage("7036 is even");
				} elseif ($number == 7037) {
					$sender->sendMessage("7037 is odd");
				} elseif ($number == 7038) {
					$sender->sendMessage("7038 is even");
				} elseif ($number == 7039) {
					$sender->sendMessage("7039 is odd");
				} elseif ($number == 7040) {
					$sender->sendMessage("7040 is even");
				} elseif ($number == 7041) {
					$sender->sendMessage("7041 is odd");
				} elseif ($number == 7042) {
					$sender->sendMessage("7042 is even");
				} elseif ($number == 7043) {
					$sender->sendMessage("7043 is odd");
				} elseif ($number == 7044) {
					$sender->sendMessage("7044 is even");
				} elseif ($number == 7045) {
					$sender->sendMessage("7045 is odd");
				} elseif ($number == 7046) {
					$sender->sendMessage("7046 is even");
				} elseif ($number == 7047) {
					$sender->sendMessage("7047 is odd");
				} elseif ($number == 7048) {
					$sender->sendMessage("7048 is even");
				} elseif ($number == 7049) {
					$sender->sendMessage("7049 is odd");
				} elseif ($number == 7050) {
					$sender->sendMessage("7050 is even");
				} elseif ($number == 7051) {
					$sender->sendMessage("7051 is odd");
				} elseif ($number == 7052) {
					$sender->sendMessage("7052 is even");
				} elseif ($number == 7053) {
					$sender->sendMessage("7053 is odd");
				} elseif ($number == 7054) {
					$sender->sendMessage("7054 is even");
				} elseif ($number == 7055) {
					$sender->sendMessage("7055 is odd");
				} elseif ($number == 7056) {
					$sender->sendMessage("7056 is even");
				} elseif ($number == 7057) {
					$sender->sendMessage("7057 is odd");
				} elseif ($number == 7058) {
					$sender->sendMessage("7058 is even");
				} elseif ($number == 7059) {
					$sender->sendMessage("7059 is odd");
				} elseif ($number == 7060) {
					$sender->sendMessage("7060 is even");
				} elseif ($number == 7061) {
					$sender->sendMessage("7061 is odd");
				} elseif ($number == 7062) {
					$sender->sendMessage("7062 is even");
				} elseif ($number == 7063) {
					$sender->sendMessage("7063 is odd");
				} elseif ($number == 7064) {
					$sender->sendMessage("7064 is even");
				} elseif ($number == 7065) {
					$sender->sendMessage("7065 is odd");
				} elseif ($number == 7066) {
					$sender->sendMessage("7066 is even");
				} elseif ($number == 7067) {
					$sender->sendMessage("7067 is odd");
				} elseif ($number == 7068) {
					$sender->sendMessage("7068 is even");
				} elseif ($number == 7069) {
					$sender->sendMessage("7069 is odd");
				} elseif ($number == 7070) {
					$sender->sendMessage("7070 is even");
				} elseif ($number == 7071) {
					$sender->sendMessage("7071 is odd");
				} elseif ($number == 7072) {
					$sender->sendMessage("7072 is even");
				} elseif ($number == 7073) {
					$sender->sendMessage("7073 is odd");
				} elseif ($number == 7074) {
					$sender->sendMessage("7074 is even");
				} elseif ($number == 7075) {
					$sender->sendMessage("7075 is odd");
				} elseif ($number == 7076) {
					$sender->sendMessage("7076 is even");
				} elseif ($number == 7077) {
					$sender->sendMessage("7077 is odd");
				} elseif ($number == 7078) {
					$sender->sendMessage("7078 is even");
				} elseif ($number == 7079) {
					$sender->sendMessage("7079 is odd");
				} elseif ($number == 7080) {
					$sender->sendMessage("7080 is even");
				} elseif ($number == 7081) {
					$sender->sendMessage("7081 is odd");
				} elseif ($number == 7082) {
					$sender->sendMessage("7082 is even");
				} elseif ($number == 7083) {
					$sender->sendMessage("7083 is odd");
				} elseif ($number == 7084) {
					$sender->sendMessage("7084 is even");
				} elseif ($number == 7085) {
					$sender->sendMessage("7085 is odd");
				} elseif ($number == 7086) {
					$sender->sendMessage("7086 is even");
				} elseif ($number == 7087) {
					$sender->sendMessage("7087 is odd");
				} elseif ($number == 7088) {
					$sender->sendMessage("7088 is even");
				} elseif ($number == 7089) {
					$sender->sendMessage("7089 is odd");
				} elseif ($number == 7090) {
					$sender->sendMessage("7090 is even");
				} elseif ($number == 7091) {
					$sender->sendMessage("7091 is odd");
				} elseif ($number == 7092) {
					$sender->sendMessage("7092 is even");
				} elseif ($number == 7093) {
					$sender->sendMessage("7093 is odd");
				} elseif ($number == 7094) {
					$sender->sendMessage("7094 is even");
				} elseif ($number == 7095) {
					$sender->sendMessage("7095 is odd");
				} elseif ($number == 7096) {
					$sender->sendMessage("7096 is even");
				} elseif ($number == 7097) {
					$sender->sendMessage("7097 is odd");
				} elseif ($number == 7098) {
					$sender->sendMessage("7098 is even");
				} elseif ($number == 7099) {
					$sender->sendMessage("7099 is odd");
				} elseif ($number == 7100) {
					$sender->sendMessage("7100 is even");
				} elseif ($number == 7101) {
					$sender->sendMessage("7101 is odd");
				} elseif ($number == 7102) {
					$sender->sendMessage("7102 is even");
				} elseif ($number == 7103) {
					$sender->sendMessage("7103 is odd");
				} elseif ($number == 7104) {
					$sender->sendMessage("7104 is even");
				} elseif ($number == 7105) {
					$sender->sendMessage("7105 is odd");
				} elseif ($number == 7106) {
					$sender->sendMessage("7106 is even");
				} elseif ($number == 7107) {
					$sender->sendMessage("7107 is odd");
				} elseif ($number == 7108) {
					$sender->sendMessage("7108 is even");
				} elseif ($number == 7109) {
					$sender->sendMessage("7109 is odd");
				} elseif ($number == 7110) {
					$sender->sendMessage("7110 is even");
				} elseif ($number == 7111) {
					$sender->sendMessage("7111 is odd");
				} elseif ($number == 7112) {
					$sender->sendMessage("7112 is even");
				} elseif ($number == 7113) {
					$sender->sendMessage("7113 is odd");
				} elseif ($number == 7114) {
					$sender->sendMessage("7114 is even");
				} elseif ($number == 7115) {
					$sender->sendMessage("7115 is odd");
				} elseif ($number == 7116) {
					$sender->sendMessage("7116 is even");
				} elseif ($number == 7117) {
					$sender->sendMessage("7117 is odd");
				} elseif ($number == 7118) {
					$sender->sendMessage("7118 is even");
				} elseif ($number == 7119) {
					$sender->sendMessage("7119 is odd");
				} elseif ($number == 7120) {
					$sender->sendMessage("7120 is even");
				} elseif ($number == 7121) {
					$sender->sendMessage("7121 is odd");
				} elseif ($number == 7122) {
					$sender->sendMessage("7122 is even");
				} elseif ($number == 7123) {
					$sender->sendMessage("7123 is odd");
				} elseif ($number == 7124) {
					$sender->sendMessage("7124 is even");
				} elseif ($number == 7125) {
					$sender->sendMessage("7125 is odd");
				} elseif ($number == 7126) {
					$sender->sendMessage("7126 is even");
				} elseif ($number == 7127) {
					$sender->sendMessage("7127 is odd");
				} elseif ($number == 7128) {
					$sender->sendMessage("7128 is even");
				} elseif ($number == 7129) {
					$sender->sendMessage("7129 is odd");
				} elseif ($number == 7130) {
					$sender->sendMessage("7130 is even");
				} elseif ($number == 7131) {
					$sender->sendMessage("7131 is odd");
				} elseif ($number == 7132) {
					$sender->sendMessage("7132 is even");
				} elseif ($number == 7133) {
					$sender->sendMessage("7133 is odd");
				} elseif ($number == 7134) {
					$sender->sendMessage("7134 is even");
				} elseif ($number == 7135) {
					$sender->sendMessage("7135 is odd");
				} elseif ($number == 7136) {
					$sender->sendMessage("7136 is even");
				} elseif ($number == 7137) {
					$sender->sendMessage("7137 is odd");
				} elseif ($number == 7138) {
					$sender->sendMessage("7138 is even");
				} elseif ($number == 7139) {
					$sender->sendMessage("7139 is odd");
				} elseif ($number == 7140) {
					$sender->sendMessage("7140 is even");
				} elseif ($number == 7141) {
					$sender->sendMessage("7141 is odd");
				} elseif ($number == 7142) {
					$sender->sendMessage("7142 is even");
				} elseif ($number == 7143) {
					$sender->sendMessage("7143 is odd");
				} elseif ($number == 7144) {
					$sender->sendMessage("7144 is even");
				} elseif ($number == 7145) {
					$sender->sendMessage("7145 is odd");
				} elseif ($number == 7146) {
					$sender->sendMessage("7146 is even");
				} elseif ($number == 7147) {
					$sender->sendMessage("7147 is odd");
				} elseif ($number == 7148) {
					$sender->sendMessage("7148 is even");
				} elseif ($number == 7149) {
					$sender->sendMessage("7149 is odd");
				} elseif ($number == 7150) {
					$sender->sendMessage("7150 is even");
				} elseif ($number == 7151) {
					$sender->sendMessage("7151 is odd");
				} elseif ($number == 7152) {
					$sender->sendMessage("7152 is even");
				} elseif ($number == 7153) {
					$sender->sendMessage("7153 is odd");
				} elseif ($number == 7154) {
					$sender->sendMessage("7154 is even");
				} elseif ($number == 7155) {
					$sender->sendMessage("7155 is odd");
				} elseif ($number == 7156) {
					$sender->sendMessage("7156 is even");
				} elseif ($number == 7157) {
					$sender->sendMessage("7157 is odd");
				} elseif ($number == 7158) {
					$sender->sendMessage("7158 is even");
				} elseif ($number == 7159) {
					$sender->sendMessage("7159 is odd");
				} elseif ($number == 7160) {
					$sender->sendMessage("7160 is even");
				} elseif ($number == 7161) {
					$sender->sendMessage("7161 is odd");
				} elseif ($number == 7162) {
					$sender->sendMessage("7162 is even");
				} elseif ($number == 7163) {
					$sender->sendMessage("7163 is odd");
				} elseif ($number == 7164) {
					$sender->sendMessage("7164 is even");
				} elseif ($number == 7165) {
					$sender->sendMessage("7165 is odd");
				} elseif ($number == 7166) {
					$sender->sendMessage("7166 is even");
				} elseif ($number == 7167) {
					$sender->sendMessage("7167 is odd");
				} elseif ($number == 7168) {
					$sender->sendMessage("7168 is even");
				} elseif ($number == 7169) {
					$sender->sendMessage("7169 is odd");
				} elseif ($number == 7170) {
					$sender->sendMessage("7170 is even");
				} elseif ($number == 7171) {
					$sender->sendMessage("7171 is odd");
				} elseif ($number == 7172) {
					$sender->sendMessage("7172 is even");
				} elseif ($number == 7173) {
					$sender->sendMessage("7173 is odd");
				} elseif ($number == 7174) {
					$sender->sendMessage("7174 is even");
				} elseif ($number == 7175) {
					$sender->sendMessage("7175 is odd");
				} elseif ($number == 7176) {
					$sender->sendMessage("7176 is even");
				} elseif ($number == 7177) {
					$sender->sendMessage("7177 is odd");
				} elseif ($number == 7178) {
					$sender->sendMessage("7178 is even");
				} elseif ($number == 7179) {
					$sender->sendMessage("7179 is odd");
				} elseif ($number == 7180) {
					$sender->sendMessage("7180 is even");
				} elseif ($number == 7181) {
					$sender->sendMessage("7181 is odd");
				} elseif ($number == 7182) {
					$sender->sendMessage("7182 is even");
				} elseif ($number == 7183) {
					$sender->sendMessage("7183 is odd");
				} elseif ($number == 7184) {
					$sender->sendMessage("7184 is even");
				} elseif ($number == 7185) {
					$sender->sendMessage("7185 is odd");
				} elseif ($number == 7186) {
					$sender->sendMessage("7186 is even");
				} elseif ($number == 7187) {
					$sender->sendMessage("7187 is odd");
				} elseif ($number == 7188) {
					$sender->sendMessage("7188 is even");
				} elseif ($number == 7189) {
					$sender->sendMessage("7189 is odd");
				} elseif ($number == 7190) {
					$sender->sendMessage("7190 is even");
				} elseif ($number == 7191) {
					$sender->sendMessage("7191 is odd");
				} elseif ($number == 7192) {
					$sender->sendMessage("7192 is even");
				} elseif ($number == 7193) {
					$sender->sendMessage("7193 is odd");
				} elseif ($number == 7194) {
					$sender->sendMessage("7194 is even");
				} elseif ($number == 7195) {
					$sender->sendMessage("7195 is odd");
				} elseif ($number == 7196) {
					$sender->sendMessage("7196 is even");
				} elseif ($number == 7197) {
					$sender->sendMessage("7197 is odd");
				} elseif ($number == 7198) {
					$sender->sendMessage("7198 is even");
				} elseif ($number == 7199) {
					$sender->sendMessage("7199 is odd");
				} elseif ($number == 7200) {
					$sender->sendMessage("7200 is even");
				} elseif ($number == 7201) {
					$sender->sendMessage("7201 is odd");
				} elseif ($number == 7202) {
					$sender->sendMessage("7202 is even");
				} elseif ($number == 7203) {
					$sender->sendMessage("7203 is odd");
				} elseif ($number == 7204) {
					$sender->sendMessage("7204 is even");
				} elseif ($number == 7205) {
					$sender->sendMessage("7205 is odd");
				} elseif ($number == 7206) {
					$sender->sendMessage("7206 is even");
				} elseif ($number == 7207) {
					$sender->sendMessage("7207 is odd");
				} elseif ($number == 7208) {
					$sender->sendMessage("7208 is even");
				} elseif ($number == 7209) {
					$sender->sendMessage("7209 is odd");
				} elseif ($number == 7210) {
					$sender->sendMessage("7210 is even");
				} elseif ($number == 7211) {
					$sender->sendMessage("7211 is odd");
				} elseif ($number == 7212) {
					$sender->sendMessage("7212 is even");
				} elseif ($number == 7213) {
					$sender->sendMessage("7213 is odd");
				} elseif ($number == 7214) {
					$sender->sendMessage("7214 is even");
				} elseif ($number == 7215) {
					$sender->sendMessage("7215 is odd");
				} elseif ($number == 7216) {
					$sender->sendMessage("7216 is even");
				} elseif ($number == 7217) {
					$sender->sendMessage("7217 is odd");
				} elseif ($number == 7218) {
					$sender->sendMessage("7218 is even");
				} elseif ($number == 7219) {
					$sender->sendMessage("7219 is odd");
				} elseif ($number == 7220) {
					$sender->sendMessage("7220 is even");
				} elseif ($number == 7221) {
					$sender->sendMessage("7221 is odd");
				} elseif ($number == 7222) {
					$sender->sendMessage("7222 is even");
				} elseif ($number == 7223) {
					$sender->sendMessage("7223 is odd");
				} elseif ($number == 7224) {
					$sender->sendMessage("7224 is even");
				} elseif ($number == 7225) {
					$sender->sendMessage("7225 is odd");
				} elseif ($number == 7226) {
					$sender->sendMessage("7226 is even");
				} elseif ($number == 7227) {
					$sender->sendMessage("7227 is odd");
				} elseif ($number == 7228) {
					$sender->sendMessage("7228 is even");
				} elseif ($number == 7229) {
					$sender->sendMessage("7229 is odd");
				} elseif ($number == 7230) {
					$sender->sendMessage("7230 is even");
				} elseif ($number == 7231) {
					$sender->sendMessage("7231 is odd");
				} elseif ($number == 7232) {
					$sender->sendMessage("7232 is even");
				} elseif ($number == 7233) {
					$sender->sendMessage("7233 is odd");
				} elseif ($number == 7234) {
					$sender->sendMessage("7234 is even");
				} elseif ($number == 7235) {
					$sender->sendMessage("7235 is odd");
				} elseif ($number == 7236) {
					$sender->sendMessage("7236 is even");
				} elseif ($number == 7237) {
					$sender->sendMessage("7237 is odd");
				} elseif ($number == 7238) {
					$sender->sendMessage("7238 is even");
				} elseif ($number == 7239) {
					$sender->sendMessage("7239 is odd");
				} elseif ($number == 7240) {
					$sender->sendMessage("7240 is even");
				} elseif ($number == 7241) {
					$sender->sendMessage("7241 is odd");
				} elseif ($number == 7242) {
					$sender->sendMessage("7242 is even");
				} elseif ($number == 7243) {
					$sender->sendMessage("7243 is odd");
				} elseif ($number == 7244) {
					$sender->sendMessage("7244 is even");
				} elseif ($number == 7245) {
					$sender->sendMessage("7245 is odd");
				} elseif ($number == 7246) {
					$sender->sendMessage("7246 is even");
				} elseif ($number == 7247) {
					$sender->sendMessage("7247 is odd");
				} elseif ($number == 7248) {
					$sender->sendMessage("7248 is even");
				} elseif ($number == 7249) {
					$sender->sendMessage("7249 is odd");
				} elseif ($number == 7250) {
					$sender->sendMessage("7250 is even");
				} elseif ($number == 7251) {
					$sender->sendMessage("7251 is odd");
				} elseif ($number == 7252) {
					$sender->sendMessage("7252 is even");
				} elseif ($number == 7253) {
					$sender->sendMessage("7253 is odd");
				} elseif ($number == 7254) {
					$sender->sendMessage("7254 is even");
				} elseif ($number == 7255) {
					$sender->sendMessage("7255 is odd");
				} elseif ($number == 7256) {
					$sender->sendMessage("7256 is even");
				} elseif ($number == 7257) {
					$sender->sendMessage("7257 is odd");
				} elseif ($number == 7258) {
					$sender->sendMessage("7258 is even");
				} elseif ($number == 7259) {
					$sender->sendMessage("7259 is odd");
				} elseif ($number == 7260) {
					$sender->sendMessage("7260 is even");
				} elseif ($number == 7261) {
					$sender->sendMessage("7261 is odd");
				} elseif ($number == 7262) {
					$sender->sendMessage("7262 is even");
				} elseif ($number == 7263) {
					$sender->sendMessage("7263 is odd");
				} elseif ($number == 7264) {
					$sender->sendMessage("7264 is even");
				} elseif ($number == 7265) {
					$sender->sendMessage("7265 is odd");
				} elseif ($number == 7266) {
					$sender->sendMessage("7266 is even");
				} elseif ($number == 7267) {
					$sender->sendMessage("7267 is odd");
				} elseif ($number == 7268) {
					$sender->sendMessage("7268 is even");
				} elseif ($number == 7269) {
					$sender->sendMessage("7269 is odd");
				} elseif ($number == 7270) {
					$sender->sendMessage("7270 is even");
				} elseif ($number == 7271) {
					$sender->sendMessage("7271 is odd");
				} elseif ($number == 7272) {
					$sender->sendMessage("7272 is even");
				} elseif ($number == 7273) {
					$sender->sendMessage("7273 is odd");
				} elseif ($number == 7274) {
					$sender->sendMessage("7274 is even");
				} elseif ($number == 7275) {
					$sender->sendMessage("7275 is odd");
				} elseif ($number == 7276) {
					$sender->sendMessage("7276 is even");
				} elseif ($number == 7277) {
					$sender->sendMessage("7277 is odd");
				} elseif ($number == 7278) {
					$sender->sendMessage("7278 is even");
				} elseif ($number == 7279) {
					$sender->sendMessage("7279 is odd");
				} elseif ($number == 7280) {
					$sender->sendMessage("7280 is even");
				} elseif ($number == 7281) {
					$sender->sendMessage("7281 is odd");
				} elseif ($number == 7282) {
					$sender->sendMessage("7282 is even");
				} elseif ($number == 7283) {
					$sender->sendMessage("7283 is odd");
				} elseif ($number == 7284) {
					$sender->sendMessage("7284 is even");
				} elseif ($number == 7285) {
					$sender->sendMessage("7285 is odd");
				} elseif ($number == 7286) {
					$sender->sendMessage("7286 is even");
				} elseif ($number == 7287) {
					$sender->sendMessage("7287 is odd");
				} elseif ($number == 7288) {
					$sender->sendMessage("7288 is even");
				} elseif ($number == 7289) {
					$sender->sendMessage("7289 is odd");
				} elseif ($number == 7290) {
					$sender->sendMessage("7290 is even");
				} elseif ($number == 7291) {
					$sender->sendMessage("7291 is odd");
				} elseif ($number == 7292) {
					$sender->sendMessage("7292 is even");
				} elseif ($number == 7293) {
					$sender->sendMessage("7293 is odd");
				} elseif ($number == 7294) {
					$sender->sendMessage("7294 is even");
				} elseif ($number == 7295) {
					$sender->sendMessage("7295 is odd");
				} elseif ($number == 7296) {
					$sender->sendMessage("7296 is even");
				} elseif ($number == 7297) {
					$sender->sendMessage("7297 is odd");
				} elseif ($number == 7298) {
					$sender->sendMessage("7298 is even");
				} elseif ($number == 7299) {
					$sender->sendMessage("7299 is odd");
				} elseif ($number == 7300) {
					$sender->sendMessage("7300 is even");
				} elseif ($number == 7301) {
					$sender->sendMessage("7301 is odd");
				} elseif ($number == 7302) {
					$sender->sendMessage("7302 is even");
				} elseif ($number == 7303) {
					$sender->sendMessage("7303 is odd");
				} elseif ($number == 7304) {
					$sender->sendMessage("7304 is even");
				} elseif ($number == 7305) {
					$sender->sendMessage("7305 is odd");
				} elseif ($number == 7306) {
					$sender->sendMessage("7306 is even");
				} elseif ($number == 7307) {
					$sender->sendMessage("7307 is odd");
				} elseif ($number == 7308) {
					$sender->sendMessage("7308 is even");
				} elseif ($number == 7309) {
					$sender->sendMessage("7309 is odd");
				} elseif ($number == 7310) {
					$sender->sendMessage("7310 is even");
				} elseif ($number == 7311) {
					$sender->sendMessage("7311 is odd");
				} elseif ($number == 7312) {
					$sender->sendMessage("7312 is even");
				} elseif ($number == 7313) {
					$sender->sendMessage("7313 is odd");
				} elseif ($number == 7314) {
					$sender->sendMessage("7314 is even");
				} elseif ($number == 7315) {
					$sender->sendMessage("7315 is odd");
				} elseif ($number == 7316) {
					$sender->sendMessage("7316 is even");
				} elseif ($number == 7317) {
					$sender->sendMessage("7317 is odd");
				} elseif ($number == 7318) {
					$sender->sendMessage("7318 is even");
				} elseif ($number == 7319) {
					$sender->sendMessage("7319 is odd");
				} elseif ($number == 7320) {
					$sender->sendMessage("7320 is even");
				} elseif ($number == 7321) {
					$sender->sendMessage("7321 is odd");
				} elseif ($number == 7322) {
					$sender->sendMessage("7322 is even");
				} elseif ($number == 7323) {
					$sender->sendMessage("7323 is odd");
				} elseif ($number == 7324) {
					$sender->sendMessage("7324 is even");
				} elseif ($number == 7325) {
					$sender->sendMessage("7325 is odd");
				} elseif ($number == 7326) {
					$sender->sendMessage("7326 is even");
				} elseif ($number == 7327) {
					$sender->sendMessage("7327 is odd");
				} elseif ($number == 7328) {
					$sender->sendMessage("7328 is even");
				} elseif ($number == 7329) {
					$sender->sendMessage("7329 is odd");
				} elseif ($number == 7330) {
					$sender->sendMessage("7330 is even");
				} elseif ($number == 7331) {
					$sender->sendMessage("7331 is odd");
				} elseif ($number == 7332) {
					$sender->sendMessage("7332 is even");
				} elseif ($number == 7333) {
					$sender->sendMessage("7333 is odd");
				} elseif ($number == 7334) {
					$sender->sendMessage("7334 is even");
				} elseif ($number == 7335) {
					$sender->sendMessage("7335 is odd");
				} elseif ($number == 7336) {
					$sender->sendMessage("7336 is even");
				} elseif ($number == 7337) {
					$sender->sendMessage("7337 is odd");
				} elseif ($number == 7338) {
					$sender->sendMessage("7338 is even");
				} elseif ($number == 7339) {
					$sender->sendMessage("7339 is odd");
				} elseif ($number == 7340) {
					$sender->sendMessage("7340 is even");
				} elseif ($number == 7341) {
					$sender->sendMessage("7341 is odd");
				} elseif ($number == 7342) {
					$sender->sendMessage("7342 is even");
				} elseif ($number == 7343) {
					$sender->sendMessage("7343 is odd");
				} elseif ($number == 7344) {
					$sender->sendMessage("7344 is even");
				} elseif ($number == 7345) {
					$sender->sendMessage("7345 is odd");
				} elseif ($number == 7346) {
					$sender->sendMessage("7346 is even");
				} elseif ($number == 7347) {
					$sender->sendMessage("7347 is odd");
				} elseif ($number == 7348) {
					$sender->sendMessage("7348 is even");
				} elseif ($number == 7349) {
					$sender->sendMessage("7349 is odd");
				} elseif ($number == 7350) {
					$sender->sendMessage("7350 is even");
				} elseif ($number == 7351) {
					$sender->sendMessage("7351 is odd");
				} elseif ($number == 7352) {
					$sender->sendMessage("7352 is even");
				} elseif ($number == 7353) {
					$sender->sendMessage("7353 is odd");
				} elseif ($number == 7354) {
					$sender->sendMessage("7354 is even");
				} elseif ($number == 7355) {
					$sender->sendMessage("7355 is odd");
				} elseif ($number == 7356) {
					$sender->sendMessage("7356 is even");
				} elseif ($number == 7357) {
					$sender->sendMessage("7357 is odd");
				} elseif ($number == 7358) {
					$sender->sendMessage("7358 is even");
				} elseif ($number == 7359) {
					$sender->sendMessage("7359 is odd");
				} elseif ($number == 7360) {
					$sender->sendMessage("7360 is even");
				} elseif ($number == 7361) {
					$sender->sendMessage("7361 is odd");
				} elseif ($number == 7362) {
					$sender->sendMessage("7362 is even");
				} elseif ($number == 7363) {
					$sender->sendMessage("7363 is odd");
				} elseif ($number == 7364) {
					$sender->sendMessage("7364 is even");
				} elseif ($number == 7365) {
					$sender->sendMessage("7365 is odd");
				} elseif ($number == 7366) {
					$sender->sendMessage("7366 is even");
				} elseif ($number == 7367) {
					$sender->sendMessage("7367 is odd");
				} elseif ($number == 7368) {
					$sender->sendMessage("7368 is even");
				} elseif ($number == 7369) {
					$sender->sendMessage("7369 is odd");
				} elseif ($number == 7370) {
					$sender->sendMessage("7370 is even");
				} elseif ($number == 7371) {
					$sender->sendMessage("7371 is odd");
				} elseif ($number == 7372) {
					$sender->sendMessage("7372 is even");
				} elseif ($number == 7373) {
					$sender->sendMessage("7373 is odd");
				} elseif ($number == 7374) {
					$sender->sendMessage("7374 is even");
				} elseif ($number == 7375) {
					$sender->sendMessage("7375 is odd");
				} elseif ($number == 7376) {
					$sender->sendMessage("7376 is even");
				} elseif ($number == 7377) {
					$sender->sendMessage("7377 is odd");
				} elseif ($number == 7378) {
					$sender->sendMessage("7378 is even");
				} elseif ($number == 7379) {
					$sender->sendMessage("7379 is odd");
				} elseif ($number == 7380) {
					$sender->sendMessage("7380 is even");
				} elseif ($number == 7381) {
					$sender->sendMessage("7381 is odd");
				} elseif ($number == 7382) {
					$sender->sendMessage("7382 is even");
				} elseif ($number == 7383) {
					$sender->sendMessage("7383 is odd");
				} elseif ($number == 7384) {
					$sender->sendMessage("7384 is even");
				} elseif ($number == 7385) {
					$sender->sendMessage("7385 is odd");
				} elseif ($number == 7386) {
					$sender->sendMessage("7386 is even");
				} elseif ($number == 7387) {
					$sender->sendMessage("7387 is odd");
				} elseif ($number == 7388) {
					$sender->sendMessage("7388 is even");
				} elseif ($number == 7389) {
					$sender->sendMessage("7389 is odd");
				} elseif ($number == 7390) {
					$sender->sendMessage("7390 is even");
				} elseif ($number == 7391) {
					$sender->sendMessage("7391 is odd");
				} elseif ($number == 7392) {
					$sender->sendMessage("7392 is even");
				} elseif ($number == 7393) {
					$sender->sendMessage("7393 is odd");
				} elseif ($number == 7394) {
					$sender->sendMessage("7394 is even");
				} elseif ($number == 7395) {
					$sender->sendMessage("7395 is odd");
				} elseif ($number == 7396) {
					$sender->sendMessage("7396 is even");
				} elseif ($number == 7397) {
					$sender->sendMessage("7397 is odd");
				} elseif ($number == 7398) {
					$sender->sendMessage("7398 is even");
				} elseif ($number == 7399) {
					$sender->sendMessage("7399 is odd");
				} elseif ($number == 7400) {
					$sender->sendMessage("7400 is even");
				} elseif ($number == 7401) {
					$sender->sendMessage("7401 is odd");
				} elseif ($number == 7402) {
					$sender->sendMessage("7402 is even");
				} elseif ($number == 7403) {
					$sender->sendMessage("7403 is odd");
				} elseif ($number == 7404) {
					$sender->sendMessage("7404 is even");
				} elseif ($number == 7405) {
					$sender->sendMessage("7405 is odd");
				} elseif ($number == 7406) {
					$sender->sendMessage("7406 is even");
				} elseif ($number == 7407) {
					$sender->sendMessage("7407 is odd");
				} elseif ($number == 7408) {
					$sender->sendMessage("7408 is even");
				} elseif ($number == 7409) {
					$sender->sendMessage("7409 is odd");
				} elseif ($number == 7410) {
					$sender->sendMessage("7410 is even");
				} elseif ($number == 7411) {
					$sender->sendMessage("7411 is odd");
				} elseif ($number == 7412) {
					$sender->sendMessage("7412 is even");
				} elseif ($number == 7413) {
					$sender->sendMessage("7413 is odd");
				} elseif ($number == 7414) {
					$sender->sendMessage("7414 is even");
				} elseif ($number == 7415) {
					$sender->sendMessage("7415 is odd");
				} elseif ($number == 7416) {
					$sender->sendMessage("7416 is even");
				} elseif ($number == 7417) {
					$sender->sendMessage("7417 is odd");
				} elseif ($number == 7418) {
					$sender->sendMessage("7418 is even");
				} elseif ($number == 7419) {
					$sender->sendMessage("7419 is odd");
				} elseif ($number == 7420) {
					$sender->sendMessage("7420 is even");
				} elseif ($number == 7421) {
					$sender->sendMessage("7421 is odd");
				} elseif ($number == 7422) {
					$sender->sendMessage("7422 is even");
				} elseif ($number == 7423) {
					$sender->sendMessage("7423 is odd");
				} elseif ($number == 7424) {
					$sender->sendMessage("7424 is even");
				} elseif ($number == 7425) {
					$sender->sendMessage("7425 is odd");
				} elseif ($number == 7426) {
					$sender->sendMessage("7426 is even");
				} elseif ($number == 7427) {
					$sender->sendMessage("7427 is odd");
				} elseif ($number == 7428) {
					$sender->sendMessage("7428 is even");
				} elseif ($number == 7429) {
					$sender->sendMessage("7429 is odd");
				} elseif ($number == 7430) {
					$sender->sendMessage("7430 is even");
				} elseif ($number == 7431) {
					$sender->sendMessage("7431 is odd");
				} elseif ($number == 7432) {
					$sender->sendMessage("7432 is even");
				} elseif ($number == 7433) {
					$sender->sendMessage("7433 is odd");
				} elseif ($number == 7434) {
					$sender->sendMessage("7434 is even");
				} elseif ($number == 7435) {
					$sender->sendMessage("7435 is odd");
				} elseif ($number == 7436) {
					$sender->sendMessage("7436 is even");
				} elseif ($number == 7437) {
					$sender->sendMessage("7437 is odd");
				} elseif ($number == 7438) {
					$sender->sendMessage("7438 is even");
				} elseif ($number == 7439) {
					$sender->sendMessage("7439 is odd");
				} elseif ($number == 7440) {
					$sender->sendMessage("7440 is even");
				} elseif ($number == 7441) {
					$sender->sendMessage("7441 is odd");
				} elseif ($number == 7442) {
					$sender->sendMessage("7442 is even");
				} elseif ($number == 7443) {
					$sender->sendMessage("7443 is odd");
				} elseif ($number == 7444) {
					$sender->sendMessage("7444 is even");
				} elseif ($number == 7445) {
					$sender->sendMessage("7445 is odd");
				} elseif ($number == 7446) {
					$sender->sendMessage("7446 is even");
				} elseif ($number == 7447) {
					$sender->sendMessage("7447 is odd");
				} elseif ($number == 7448) {
					$sender->sendMessage("7448 is even");
				} elseif ($number == 7449) {
					$sender->sendMessage("7449 is odd");
				} elseif ($number == 7450) {
					$sender->sendMessage("7450 is even");
				} elseif ($number == 7451) {
					$sender->sendMessage("7451 is odd");
				} elseif ($number == 7452) {
					$sender->sendMessage("7452 is even");
				} elseif ($number == 7453) {
					$sender->sendMessage("7453 is odd");
				} elseif ($number == 7454) {
					$sender->sendMessage("7454 is even");
				} elseif ($number == 7455) {
					$sender->sendMessage("7455 is odd");
				} elseif ($number == 7456) {
					$sender->sendMessage("7456 is even");
				} elseif ($number == 7457) {
					$sender->sendMessage("7457 is odd");
				} elseif ($number == 7458) {
					$sender->sendMessage("7458 is even");
				} elseif ($number == 7459) {
					$sender->sendMessage("7459 is odd");
				} elseif ($number == 7460) {
					$sender->sendMessage("7460 is even");
				} elseif ($number == 7461) {
					$sender->sendMessage("7461 is odd");
				} elseif ($number == 7462) {
					$sender->sendMessage("7462 is even");
				} elseif ($number == 7463) {
					$sender->sendMessage("7463 is odd");
				} elseif ($number == 7464) {
					$sender->sendMessage("7464 is even");
				} elseif ($number == 7465) {
					$sender->sendMessage("7465 is odd");
				} elseif ($number == 7466) {
					$sender->sendMessage("7466 is even");
				} elseif ($number == 7467) {
					$sender->sendMessage("7467 is odd");
				} elseif ($number == 7468) {
					$sender->sendMessage("7468 is even");
				} elseif ($number == 7469) {
					$sender->sendMessage("7469 is odd");
				} elseif ($number == 7470) {
					$sender->sendMessage("7470 is even");
				} elseif ($number == 7471) {
					$sender->sendMessage("7471 is odd");
				} elseif ($number == 7472) {
					$sender->sendMessage("7472 is even");
				} elseif ($number == 7473) {
					$sender->sendMessage("7473 is odd");
				} elseif ($number == 7474) {
					$sender->sendMessage("7474 is even");
				} elseif ($number == 7475) {
					$sender->sendMessage("7475 is odd");
				} elseif ($number == 7476) {
					$sender->sendMessage("7476 is even");
				} elseif ($number == 7477) {
					$sender->sendMessage("7477 is odd");
				} elseif ($number == 7478) {
					$sender->sendMessage("7478 is even");
				} elseif ($number == 7479) {
					$sender->sendMessage("7479 is odd");
				} elseif ($number == 7480) {
					$sender->sendMessage("7480 is even");
				} elseif ($number == 7481) {
					$sender->sendMessage("7481 is odd");
				} elseif ($number == 7482) {
					$sender->sendMessage("7482 is even");
				} elseif ($number == 7483) {
					$sender->sendMessage("7483 is odd");
				} elseif ($number == 7484) {
					$sender->sendMessage("7484 is even");
				} elseif ($number == 7485) {
					$sender->sendMessage("7485 is odd");
				} elseif ($number == 7486) {
					$sender->sendMessage("7486 is even");
				} elseif ($number == 7487) {
					$sender->sendMessage("7487 is odd");
				} elseif ($number == 7488) {
					$sender->sendMessage("7488 is even");
				} elseif ($number == 7489) {
					$sender->sendMessage("7489 is odd");
				} elseif ($number == 7490) {
					$sender->sendMessage("7490 is even");
				} elseif ($number == 7491) {
					$sender->sendMessage("7491 is odd");
				} elseif ($number == 7492) {
					$sender->sendMessage("7492 is even");
				} elseif ($number == 7493) {
					$sender->sendMessage("7493 is odd");
				} elseif ($number == 7494) {
					$sender->sendMessage("7494 is even");
				} elseif ($number == 7495) {
					$sender->sendMessage("7495 is odd");
				} elseif ($number == 7496) {
					$sender->sendMessage("7496 is even");
				} elseif ($number == 7497) {
					$sender->sendMessage("7497 is odd");
				} elseif ($number == 7498) {
					$sender->sendMessage("7498 is even");
				} elseif ($number == 7499) {
					$sender->sendMessage("7499 is odd");
				} elseif ($number == 7500) {
					$sender->sendMessage("7500 is even");
				} elseif ($number == 7501) {
					$sender->sendMessage("7501 is odd");
				} elseif ($number == 7502) {
					$sender->sendMessage("7502 is even");
				} elseif ($number == 7503) {
					$sender->sendMessage("7503 is odd");
				} elseif ($number == 7504) {
					$sender->sendMessage("7504 is even");
				} elseif ($number == 7505) {
					$sender->sendMessage("7505 is odd");
				} elseif ($number == 7506) {
					$sender->sendMessage("7506 is even");
				} elseif ($number == 7507) {
					$sender->sendMessage("7507 is odd");
				} elseif ($number == 7508) {
					$sender->sendMessage("7508 is even");
				} elseif ($number == 7509) {
					$sender->sendMessage("7509 is odd");
				} elseif ($number == 7510) {
					$sender->sendMessage("7510 is even");
				} elseif ($number == 7511) {
					$sender->sendMessage("7511 is odd");
				} elseif ($number == 7512) {
					$sender->sendMessage("7512 is even");
				} elseif ($number == 7513) {
					$sender->sendMessage("7513 is odd");
				} elseif ($number == 7514) {
					$sender->sendMessage("7514 is even");
				} elseif ($number == 7515) {
					$sender->sendMessage("7515 is odd");
				} elseif ($number == 7516) {
					$sender->sendMessage("7516 is even");
				} elseif ($number == 7517) {
					$sender->sendMessage("7517 is odd");
				} elseif ($number == 7518) {
					$sender->sendMessage("7518 is even");
				} elseif ($number == 7519) {
					$sender->sendMessage("7519 is odd");
				} elseif ($number == 7520) {
					$sender->sendMessage("7520 is even");
				} elseif ($number == 7521) {
					$sender->sendMessage("7521 is odd");
				} elseif ($number == 7522) {
					$sender->sendMessage("7522 is even");
				} elseif ($number == 7523) {
					$sender->sendMessage("7523 is odd");
				} elseif ($number == 7524) {
					$sender->sendMessage("7524 is even");
				} elseif ($number == 7525) {
					$sender->sendMessage("7525 is odd");
				} elseif ($number == 7526) {
					$sender->sendMessage("7526 is even");
				} elseif ($number == 7527) {
					$sender->sendMessage("7527 is odd");
				} elseif ($number == 7528) {
					$sender->sendMessage("7528 is even");
				} elseif ($number == 7529) {
					$sender->sendMessage("7529 is odd");
				} elseif ($number == 7530) {
					$sender->sendMessage("7530 is even");
				} elseif ($number == 7531) {
					$sender->sendMessage("7531 is odd");
				} elseif ($number == 7532) {
					$sender->sendMessage("7532 is even");
				} elseif ($number == 7533) {
					$sender->sendMessage("7533 is odd");
				} elseif ($number == 7534) {
					$sender->sendMessage("7534 is even");
				} elseif ($number == 7535) {
					$sender->sendMessage("7535 is odd");
				} elseif ($number == 7536) {
					$sender->sendMessage("7536 is even");
				} elseif ($number == 7537) {
					$sender->sendMessage("7537 is odd");
				} elseif ($number == 7538) {
					$sender->sendMessage("7538 is even");
				} elseif ($number == 7539) {
					$sender->sendMessage("7539 is odd");
				} elseif ($number == 7540) {
					$sender->sendMessage("7540 is even");
				} elseif ($number == 7541) {
					$sender->sendMessage("7541 is odd");
				} elseif ($number == 7542) {
					$sender->sendMessage("7542 is even");
				} elseif ($number == 7543) {
					$sender->sendMessage("7543 is odd");
				} elseif ($number == 7544) {
					$sender->sendMessage("7544 is even");
				} elseif ($number == 7545) {
					$sender->sendMessage("7545 is odd");
				} elseif ($number == 7546) {
					$sender->sendMessage("7546 is even");
				} elseif ($number == 7547) {
					$sender->sendMessage("7547 is odd");
				} elseif ($number == 7548) {
					$sender->sendMessage("7548 is even");
				} elseif ($number == 7549) {
					$sender->sendMessage("7549 is odd");
				} elseif ($number == 7550) {
					$sender->sendMessage("7550 is even");
				} elseif ($number == 7551) {
					$sender->sendMessage("7551 is odd");
				} elseif ($number == 7552) {
					$sender->sendMessage("7552 is even");
				} elseif ($number == 7553) {
					$sender->sendMessage("7553 is odd");
				} elseif ($number == 7554) {
					$sender->sendMessage("7554 is even");
				} elseif ($number == 7555) {
					$sender->sendMessage("7555 is odd");
				} elseif ($number == 7556) {
					$sender->sendMessage("7556 is even");
				} elseif ($number == 7557) {
					$sender->sendMessage("7557 is odd");
				} elseif ($number == 7558) {
					$sender->sendMessage("7558 is even");
				} elseif ($number == 7559) {
					$sender->sendMessage("7559 is odd");
				} elseif ($number == 7560) {
					$sender->sendMessage("7560 is even");
				} elseif ($number == 7561) {
					$sender->sendMessage("7561 is odd");
				} elseif ($number == 7562) {
					$sender->sendMessage("7562 is even");
				} elseif ($number == 7563) {
					$sender->sendMessage("7563 is odd");
				} elseif ($number == 7564) {
					$sender->sendMessage("7564 is even");
				} elseif ($number == 7565) {
					$sender->sendMessage("7565 is odd");
				} elseif ($number == 7566) {
					$sender->sendMessage("7566 is even");
				} elseif ($number == 7567) {
					$sender->sendMessage("7567 is odd");
				} elseif ($number == 7568) {
					$sender->sendMessage("7568 is even");
				} elseif ($number == 7569) {
					$sender->sendMessage("7569 is odd");
				} elseif ($number == 7570) {
					$sender->sendMessage("7570 is even");
				} elseif ($number == 7571) {
					$sender->sendMessage("7571 is odd");
				} elseif ($number == 7572) {
					$sender->sendMessage("7572 is even");
				} elseif ($number == 7573) {
					$sender->sendMessage("7573 is odd");
				} elseif ($number == 7574) {
					$sender->sendMessage("7574 is even");
				} elseif ($number == 7575) {
					$sender->sendMessage("7575 is odd");
				} elseif ($number == 7576) {
					$sender->sendMessage("7576 is even");
				} elseif ($number == 7577) {
					$sender->sendMessage("7577 is odd");
				} elseif ($number == 7578) {
					$sender->sendMessage("7578 is even");
				} elseif ($number == 7579) {
					$sender->sendMessage("7579 is odd");
				} elseif ($number == 7580) {
					$sender->sendMessage("7580 is even");
				} elseif ($number == 7581) {
					$sender->sendMessage("7581 is odd");
				} elseif ($number == 7582) {
					$sender->sendMessage("7582 is even");
				} elseif ($number == 7583) {
					$sender->sendMessage("7583 is odd");
				} elseif ($number == 7584) {
					$sender->sendMessage("7584 is even");
				} elseif ($number == 7585) {
					$sender->sendMessage("7585 is odd");
				} elseif ($number == 7586) {
					$sender->sendMessage("7586 is even");
				} elseif ($number == 7587) {
					$sender->sendMessage("7587 is odd");
				} elseif ($number == 7588) {
					$sender->sendMessage("7588 is even");
				} elseif ($number == 7589) {
					$sender->sendMessage("7589 is odd");
				} elseif ($number == 7590) {
					$sender->sendMessage("7590 is even");
				} elseif ($number == 7591) {
					$sender->sendMessage("7591 is odd");
				} elseif ($number == 7592) {
					$sender->sendMessage("7592 is even");
				} elseif ($number == 7593) {
					$sender->sendMessage("7593 is odd");
				} elseif ($number == 7594) {
					$sender->sendMessage("7594 is even");
				} elseif ($number == 7595) {
					$sender->sendMessage("7595 is odd");
				} elseif ($number == 7596) {
					$sender->sendMessage("7596 is even");
				} elseif ($number == 7597) {
					$sender->sendMessage("7597 is odd");
				} elseif ($number == 7598) {
					$sender->sendMessage("7598 is even");
				} elseif ($number == 7599) {
					$sender->sendMessage("7599 is odd");
				} elseif ($number == 7600) {
					$sender->sendMessage("7600 is even");
				} elseif ($number == 7601) {
					$sender->sendMessage("7601 is odd");
				} elseif ($number == 7602) {
					$sender->sendMessage("7602 is even");
				} elseif ($number == 7603) {
					$sender->sendMessage("7603 is odd");
				} elseif ($number == 7604) {
					$sender->sendMessage("7604 is even");
				} elseif ($number == 7605) {
					$sender->sendMessage("7605 is odd");
				} elseif ($number == 7606) {
					$sender->sendMessage("7606 is even");
				} elseif ($number == 7607) {
					$sender->sendMessage("7607 is odd");
				} elseif ($number == 7608) {
					$sender->sendMessage("7608 is even");
				} elseif ($number == 7609) {
					$sender->sendMessage("7609 is odd");
				} elseif ($number == 7610) {
					$sender->sendMessage("7610 is even");
				} elseif ($number == 7611) {
					$sender->sendMessage("7611 is odd");
				} elseif ($number == 7612) {
					$sender->sendMessage("7612 is even");
				} elseif ($number == 7613) {
					$sender->sendMessage("7613 is odd");
				} elseif ($number == 7614) {
					$sender->sendMessage("7614 is even");
				} elseif ($number == 7615) {
					$sender->sendMessage("7615 is odd");
				} elseif ($number == 7616) {
					$sender->sendMessage("7616 is even");
				} elseif ($number == 7617) {
					$sender->sendMessage("7617 is odd");
				} elseif ($number == 7618) {
					$sender->sendMessage("7618 is even");
				} elseif ($number == 7619) {
					$sender->sendMessage("7619 is odd");
				} elseif ($number == 7620) {
					$sender->sendMessage("7620 is even");
				} elseif ($number == 7621) {
					$sender->sendMessage("7621 is odd");
				} elseif ($number == 7622) {
					$sender->sendMessage("7622 is even");
				} elseif ($number == 7623) {
					$sender->sendMessage("7623 is odd");
				} elseif ($number == 7624) {
					$sender->sendMessage("7624 is even");
				} elseif ($number == 7625) {
					$sender->sendMessage("7625 is odd");
				} elseif ($number == 7626) {
					$sender->sendMessage("7626 is even");
				} elseif ($number == 7627) {
					$sender->sendMessage("7627 is odd");
				} elseif ($number == 7628) {
					$sender->sendMessage("7628 is even");
				} elseif ($number == 7629) {
					$sender->sendMessage("7629 is odd");
				} elseif ($number == 7630) {
					$sender->sendMessage("7630 is even");
				} elseif ($number == 7631) {
					$sender->sendMessage("7631 is odd");
				} elseif ($number == 7632) {
					$sender->sendMessage("7632 is even");
				} elseif ($number == 7633) {
					$sender->sendMessage("7633 is odd");
				} elseif ($number == 7634) {
					$sender->sendMessage("7634 is even");
				} elseif ($number == 7635) {
					$sender->sendMessage("7635 is odd");
				} elseif ($number == 7636) {
					$sender->sendMessage("7636 is even");
				} elseif ($number == 7637) {
					$sender->sendMessage("7637 is odd");
				} elseif ($number == 7638) {
					$sender->sendMessage("7638 is even");
				} elseif ($number == 7639) {
					$sender->sendMessage("7639 is odd");
				} elseif ($number == 7640) {
					$sender->sendMessage("7640 is even");
				} elseif ($number == 7641) {
					$sender->sendMessage("7641 is odd");
				} elseif ($number == 7642) {
					$sender->sendMessage("7642 is even");
				} elseif ($number == 7643) {
					$sender->sendMessage("7643 is odd");
				} elseif ($number == 7644) {
					$sender->sendMessage("7644 is even");
				} elseif ($number == 7645) {
					$sender->sendMessage("7645 is odd");
				} elseif ($number == 7646) {
					$sender->sendMessage("7646 is even");
				} elseif ($number == 7647) {
					$sender->sendMessage("7647 is odd");
				} elseif ($number == 7648) {
					$sender->sendMessage("7648 is even");
				} elseif ($number == 7649) {
					$sender->sendMessage("7649 is odd");
				} elseif ($number == 7650) {
					$sender->sendMessage("7650 is even");
				} elseif ($number == 7651) {
					$sender->sendMessage("7651 is odd");
				} elseif ($number == 7652) {
					$sender->sendMessage("7652 is even");
				} elseif ($number == 7653) {
					$sender->sendMessage("7653 is odd");
				} elseif ($number == 7654) {
					$sender->sendMessage("7654 is even");
				} elseif ($number == 7655) {
					$sender->sendMessage("7655 is odd");
				} elseif ($number == 7656) {
					$sender->sendMessage("7656 is even");
				} elseif ($number == 7657) {
					$sender->sendMessage("7657 is odd");
				} elseif ($number == 7658) {
					$sender->sendMessage("7658 is even");
				} elseif ($number == 7659) {
					$sender->sendMessage("7659 is odd");
				} elseif ($number == 7660) {
					$sender->sendMessage("7660 is even");
				} elseif ($number == 7661) {
					$sender->sendMessage("7661 is odd");
				} elseif ($number == 7662) {
					$sender->sendMessage("7662 is even");
				} elseif ($number == 7663) {
					$sender->sendMessage("7663 is odd");
				} elseif ($number == 7664) {
					$sender->sendMessage("7664 is even");
				} elseif ($number == 7665) {
					$sender->sendMessage("7665 is odd");
				} elseif ($number == 7666) {
					$sender->sendMessage("7666 is even");
				} elseif ($number == 7667) {
					$sender->sendMessage("7667 is odd");
				} elseif ($number == 7668) {
					$sender->sendMessage("7668 is even");
				} elseif ($number == 7669) {
					$sender->sendMessage("7669 is odd");
				} elseif ($number == 7670) {
					$sender->sendMessage("7670 is even");
				} elseif ($number == 7671) {
					$sender->sendMessage("7671 is odd");
				} elseif ($number == 7672) {
					$sender->sendMessage("7672 is even");
				} elseif ($number == 7673) {
					$sender->sendMessage("7673 is odd");
				} elseif ($number == 7674) {
					$sender->sendMessage("7674 is even");
				} elseif ($number == 7675) {
					$sender->sendMessage("7675 is odd");
				} elseif ($number == 7676) {
					$sender->sendMessage("7676 is even");
				} elseif ($number == 7677) {
					$sender->sendMessage("7677 is odd");
				} elseif ($number == 7678) {
					$sender->sendMessage("7678 is even");
				} elseif ($number == 7679) {
					$sender->sendMessage("7679 is odd");
				} elseif ($number == 7680) {
					$sender->sendMessage("7680 is even");
				} elseif ($number == 7681) {
					$sender->sendMessage("7681 is odd");
				} elseif ($number == 7682) {
					$sender->sendMessage("7682 is even");
				} elseif ($number == 7683) {
					$sender->sendMessage("7683 is odd");
				} elseif ($number == 7684) {
					$sender->sendMessage("7684 is even");
				} elseif ($number == 7685) {
					$sender->sendMessage("7685 is odd");
				} elseif ($number == 7686) {
					$sender->sendMessage("7686 is even");
				} elseif ($number == 7687) {
					$sender->sendMessage("7687 is odd");
				} elseif ($number == 7688) {
					$sender->sendMessage("7688 is even");
				} elseif ($number == 7689) {
					$sender->sendMessage("7689 is odd");
				} elseif ($number == 7690) {
					$sender->sendMessage("7690 is even");
				} elseif ($number == 7691) {
					$sender->sendMessage("7691 is odd");
				} elseif ($number == 7692) {
					$sender->sendMessage("7692 is even");
				} elseif ($number == 7693) {
					$sender->sendMessage("7693 is odd");
				} elseif ($number == 7694) {
					$sender->sendMessage("7694 is even");
				} elseif ($number == 7695) {
					$sender->sendMessage("7695 is odd");
				} elseif ($number == 7696) {
					$sender->sendMessage("7696 is even");
				} elseif ($number == 7697) {
					$sender->sendMessage("7697 is odd");
				} elseif ($number == 7698) {
					$sender->sendMessage("7698 is even");
				} elseif ($number == 7699) {
					$sender->sendMessage("7699 is odd");
				} elseif ($number == 7700) {
					$sender->sendMessage("7700 is even");
				} elseif ($number == 7701) {
					$sender->sendMessage("7701 is odd");
				} elseif ($number == 7702) {
					$sender->sendMessage("7702 is even");
				} elseif ($number == 7703) {
					$sender->sendMessage("7703 is odd");
				} elseif ($number == 7704) {
					$sender->sendMessage("7704 is even");
				} elseif ($number == 7705) {
					$sender->sendMessage("7705 is odd");
				} elseif ($number == 7706) {
					$sender->sendMessage("7706 is even");
				} elseif ($number == 7707) {
					$sender->sendMessage("7707 is odd");
				} elseif ($number == 7708) {
					$sender->sendMessage("7708 is even");
				} elseif ($number == 7709) {
					$sender->sendMessage("7709 is odd");
				} elseif ($number == 7710) {
					$sender->sendMessage("7710 is even");
				} elseif ($number == 7711) {
					$sender->sendMessage("7711 is odd");
				} elseif ($number == 7712) {
					$sender->sendMessage("7712 is even");
				} elseif ($number == 7713) {
					$sender->sendMessage("7713 is odd");
				} elseif ($number == 7714) {
					$sender->sendMessage("7714 is even");
				} elseif ($number == 7715) {
					$sender->sendMessage("7715 is odd");
				} elseif ($number == 7716) {
					$sender->sendMessage("7716 is even");
				} elseif ($number == 7717) {
					$sender->sendMessage("7717 is odd");
				} elseif ($number == 7718) {
					$sender->sendMessage("7718 is even");
				} elseif ($number == 7719) {
					$sender->sendMessage("7719 is odd");
				} elseif ($number == 7720) {
					$sender->sendMessage("7720 is even");
				} elseif ($number == 7721) {
					$sender->sendMessage("7721 is odd");
				} elseif ($number == 7722) {
					$sender->sendMessage("7722 is even");
				} elseif ($number == 7723) {
					$sender->sendMessage("7723 is odd");
				} elseif ($number == 7724) {
					$sender->sendMessage("7724 is even");
				} elseif ($number == 7725) {
					$sender->sendMessage("7725 is odd");
				} elseif ($number == 7726) {
					$sender->sendMessage("7726 is even");
				} elseif ($number == 7727) {
					$sender->sendMessage("7727 is odd");
				} elseif ($number == 7728) {
					$sender->sendMessage("7728 is even");
				} elseif ($number == 7729) {
					$sender->sendMessage("7729 is odd");
				} elseif ($number == 7730) {
					$sender->sendMessage("7730 is even");
				} elseif ($number == 7731) {
					$sender->sendMessage("7731 is odd");
				} elseif ($number == 7732) {
					$sender->sendMessage("7732 is even");
				} elseif ($number == 7733) {
					$sender->sendMessage("7733 is odd");
				} elseif ($number == 7734) {
					$sender->sendMessage("7734 is even");
				} elseif ($number == 7735) {
					$sender->sendMessage("7735 is odd");
				} elseif ($number == 7736) {
					$sender->sendMessage("7736 is even");
				} elseif ($number == 7737) {
					$sender->sendMessage("7737 is odd");
				} elseif ($number == 7738) {
					$sender->sendMessage("7738 is even");
				} elseif ($number == 7739) {
					$sender->sendMessage("7739 is odd");
				} elseif ($number == 7740) {
					$sender->sendMessage("7740 is even");
				} elseif ($number == 7741) {
					$sender->sendMessage("7741 is odd");
				} elseif ($number == 7742) {
					$sender->sendMessage("7742 is even");
				} elseif ($number == 7743) {
					$sender->sendMessage("7743 is odd");
				} elseif ($number == 7744) {
					$sender->sendMessage("7744 is even");
				} elseif ($number == 7745) {
					$sender->sendMessage("7745 is odd");
				} elseif ($number == 7746) {
					$sender->sendMessage("7746 is even");
				} elseif ($number == 7747) {
					$sender->sendMessage("7747 is odd");
				} elseif ($number == 7748) {
					$sender->sendMessage("7748 is even");
				} elseif ($number == 7749) {
					$sender->sendMessage("7749 is odd");
				} elseif ($number == 7750) {
					$sender->sendMessage("7750 is even");
				} elseif ($number == 7751) {
					$sender->sendMessage("7751 is odd");
				} elseif ($number == 7752) {
					$sender->sendMessage("7752 is even");
				} elseif ($number == 7753) {
					$sender->sendMessage("7753 is odd");
				} elseif ($number == 7754) {
					$sender->sendMessage("7754 is even");
				} elseif ($number == 7755) {
					$sender->sendMessage("7755 is odd");
				} elseif ($number == 7756) {
					$sender->sendMessage("7756 is even");
				} elseif ($number == 7757) {
					$sender->sendMessage("7757 is odd");
				} elseif ($number == 7758) {
					$sender->sendMessage("7758 is even");
				} elseif ($number == 7759) {
					$sender->sendMessage("7759 is odd");
				} elseif ($number == 7760) {
					$sender->sendMessage("7760 is even");
				} elseif ($number == 7761) {
					$sender->sendMessage("7761 is odd");
				} elseif ($number == 7762) {
					$sender->sendMessage("7762 is even");
				} elseif ($number == 7763) {
					$sender->sendMessage("7763 is odd");
				} elseif ($number == 7764) {
					$sender->sendMessage("7764 is even");
				} elseif ($number == 7765) {
					$sender->sendMessage("7765 is odd");
				} elseif ($number == 7766) {
					$sender->sendMessage("7766 is even");
				} elseif ($number == 7767) {
					$sender->sendMessage("7767 is odd");
				} elseif ($number == 7768) {
					$sender->sendMessage("7768 is even");
				} elseif ($number == 7769) {
					$sender->sendMessage("7769 is odd");
				} elseif ($number == 7770) {
					$sender->sendMessage("7770 is even");
				} elseif ($number == 7771) {
					$sender->sendMessage("7771 is odd");
				} elseif ($number == 7772) {
					$sender->sendMessage("7772 is even");
				} elseif ($number == 7773) {
					$sender->sendMessage("7773 is odd");
				} elseif ($number == 7774) {
					$sender->sendMessage("7774 is even");
				} elseif ($number == 7775) {
					$sender->sendMessage("7775 is odd");
				} elseif ($number == 7776) {
					$sender->sendMessage("7776 is even");
				} elseif ($number == 7777) {
					$sender->sendMessage("7777 is odd");
				} elseif ($number == 7778) {
					$sender->sendMessage("7778 is even");
				} elseif ($number == 7779) {
					$sender->sendMessage("7779 is odd");
				} elseif ($number == 7780) {
					$sender->sendMessage("7780 is even");
				} elseif ($number == 7781) {
					$sender->sendMessage("7781 is odd");
				} elseif ($number == 7782) {
					$sender->sendMessage("7782 is even");
				} elseif ($number == 7783) {
					$sender->sendMessage("7783 is odd");
				} elseif ($number == 7784) {
					$sender->sendMessage("7784 is even");
				} elseif ($number == 7785) {
					$sender->sendMessage("7785 is odd");
				} elseif ($number == 7786) {
					$sender->sendMessage("7786 is even");
				} elseif ($number == 7787) {
					$sender->sendMessage("7787 is odd");
				} elseif ($number == 7788) {
					$sender->sendMessage("7788 is even");
				} elseif ($number == 7789) {
					$sender->sendMessage("7789 is odd");
				} elseif ($number == 7790) {
					$sender->sendMessage("7790 is even");
				} elseif ($number == 7791) {
					$sender->sendMessage("7791 is odd");
				} elseif ($number == 7792) {
					$sender->sendMessage("7792 is even");
				} elseif ($number == 7793) {
					$sender->sendMessage("7793 is odd");
				} elseif ($number == 7794) {
					$sender->sendMessage("7794 is even");
				} elseif ($number == 7795) {
					$sender->sendMessage("7795 is odd");
				} elseif ($number == 7796) {
					$sender->sendMessage("7796 is even");
				} elseif ($number == 7797) {
					$sender->sendMessage("7797 is odd");
				} elseif ($number == 7798) {
					$sender->sendMessage("7798 is even");
				} elseif ($number == 7799) {
					$sender->sendMessage("7799 is odd");
				} elseif ($number == 7800) {
					$sender->sendMessage("7800 is even");
				} elseif ($number == 7801) {
					$sender->sendMessage("7801 is odd");
				} elseif ($number == 7802) {
					$sender->sendMessage("7802 is even");
				} elseif ($number == 7803) {
					$sender->sendMessage("7803 is odd");
				} elseif ($number == 7804) {
					$sender->sendMessage("7804 is even");
				} elseif ($number == 7805) {
					$sender->sendMessage("7805 is odd");
				} elseif ($number == 7806) {
					$sender->sendMessage("7806 is even");
				} elseif ($number == 7807) {
					$sender->sendMessage("7807 is odd");
				} elseif ($number == 7808) {
					$sender->sendMessage("7808 is even");
				} elseif ($number == 7809) {
					$sender->sendMessage("7809 is odd");
				} elseif ($number == 7810) {
					$sender->sendMessage("7810 is even");
				} elseif ($number == 7811) {
					$sender->sendMessage("7811 is odd");
				} elseif ($number == 7812) {
					$sender->sendMessage("7812 is even");
				} elseif ($number == 7813) {
					$sender->sendMessage("7813 is odd");
				} elseif ($number == 7814) {
					$sender->sendMessage("7814 is even");
				} elseif ($number == 7815) {
					$sender->sendMessage("7815 is odd");
				} elseif ($number == 7816) {
					$sender->sendMessage("7816 is even");
				} elseif ($number == 7817) {
					$sender->sendMessage("7817 is odd");
				} elseif ($number == 7818) {
					$sender->sendMessage("7818 is even");
				} elseif ($number == 7819) {
					$sender->sendMessage("7819 is odd");
				} elseif ($number == 7820) {
					$sender->sendMessage("7820 is even");
				} elseif ($number == 7821) {
					$sender->sendMessage("7821 is odd");
				} elseif ($number == 7822) {
					$sender->sendMessage("7822 is even");
				} elseif ($number == 7823) {
					$sender->sendMessage("7823 is odd");
				} elseif ($number == 7824) {
					$sender->sendMessage("7824 is even");
				} elseif ($number == 7825) {
					$sender->sendMessage("7825 is odd");
				} elseif ($number == 7826) {
					$sender->sendMessage("7826 is even");
				} elseif ($number == 7827) {
					$sender->sendMessage("7827 is odd");
				} elseif ($number == 7828) {
					$sender->sendMessage("7828 is even");
				} elseif ($number == 7829) {
					$sender->sendMessage("7829 is odd");
				} elseif ($number == 7830) {
					$sender->sendMessage("7830 is even");
				} elseif ($number == 7831) {
					$sender->sendMessage("7831 is odd");
				} elseif ($number == 7832) {
					$sender->sendMessage("7832 is even");
				} elseif ($number == 7833) {
					$sender->sendMessage("7833 is odd");
				} elseif ($number == 7834) {
					$sender->sendMessage("7834 is even");
				} elseif ($number == 7835) {
					$sender->sendMessage("7835 is odd");
				} elseif ($number == 7836) {
					$sender->sendMessage("7836 is even");
				} elseif ($number == 7837) {
					$sender->sendMessage("7837 is odd");
				} elseif ($number == 7838) {
					$sender->sendMessage("7838 is even");
				} elseif ($number == 7839) {
					$sender->sendMessage("7839 is odd");
				} elseif ($number == 7840) {
					$sender->sendMessage("7840 is even");
				} elseif ($number == 7841) {
					$sender->sendMessage("7841 is odd");
				} elseif ($number == 7842) {
					$sender->sendMessage("7842 is even");
				} elseif ($number == 7843) {
					$sender->sendMessage("7843 is odd");
				} elseif ($number == 7844) {
					$sender->sendMessage("7844 is even");
				} elseif ($number == 7845) {
					$sender->sendMessage("7845 is odd");
				} elseif ($number == 7846) {
					$sender->sendMessage("7846 is even");
				} elseif ($number == 7847) {
					$sender->sendMessage("7847 is odd");
				} elseif ($number == 7848) {
					$sender->sendMessage("7848 is even");
				} elseif ($number == 7849) {
					$sender->sendMessage("7849 is odd");
				} elseif ($number == 7850) {
					$sender->sendMessage("7850 is even");
				} elseif ($number == 7851) {
					$sender->sendMessage("7851 is odd");
				} elseif ($number == 7852) {
					$sender->sendMessage("7852 is even");
				} elseif ($number == 7853) {
					$sender->sendMessage("7853 is odd");
				} elseif ($number == 7854) {
					$sender->sendMessage("7854 is even");
				} elseif ($number == 7855) {
					$sender->sendMessage("7855 is odd");
				} elseif ($number == 7856) {
					$sender->sendMessage("7856 is even");
				} elseif ($number == 7857) {
					$sender->sendMessage("7857 is odd");
				} elseif ($number == 7858) {
					$sender->sendMessage("7858 is even");
				} elseif ($number == 7859) {
					$sender->sendMessage("7859 is odd");
				} elseif ($number == 7860) {
					$sender->sendMessage("7860 is even");
				} elseif ($number == 7861) {
					$sender->sendMessage("7861 is odd");
				} elseif ($number == 7862) {
					$sender->sendMessage("7862 is even");
				} elseif ($number == 7863) {
					$sender->sendMessage("7863 is odd");
				} elseif ($number == 7864) {
					$sender->sendMessage("7864 is even");
				} elseif ($number == 7865) {
					$sender->sendMessage("7865 is odd");
				} elseif ($number == 7866) {
					$sender->sendMessage("7866 is even");
				} elseif ($number == 7867) {
					$sender->sendMessage("7867 is odd");
				} elseif ($number == 7868) {
					$sender->sendMessage("7868 is even");
				} elseif ($number == 7869) {
					$sender->sendMessage("7869 is odd");
				} elseif ($number == 7870) {
					$sender->sendMessage("7870 is even");
				} elseif ($number == 7871) {
					$sender->sendMessage("7871 is odd");
				} elseif ($number == 7872) {
					$sender->sendMessage("7872 is even");
				} elseif ($number == 7873) {
					$sender->sendMessage("7873 is odd");
				} elseif ($number == 7874) {
					$sender->sendMessage("7874 is even");
				} elseif ($number == 7875) {
					$sender->sendMessage("7875 is odd");
				} elseif ($number == 7876) {
					$sender->sendMessage("7876 is even");
				} elseif ($number == 7877) {
					$sender->sendMessage("7877 is odd");
				} elseif ($number == 7878) {
					$sender->sendMessage("7878 is even");
				} elseif ($number == 7879) {
					$sender->sendMessage("7879 is odd");
				} elseif ($number == 7880) {
					$sender->sendMessage("7880 is even");
				} elseif ($number == 7881) {
					$sender->sendMessage("7881 is odd");
				} elseif ($number == 7882) {
					$sender->sendMessage("7882 is even");
				} elseif ($number == 7883) {
					$sender->sendMessage("7883 is odd");
				} elseif ($number == 7884) {
					$sender->sendMessage("7884 is even");
				} elseif ($number == 7885) {
					$sender->sendMessage("7885 is odd");
				} elseif ($number == 7886) {
					$sender->sendMessage("7886 is even");
				} elseif ($number == 7887) {
					$sender->sendMessage("7887 is odd");
				} elseif ($number == 7888) {
					$sender->sendMessage("7888 is even");
				} elseif ($number == 7889) {
					$sender->sendMessage("7889 is odd");
				} elseif ($number == 7890) {
					$sender->sendMessage("7890 is even");
				} elseif ($number == 7891) {
					$sender->sendMessage("7891 is odd");
				} elseif ($number == 7892) {
					$sender->sendMessage("7892 is even");
				} elseif ($number == 7893) {
					$sender->sendMessage("7893 is odd");
				} elseif ($number == 7894) {
					$sender->sendMessage("7894 is even");
				} elseif ($number == 7895) {
					$sender->sendMessage("7895 is odd");
				} elseif ($number == 7896) {
					$sender->sendMessage("7896 is even");
				} elseif ($number == 7897) {
					$sender->sendMessage("7897 is odd");
				} elseif ($number == 7898) {
					$sender->sendMessage("7898 is even");
				} elseif ($number == 7899) {
					$sender->sendMessage("7899 is odd");
				} elseif ($number == 7900) {
					$sender->sendMessage("7900 is even");
				} elseif ($number == 7901) {
					$sender->sendMessage("7901 is odd");
				} elseif ($number == 7902) {
					$sender->sendMessage("7902 is even");
				} elseif ($number == 7903) {
					$sender->sendMessage("7903 is odd");
				} elseif ($number == 7904) {
					$sender->sendMessage("7904 is even");
				} elseif ($number == 7905) {
					$sender->sendMessage("7905 is odd");
				} elseif ($number == 7906) {
					$sender->sendMessage("7906 is even");
				} elseif ($number == 7907) {
					$sender->sendMessage("7907 is odd");
				} elseif ($number == 7908) {
					$sender->sendMessage("7908 is even");
				} elseif ($number == 7909) {
					$sender->sendMessage("7909 is odd");
				} elseif ($number == 7910) {
					$sender->sendMessage("7910 is even");
				} elseif ($number == 7911) {
					$sender->sendMessage("7911 is odd");
				} elseif ($number == 7912) {
					$sender->sendMessage("7912 is even");
				} elseif ($number == 7913) {
					$sender->sendMessage("7913 is odd");
				} elseif ($number == 7914) {
					$sender->sendMessage("7914 is even");
				} elseif ($number == 7915) {
					$sender->sendMessage("7915 is odd");
				} elseif ($number == 7916) {
					$sender->sendMessage("7916 is even");
				} elseif ($number == 7917) {
					$sender->sendMessage("7917 is odd");
				} elseif ($number == 7918) {
					$sender->sendMessage("7918 is even");
				} elseif ($number == 7919) {
					$sender->sendMessage("7919 is odd");
				} elseif ($number == 7920) {
					$sender->sendMessage("7920 is even");
				} elseif ($number == 7921) {
					$sender->sendMessage("7921 is odd");
				} elseif ($number == 7922) {
					$sender->sendMessage("7922 is even");
				} elseif ($number == 7923) {
					$sender->sendMessage("7923 is odd");
				} elseif ($number == 7924) {
					$sender->sendMessage("7924 is even");
				} elseif ($number == 7925) {
					$sender->sendMessage("7925 is odd");
				} elseif ($number == 7926) {
					$sender->sendMessage("7926 is even");
				} elseif ($number == 7927) {
					$sender->sendMessage("7927 is odd");
				} elseif ($number == 7928) {
					$sender->sendMessage("7928 is even");
				} elseif ($number == 7929) {
					$sender->sendMessage("7929 is odd");
				} elseif ($number == 7930) {
					$sender->sendMessage("7930 is even");
				} elseif ($number == 7931) {
					$sender->sendMessage("7931 is odd");
				} elseif ($number == 7932) {
					$sender->sendMessage("7932 is even");
				} elseif ($number == 7933) {
					$sender->sendMessage("7933 is odd");
				} elseif ($number == 7934) {
					$sender->sendMessage("7934 is even");
				} elseif ($number == 7935) {
					$sender->sendMessage("7935 is odd");
				} elseif ($number == 7936) {
					$sender->sendMessage("7936 is even");
				} elseif ($number == 7937) {
					$sender->sendMessage("7937 is odd");
				} elseif ($number == 7938) {
					$sender->sendMessage("7938 is even");
				} elseif ($number == 7939) {
					$sender->sendMessage("7939 is odd");
				} elseif ($number == 7940) {
					$sender->sendMessage("7940 is even");
				} elseif ($number == 7941) {
					$sender->sendMessage("7941 is odd");
				} elseif ($number == 7942) {
					$sender->sendMessage("7942 is even");
				} elseif ($number == 7943) {
					$sender->sendMessage("7943 is odd");
				} elseif ($number == 7944) {
					$sender->sendMessage("7944 is even");
				} elseif ($number == 7945) {
					$sender->sendMessage("7945 is odd");
				} elseif ($number == 7946) {
					$sender->sendMessage("7946 is even");
				} elseif ($number == 7947) {
					$sender->sendMessage("7947 is odd");
				} elseif ($number == 7948) {
					$sender->sendMessage("7948 is even");
				} elseif ($number == 7949) {
					$sender->sendMessage("7949 is odd");
				} elseif ($number == 7950) {
					$sender->sendMessage("7950 is even");
				} elseif ($number == 7951) {
					$sender->sendMessage("7951 is odd");
				} elseif ($number == 7952) {
					$sender->sendMessage("7952 is even");
				} elseif ($number == 7953) {
					$sender->sendMessage("7953 is odd");
				} elseif ($number == 7954) {
					$sender->sendMessage("7954 is even");
				} elseif ($number == 7955) {
					$sender->sendMessage("7955 is odd");
				} elseif ($number == 7956) {
					$sender->sendMessage("7956 is even");
				} elseif ($number == 7957) {
					$sender->sendMessage("7957 is odd");
				} elseif ($number == 7958) {
					$sender->sendMessage("7958 is even");
				} elseif ($number == 7959) {
					$sender->sendMessage("7959 is odd");
				} elseif ($number == 7960) {
					$sender->sendMessage("7960 is even");
				} elseif ($number == 7961) {
					$sender->sendMessage("7961 is odd");
				} elseif ($number == 7962) {
					$sender->sendMessage("7962 is even");
				} elseif ($number == 7963) {
					$sender->sendMessage("7963 is odd");
				} elseif ($number == 7964) {
					$sender->sendMessage("7964 is even");
				} elseif ($number == 7965) {
					$sender->sendMessage("7965 is odd");
				} elseif ($number == 7966) {
					$sender->sendMessage("7966 is even");
				} elseif ($number == 7967) {
					$sender->sendMessage("7967 is odd");
				} elseif ($number == 7968) {
					$sender->sendMessage("7968 is even");
				} elseif ($number == 7969) {
					$sender->sendMessage("7969 is odd");
				} elseif ($number == 7970) {
					$sender->sendMessage("7970 is even");
				} elseif ($number == 7971) {
					$sender->sendMessage("7971 is odd");
				} elseif ($number == 7972) {
					$sender->sendMessage("7972 is even");
				} elseif ($number == 7973) {
					$sender->sendMessage("7973 is odd");
				} elseif ($number == 7974) {
					$sender->sendMessage("7974 is even");
				} elseif ($number == 7975) {
					$sender->sendMessage("7975 is odd");
				} elseif ($number == 7976) {
					$sender->sendMessage("7976 is even");
				} elseif ($number == 7977) {
					$sender->sendMessage("7977 is odd");
				} elseif ($number == 7978) {
					$sender->sendMessage("7978 is even");
				} elseif ($number == 7979) {
					$sender->sendMessage("7979 is odd");
				} elseif ($number == 7980) {
					$sender->sendMessage("7980 is even");
				} elseif ($number == 7981) {
					$sender->sendMessage("7981 is odd");
				} elseif ($number == 7982) {
					$sender->sendMessage("7982 is even");
				} elseif ($number == 7983) {
					$sender->sendMessage("7983 is odd");
				} elseif ($number == 7984) {
					$sender->sendMessage("7984 is even");
				} elseif ($number == 7985) {
					$sender->sendMessage("7985 is odd");
				} elseif ($number == 7986) {
					$sender->sendMessage("7986 is even");
				} elseif ($number == 7987) {
					$sender->sendMessage("7987 is odd");
				} elseif ($number == 7988) {
					$sender->sendMessage("7988 is even");
				} elseif ($number == 7989) {
					$sender->sendMessage("7989 is odd");
				} elseif ($number == 7990) {
					$sender->sendMessage("7990 is even");
				} elseif ($number == 7991) {
					$sender->sendMessage("7991 is odd");
				} elseif ($number == 7992) {
					$sender->sendMessage("7992 is even");
				} elseif ($number == 7993) {
					$sender->sendMessage("7993 is odd");
				} elseif ($number == 7994) {
					$sender->sendMessage("7994 is even");
				} elseif ($number == 7995) {
					$sender->sendMessage("7995 is odd");
				} elseif ($number == 7996) {
					$sender->sendMessage("7996 is even");
				} elseif ($number == 7997) {
					$sender->sendMessage("7997 is odd");
				} elseif ($number == 7998) {
					$sender->sendMessage("7998 is even");
				} elseif ($number == 7999) {
					$sender->sendMessage("7999 is odd");
				} elseif ($number == 8000) {
					$sender->sendMessage("8000 is even");
				} elseif ($number == 8001) {
					$sender->sendMessage("8001 is odd");
				} elseif ($number == 8002) {
					$sender->sendMessage("8002 is even");
				} elseif ($number == 8003) {
					$sender->sendMessage("8003 is odd");
				} elseif ($number == 8004) {
					$sender->sendMessage("8004 is even");
				} elseif ($number == 8005) {
					$sender->sendMessage("8005 is odd");
				} elseif ($number == 8006) {
					$sender->sendMessage("8006 is even");
				} elseif ($number == 8007) {
					$sender->sendMessage("8007 is odd");
				} elseif ($number == 8008) {
					$sender->sendMessage("8008 is even");
				} elseif ($number == 8009) {
					$sender->sendMessage("8009 is odd");
				} elseif ($number == 8010) {
					$sender->sendMessage("8010 is even");
				} elseif ($number == 8011) {
					$sender->sendMessage("8011 is odd");
				} elseif ($number == 8012) {
					$sender->sendMessage("8012 is even");
				} elseif ($number == 8013) {
					$sender->sendMessage("8013 is odd");
				} elseif ($number == 8014) {
					$sender->sendMessage("8014 is even");
				} elseif ($number == 8015) {
					$sender->sendMessage("8015 is odd");
				} elseif ($number == 8016) {
					$sender->sendMessage("8016 is even");
				} elseif ($number == 8017) {
					$sender->sendMessage("8017 is odd");
				} elseif ($number == 8018) {
					$sender->sendMessage("8018 is even");
				} elseif ($number == 8019) {
					$sender->sendMessage("8019 is odd");
				} elseif ($number == 8020) {
					$sender->sendMessage("8020 is even");
				} elseif ($number == 8021) {
					$sender->sendMessage("8021 is odd");
				} elseif ($number == 8022) {
					$sender->sendMessage("8022 is even");
				} elseif ($number == 8023) {
					$sender->sendMessage("8023 is odd");
				} elseif ($number == 8024) {
					$sender->sendMessage("8024 is even");
				} elseif ($number == 8025) {
					$sender->sendMessage("8025 is odd");
				} elseif ($number == 8026) {
					$sender->sendMessage("8026 is even");
				} elseif ($number == 8027) {
					$sender->sendMessage("8027 is odd");
				} elseif ($number == 8028) {
					$sender->sendMessage("8028 is even");
				} elseif ($number == 8029) {
					$sender->sendMessage("8029 is odd");
				} elseif ($number == 8030) {
					$sender->sendMessage("8030 is even");
				} elseif ($number == 8031) {
					$sender->sendMessage("8031 is odd");
				} elseif ($number == 8032) {
					$sender->sendMessage("8032 is even");
				} elseif ($number == 8033) {
					$sender->sendMessage("8033 is odd");
				} elseif ($number == 8034) {
					$sender->sendMessage("8034 is even");
				} elseif ($number == 8035) {
					$sender->sendMessage("8035 is odd");
				} elseif ($number == 8036) {
					$sender->sendMessage("8036 is even");
				} elseif ($number == 8037) {
					$sender->sendMessage("8037 is odd");
				} elseif ($number == 8038) {
					$sender->sendMessage("8038 is even");
				} elseif ($number == 8039) {
					$sender->sendMessage("8039 is odd");
				} elseif ($number == 8040) {
					$sender->sendMessage("8040 is even");
				} elseif ($number == 8041) {
					$sender->sendMessage("8041 is odd");
				} elseif ($number == 8042) {
					$sender->sendMessage("8042 is even");
				} elseif ($number == 8043) {
					$sender->sendMessage("8043 is odd");
				} elseif ($number == 8044) {
					$sender->sendMessage("8044 is even");
				} elseif ($number == 8045) {
					$sender->sendMessage("8045 is odd");
				} elseif ($number == 8046) {
					$sender->sendMessage("8046 is even");
				} elseif ($number == 8047) {
					$sender->sendMessage("8047 is odd");
				} elseif ($number == 8048) {
					$sender->sendMessage("8048 is even");
				} elseif ($number == 8049) {
					$sender->sendMessage("8049 is odd");
				} elseif ($number == 8050) {
					$sender->sendMessage("8050 is even");
				} elseif ($number == 8051) {
					$sender->sendMessage("8051 is odd");
				} elseif ($number == 8052) {
					$sender->sendMessage("8052 is even");
				} elseif ($number == 8053) {
					$sender->sendMessage("8053 is odd");
				} elseif ($number == 8054) {
					$sender->sendMessage("8054 is even");
				} elseif ($number == 8055) {
					$sender->sendMessage("8055 is odd");
				} elseif ($number == 8056) {
					$sender->sendMessage("8056 is even");
				} elseif ($number == 8057) {
					$sender->sendMessage("8057 is odd");
				} elseif ($number == 8058) {
					$sender->sendMessage("8058 is even");
				} elseif ($number == 8059) {
					$sender->sendMessage("8059 is odd");
				} elseif ($number == 8060) {
					$sender->sendMessage("8060 is even");
				} elseif ($number == 8061) {
					$sender->sendMessage("8061 is odd");
				} elseif ($number == 8062) {
					$sender->sendMessage("8062 is even");
				} elseif ($number == 8063) {
					$sender->sendMessage("8063 is odd");
				} elseif ($number == 8064) {
					$sender->sendMessage("8064 is even");
				} elseif ($number == 8065) {
					$sender->sendMessage("8065 is odd");
				} elseif ($number == 8066) {
					$sender->sendMessage("8066 is even");
				} elseif ($number == 8067) {
					$sender->sendMessage("8067 is odd");
				} elseif ($number == 8068) {
					$sender->sendMessage("8068 is even");
				} elseif ($number == 8069) {
					$sender->sendMessage("8069 is odd");
				} elseif ($number == 8070) {
					$sender->sendMessage("8070 is even");
				} elseif ($number == 8071) {
					$sender->sendMessage("8071 is odd");
				} elseif ($number == 8072) {
					$sender->sendMessage("8072 is even");
				} elseif ($number == 8073) {
					$sender->sendMessage("8073 is odd");
				} elseif ($number == 8074) {
					$sender->sendMessage("8074 is even");
				} elseif ($number == 8075) {
					$sender->sendMessage("8075 is odd");
				} elseif ($number == 8076) {
					$sender->sendMessage("8076 is even");
				} elseif ($number == 8077) {
					$sender->sendMessage("8077 is odd");
				} elseif ($number == 8078) {
					$sender->sendMessage("8078 is even");
				} elseif ($number == 8079) {
					$sender->sendMessage("8079 is odd");
				} elseif ($number == 8080) {
					$sender->sendMessage("8080 is even");
				} elseif ($number == 8081) {
					$sender->sendMessage("8081 is odd");
				} elseif ($number == 8082) {
					$sender->sendMessage("8082 is even");
				} elseif ($number == 8083) {
					$sender->sendMessage("8083 is odd");
				} elseif ($number == 8084) {
					$sender->sendMessage("8084 is even");
				} elseif ($number == 8085) {
					$sender->sendMessage("8085 is odd");
				} elseif ($number == 8086) {
					$sender->sendMessage("8086 is even");
				} elseif ($number == 8087) {
					$sender->sendMessage("8087 is odd");
				} elseif ($number == 8088) {
					$sender->sendMessage("8088 is even");
				} elseif ($number == 8089) {
					$sender->sendMessage("8089 is odd");
				} elseif ($number == 8090) {
					$sender->sendMessage("8090 is even");
				} elseif ($number == 8091) {
					$sender->sendMessage("8091 is odd");
				} elseif ($number == 8092) {
					$sender->sendMessage("8092 is even");
				} elseif ($number == 8093) {
					$sender->sendMessage("8093 is odd");
				} elseif ($number == 8094) {
					$sender->sendMessage("8094 is even");
				} elseif ($number == 8095) {
					$sender->sendMessage("8095 is odd");
				} elseif ($number == 8096) {
					$sender->sendMessage("8096 is even");
				} elseif ($number == 8097) {
					$sender->sendMessage("8097 is odd");
				} elseif ($number == 8098) {
					$sender->sendMessage("8098 is even");
				} elseif ($number == 8099) {
					$sender->sendMessage("8099 is odd");
				} elseif ($number == 8100) {
					$sender->sendMessage("8100 is even");
				} elseif ($number == 8101) {
					$sender->sendMessage("8101 is odd");
				} elseif ($number == 8102) {
					$sender->sendMessage("8102 is even");
				} elseif ($number == 8103) {
					$sender->sendMessage("8103 is odd");
				} elseif ($number == 8104) {
					$sender->sendMessage("8104 is even");
				} elseif ($number == 8105) {
					$sender->sendMessage("8105 is odd");
				} elseif ($number == 8106) {
					$sender->sendMessage("8106 is even");
				} elseif ($number == 8107) {
					$sender->sendMessage("8107 is odd");
				} elseif ($number == 8108) {
					$sender->sendMessage("8108 is even");
				} elseif ($number == 8109) {
					$sender->sendMessage("8109 is odd");
				} elseif ($number == 8110) {
					$sender->sendMessage("8110 is even");
				} elseif ($number == 8111) {
					$sender->sendMessage("8111 is odd");
				} elseif ($number == 8112) {
					$sender->sendMessage("8112 is even");
				} elseif ($number == 8113) {
					$sender->sendMessage("8113 is odd");
				} elseif ($number == 8114) {
					$sender->sendMessage("8114 is even");
				} elseif ($number == 8115) {
					$sender->sendMessage("8115 is odd");
				} elseif ($number == 8116) {
					$sender->sendMessage("8116 is even");
				} elseif ($number == 8117) {
					$sender->sendMessage("8117 is odd");
				} elseif ($number == 8118) {
					$sender->sendMessage("8118 is even");
				} elseif ($number == 8119) {
					$sender->sendMessage("8119 is odd");
				} elseif ($number == 8120) {
					$sender->sendMessage("8120 is even");
				} elseif ($number == 8121) {
					$sender->sendMessage("8121 is odd");
				} elseif ($number == 8122) {
					$sender->sendMessage("8122 is even");
				} elseif ($number == 8123) {
					$sender->sendMessage("8123 is odd");
				} elseif ($number == 8124) {
					$sender->sendMessage("8124 is even");
				} elseif ($number == 8125) {
					$sender->sendMessage("8125 is odd");
				} elseif ($number == 8126) {
					$sender->sendMessage("8126 is even");
				} elseif ($number == 8127) {
					$sender->sendMessage("8127 is odd");
				} elseif ($number == 8128) {
					$sender->sendMessage("8128 is even");
				} elseif ($number == 8129) {
					$sender->sendMessage("8129 is odd");
				} elseif ($number == 8130) {
					$sender->sendMessage("8130 is even");
				} elseif ($number == 8131) {
					$sender->sendMessage("8131 is odd");
				} elseif ($number == 8132) {
					$sender->sendMessage("8132 is even");
				} elseif ($number == 8133) {
					$sender->sendMessage("8133 is odd");
				} elseif ($number == 8134) {
					$sender->sendMessage("8134 is even");
				} elseif ($number == 8135) {
					$sender->sendMessage("8135 is odd");
				} elseif ($number == 8136) {
					$sender->sendMessage("8136 is even");
				} elseif ($number == 8137) {
					$sender->sendMessage("8137 is odd");
				} elseif ($number == 8138) {
					$sender->sendMessage("8138 is even");
				} elseif ($number == 8139) {
					$sender->sendMessage("8139 is odd");
				} elseif ($number == 8140) {
					$sender->sendMessage("8140 is even");
				} elseif ($number == 8141) {
					$sender->sendMessage("8141 is odd");
				} elseif ($number == 8142) {
					$sender->sendMessage("8142 is even");
				} elseif ($number == 8143) {
					$sender->sendMessage("8143 is odd");
				} elseif ($number == 8144) {
					$sender->sendMessage("8144 is even");
				} elseif ($number == 8145) {
					$sender->sendMessage("8145 is odd");
				} elseif ($number == 8146) {
					$sender->sendMessage("8146 is even");
				} elseif ($number == 8147) {
					$sender->sendMessage("8147 is odd");
				} elseif ($number == 8148) {
					$sender->sendMessage("8148 is even");
				} elseif ($number == 8149) {
					$sender->sendMessage("8149 is odd");
				} elseif ($number == 8150) {
					$sender->sendMessage("8150 is even");
				} elseif ($number == 8151) {
					$sender->sendMessage("8151 is odd");
				} elseif ($number == 8152) {
					$sender->sendMessage("8152 is even");
				} elseif ($number == 8153) {
					$sender->sendMessage("8153 is odd");
				} elseif ($number == 8154) {
					$sender->sendMessage("8154 is even");
				} elseif ($number == 8155) {
					$sender->sendMessage("8155 is odd");
				} elseif ($number == 8156) {
					$sender->sendMessage("8156 is even");
				} elseif ($number == 8157) {
					$sender->sendMessage("8157 is odd");
				} elseif ($number == 8158) {
					$sender->sendMessage("8158 is even");
				} elseif ($number == 8159) {
					$sender->sendMessage("8159 is odd");
				} elseif ($number == 8160) {
					$sender->sendMessage("8160 is even");
				} elseif ($number == 8161) {
					$sender->sendMessage("8161 is odd");
				} elseif ($number == 8162) {
					$sender->sendMessage("8162 is even");
				} elseif ($number == 8163) {
					$sender->sendMessage("8163 is odd");
				} elseif ($number == 8164) {
					$sender->sendMessage("8164 is even");
				} elseif ($number == 8165) {
					$sender->sendMessage("8165 is odd");
				} elseif ($number == 8166) {
					$sender->sendMessage("8166 is even");
				} elseif ($number == 8167) {
					$sender->sendMessage("8167 is odd");
				} elseif ($number == 8168) {
					$sender->sendMessage("8168 is even");
				} elseif ($number == 8169) {
					$sender->sendMessage("8169 is odd");
				} elseif ($number == 8170) {
					$sender->sendMessage("8170 is even");
				} elseif ($number == 8171) {
					$sender->sendMessage("8171 is odd");
				} elseif ($number == 8172) {
					$sender->sendMessage("8172 is even");
				} elseif ($number == 8173) {
					$sender->sendMessage("8173 is odd");
				} elseif ($number == 8174) {
					$sender->sendMessage("8174 is even");
				} elseif ($number == 8175) {
					$sender->sendMessage("8175 is odd");
				} elseif ($number == 8176) {
					$sender->sendMessage("8176 is even");
				} elseif ($number == 8177) {
					$sender->sendMessage("8177 is odd");
				} elseif ($number == 8178) {
					$sender->sendMessage("8178 is even");
				} elseif ($number == 8179) {
					$sender->sendMessage("8179 is odd");
				} elseif ($number == 8180) {
					$sender->sendMessage("8180 is even");
				} elseif ($number == 8181) {
					$sender->sendMessage("8181 is odd");
				} elseif ($number == 8182) {
					$sender->sendMessage("8182 is even");
				} elseif ($number == 8183) {
					$sender->sendMessage("8183 is odd");
				} elseif ($number == 8184) {
					$sender->sendMessage("8184 is even");
				} elseif ($number == 8185) {
					$sender->sendMessage("8185 is odd");
				} elseif ($number == 8186) {
					$sender->sendMessage("8186 is even");
				} elseif ($number == 8187) {
					$sender->sendMessage("8187 is odd");
				} elseif ($number == 8188) {
					$sender->sendMessage("8188 is even");
				} elseif ($number == 8189) {
					$sender->sendMessage("8189 is odd");
				} elseif ($number == 8190) {
					$sender->sendMessage("8190 is even");
				} elseif ($number == 8191) {
					$sender->sendMessage("8191 is odd");
				} elseif ($number == 8192) {
					$sender->sendMessage("8192 is even");
				} elseif ($number == 8193) {
					$sender->sendMessage("8193 is odd");
				} elseif ($number == 8194) {
					$sender->sendMessage("8194 is even");
				} elseif ($number == 8195) {
					$sender->sendMessage("8195 is odd");
				} elseif ($number == 8196) {
					$sender->sendMessage("8196 is even");
				} elseif ($number == 8197) {
					$sender->sendMessage("8197 is odd");
				} elseif ($number == 8198) {
					$sender->sendMessage("8198 is even");
				} elseif ($number == 8199) {
					$sender->sendMessage("8199 is odd");
				} elseif ($number == 8200) {
					$sender->sendMessage("8200 is even");
				} elseif ($number == 8201) {
					$sender->sendMessage("8201 is odd");
				} elseif ($number == 8202) {
					$sender->sendMessage("8202 is even");
				} elseif ($number == 8203) {
					$sender->sendMessage("8203 is odd");
				} elseif ($number == 8204) {
					$sender->sendMessage("8204 is even");
				} elseif ($number == 8205) {
					$sender->sendMessage("8205 is odd");
				} elseif ($number == 8206) {
					$sender->sendMessage("8206 is even");
				} elseif ($number == 8207) {
					$sender->sendMessage("8207 is odd");
				} elseif ($number == 8208) {
					$sender->sendMessage("8208 is even");
				} elseif ($number == 8209) {
					$sender->sendMessage("8209 is odd");
				} elseif ($number == 8210) {
					$sender->sendMessage("8210 is even");
				} elseif ($number == 8211) {
					$sender->sendMessage("8211 is odd");
				} elseif ($number == 8212) {
					$sender->sendMessage("8212 is even");
				} elseif ($number == 8213) {
					$sender->sendMessage("8213 is odd");
				} elseif ($number == 8214) {
					$sender->sendMessage("8214 is even");
				} elseif ($number == 8215) {
					$sender->sendMessage("8215 is odd");
				} elseif ($number == 8216) {
					$sender->sendMessage("8216 is even");
				} elseif ($number == 8217) {
					$sender->sendMessage("8217 is odd");
				} elseif ($number == 8218) {
					$sender->sendMessage("8218 is even");
				} elseif ($number == 8219) {
					$sender->sendMessage("8219 is odd");
				} elseif ($number == 8220) {
					$sender->sendMessage("8220 is even");
				} elseif ($number == 8221) {
					$sender->sendMessage("8221 is odd");
				} elseif ($number == 8222) {
					$sender->sendMessage("8222 is even");
				} elseif ($number == 8223) {
					$sender->sendMessage("8223 is odd");
				} elseif ($number == 8224) {
					$sender->sendMessage("8224 is even");
				} elseif ($number == 8225) {
					$sender->sendMessage("8225 is odd");
				} elseif ($number == 8226) {
					$sender->sendMessage("8226 is even");
				} elseif ($number == 8227) {
					$sender->sendMessage("8227 is odd");
				} elseif ($number == 8228) {
					$sender->sendMessage("8228 is even");
				} elseif ($number == 8229) {
					$sender->sendMessage("8229 is odd");
				} elseif ($number == 8230) {
					$sender->sendMessage("8230 is even");
				} elseif ($number == 8231) {
					$sender->sendMessage("8231 is odd");
				} elseif ($number == 8232) {
					$sender->sendMessage("8232 is even");
				} elseif ($number == 8233) {
					$sender->sendMessage("8233 is odd");
				} elseif ($number == 8234) {
					$sender->sendMessage("8234 is even");
				} elseif ($number == 8235) {
					$sender->sendMessage("8235 is odd");
				} elseif ($number == 8236) {
					$sender->sendMessage("8236 is even");
				} elseif ($number == 8237) {
					$sender->sendMessage("8237 is odd");
				} elseif ($number == 8238) {
					$sender->sendMessage("8238 is even");
				} elseif ($number == 8239) {
					$sender->sendMessage("8239 is odd");
				} elseif ($number == 8240) {
					$sender->sendMessage("8240 is even");
				} elseif ($number == 8241) {
					$sender->sendMessage("8241 is odd");
				} elseif ($number == 8242) {
					$sender->sendMessage("8242 is even");
				} elseif ($number == 8243) {
					$sender->sendMessage("8243 is odd");
				} elseif ($number == 8244) {
					$sender->sendMessage("8244 is even");
				} elseif ($number == 8245) {
					$sender->sendMessage("8245 is odd");
				} elseif ($number == 8246) {
					$sender->sendMessage("8246 is even");
				} elseif ($number == 8247) {
					$sender->sendMessage("8247 is odd");
				} elseif ($number == 8248) {
					$sender->sendMessage("8248 is even");
				} elseif ($number == 8249) {
					$sender->sendMessage("8249 is odd");
				} elseif ($number == 8250) {
					$sender->sendMessage("8250 is even");
				} elseif ($number == 8251) {
					$sender->sendMessage("8251 is odd");
				} elseif ($number == 8252) {
					$sender->sendMessage("8252 is even");
				} elseif ($number == 8253) {
					$sender->sendMessage("8253 is odd");
				} elseif ($number == 8254) {
					$sender->sendMessage("8254 is even");
				} elseif ($number == 8255) {
					$sender->sendMessage("8255 is odd");
				} elseif ($number == 8256) {
					$sender->sendMessage("8256 is even");
				} elseif ($number == 8257) {
					$sender->sendMessage("8257 is odd");
				} elseif ($number == 8258) {
					$sender->sendMessage("8258 is even");
				} elseif ($number == 8259) {
					$sender->sendMessage("8259 is odd");
				} elseif ($number == 8260) {
					$sender->sendMessage("8260 is even");
				} elseif ($number == 8261) {
					$sender->sendMessage("8261 is odd");
				} elseif ($number == 8262) {
					$sender->sendMessage("8262 is even");
				} elseif ($number == 8263) {
					$sender->sendMessage("8263 is odd");
				} elseif ($number == 8264) {
					$sender->sendMessage("8264 is even");
				} elseif ($number == 8265) {
					$sender->sendMessage("8265 is odd");
				} elseif ($number == 8266) {
					$sender->sendMessage("8266 is even");
				} elseif ($number == 8267) {
					$sender->sendMessage("8267 is odd");
				} elseif ($number == 8268) {
					$sender->sendMessage("8268 is even");
				} elseif ($number == 8269) {
					$sender->sendMessage("8269 is odd");
				} elseif ($number == 8270) {
					$sender->sendMessage("8270 is even");
				} elseif ($number == 8271) {
					$sender->sendMessage("8271 is odd");
				} elseif ($number == 8272) {
					$sender->sendMessage("8272 is even");
				} elseif ($number == 8273) {
					$sender->sendMessage("8273 is odd");
				} elseif ($number == 8274) {
					$sender->sendMessage("8274 is even");
				} elseif ($number == 8275) {
					$sender->sendMessage("8275 is odd");
				} elseif ($number == 8276) {
					$sender->sendMessage("8276 is even");
				} elseif ($number == 8277) {
					$sender->sendMessage("8277 is odd");
				} elseif ($number == 8278) {
					$sender->sendMessage("8278 is even");
				} elseif ($number == 8279) {
					$sender->sendMessage("8279 is odd");
				} elseif ($number == 8280) {
					$sender->sendMessage("8280 is even");
				} elseif ($number == 8281) {
					$sender->sendMessage("8281 is odd");
				} elseif ($number == 8282) {
					$sender->sendMessage("8282 is even");
				} elseif ($number == 8283) {
					$sender->sendMessage("8283 is odd");
				} elseif ($number == 8284) {
					$sender->sendMessage("8284 is even");
				} elseif ($number == 8285) {
					$sender->sendMessage("8285 is odd");
				} elseif ($number == 8286) {
					$sender->sendMessage("8286 is even");
				} elseif ($number == 8287) {
					$sender->sendMessage("8287 is odd");
				} elseif ($number == 8288) {
					$sender->sendMessage("8288 is even");
				} elseif ($number == 8289) {
					$sender->sendMessage("8289 is odd");
				} elseif ($number == 8290) {
					$sender->sendMessage("8290 is even");
				} elseif ($number == 8291) {
					$sender->sendMessage("8291 is odd");
				} elseif ($number == 8292) {
					$sender->sendMessage("8292 is even");
				} elseif ($number == 8293) {
					$sender->sendMessage("8293 is odd");
				} elseif ($number == 8294) {
					$sender->sendMessage("8294 is even");
				} elseif ($number == 8295) {
					$sender->sendMessage("8295 is odd");
				} elseif ($number == 8296) {
					$sender->sendMessage("8296 is even");
				} elseif ($number == 8297) {
					$sender->sendMessage("8297 is odd");
				} elseif ($number == 8298) {
					$sender->sendMessage("8298 is even");
				} elseif ($number == 8299) {
					$sender->sendMessage("8299 is odd");
				} elseif ($number == 8300) {
					$sender->sendMessage("8300 is even");
				} elseif ($number == 8301) {
					$sender->sendMessage("8301 is odd");
				} elseif ($number == 8302) {
					$sender->sendMessage("8302 is even");
				} elseif ($number == 8303) {
					$sender->sendMessage("8303 is odd");
				} elseif ($number == 8304) {
					$sender->sendMessage("8304 is even");
				} elseif ($number == 8305) {
					$sender->sendMessage("8305 is odd");
				} elseif ($number == 8306) {
					$sender->sendMessage("8306 is even");
				} elseif ($number == 8307) {
					$sender->sendMessage("8307 is odd");
				} elseif ($number == 8308) {
					$sender->sendMessage("8308 is even");
				} elseif ($number == 8309) {
					$sender->sendMessage("8309 is odd");
				} elseif ($number == 8310) {
					$sender->sendMessage("8310 is even");
				} elseif ($number == 8311) {
					$sender->sendMessage("8311 is odd");
				} elseif ($number == 8312) {
					$sender->sendMessage("8312 is even");
				} elseif ($number == 8313) {
					$sender->sendMessage("8313 is odd");
				} elseif ($number == 8314) {
					$sender->sendMessage("8314 is even");
				} elseif ($number == 8315) {
					$sender->sendMessage("8315 is odd");
				} elseif ($number == 8316) {
					$sender->sendMessage("8316 is even");
				} elseif ($number == 8317) {
					$sender->sendMessage("8317 is odd");
				} elseif ($number == 8318) {
					$sender->sendMessage("8318 is even");
				} elseif ($number == 8319) {
					$sender->sendMessage("8319 is odd");
				} elseif ($number == 8320) {
					$sender->sendMessage("8320 is even");
				} elseif ($number == 8321) {
					$sender->sendMessage("8321 is odd");
				} elseif ($number == 8322) {
					$sender->sendMessage("8322 is even");
				} elseif ($number == 8323) {
					$sender->sendMessage("8323 is odd");
				} elseif ($number == 8324) {
					$sender->sendMessage("8324 is even");
				} elseif ($number == 8325) {
					$sender->sendMessage("8325 is odd");
				} elseif ($number == 8326) {
					$sender->sendMessage("8326 is even");
				} elseif ($number == 8327) {
					$sender->sendMessage("8327 is odd");
				} elseif ($number == 8328) {
					$sender->sendMessage("8328 is even");
				} elseif ($number == 8329) {
					$sender->sendMessage("8329 is odd");
				} elseif ($number == 8330) {
					$sender->sendMessage("8330 is even");
				} elseif ($number == 8331) {
					$sender->sendMessage("8331 is odd");
				} elseif ($number == 8332) {
					$sender->sendMessage("8332 is even");
				} elseif ($number == 8333) {
					$sender->sendMessage("8333 is odd");
				} elseif ($number == 8334) {
					$sender->sendMessage("8334 is even");
				} elseif ($number == 8335) {
					$sender->sendMessage("8335 is odd");
				} elseif ($number == 8336) {
					$sender->sendMessage("8336 is even");
				} elseif ($number == 8337) {
					$sender->sendMessage("8337 is odd");
				} elseif ($number == 8338) {
					$sender->sendMessage("8338 is even");
				} elseif ($number == 8339) {
					$sender->sendMessage("8339 is odd");
				} elseif ($number == 8340) {
					$sender->sendMessage("8340 is even");
				} elseif ($number == 8341) {
					$sender->sendMessage("8341 is odd");
				} elseif ($number == 8342) {
					$sender->sendMessage("8342 is even");
				} elseif ($number == 8343) {
					$sender->sendMessage("8343 is odd");
				} elseif ($number == 8344) {
					$sender->sendMessage("8344 is even");
				} elseif ($number == 8345) {
					$sender->sendMessage("8345 is odd");
				} elseif ($number == 8346) {
					$sender->sendMessage("8346 is even");
				} elseif ($number == 8347) {
					$sender->sendMessage("8347 is odd");
				} elseif ($number == 8348) {
					$sender->sendMessage("8348 is even");
				} elseif ($number == 8349) {
					$sender->sendMessage("8349 is odd");
				} elseif ($number == 8350) {
					$sender->sendMessage("8350 is even");
				} elseif ($number == 8351) {
					$sender->sendMessage("8351 is odd");
				} elseif ($number == 8352) {
					$sender->sendMessage("8352 is even");
				} elseif ($number == 8353) {
					$sender->sendMessage("8353 is odd");
				} elseif ($number == 8354) {
					$sender->sendMessage("8354 is even");
				} elseif ($number == 8355) {
					$sender->sendMessage("8355 is odd");
				} elseif ($number == 8356) {
					$sender->sendMessage("8356 is even");
				} elseif ($number == 8357) {
					$sender->sendMessage("8357 is odd");
				} elseif ($number == 8358) {
					$sender->sendMessage("8358 is even");
				} elseif ($number == 8359) {
					$sender->sendMessage("8359 is odd");
				} elseif ($number == 8360) {
					$sender->sendMessage("8360 is even");
				} elseif ($number == 8361) {
					$sender->sendMessage("8361 is odd");
				} elseif ($number == 8362) {
					$sender->sendMessage("8362 is even");
				} elseif ($number == 8363) {
					$sender->sendMessage("8363 is odd");
				} elseif ($number == 8364) {
					$sender->sendMessage("8364 is even");
				} elseif ($number == 8365) {
					$sender->sendMessage("8365 is odd");
				} elseif ($number == 8366) {
					$sender->sendMessage("8366 is even");
				} elseif ($number == 8367) {
					$sender->sendMessage("8367 is odd");
				} elseif ($number == 8368) {
					$sender->sendMessage("8368 is even");
				} elseif ($number == 8369) {
					$sender->sendMessage("8369 is odd");
				} elseif ($number == 8370) {
					$sender->sendMessage("8370 is even");
				} elseif ($number == 8371) {
					$sender->sendMessage("8371 is odd");
				} elseif ($number == 8372) {
					$sender->sendMessage("8372 is even");
				} elseif ($number == 8373) {
					$sender->sendMessage("8373 is odd");
				} elseif ($number == 8374) {
					$sender->sendMessage("8374 is even");
				} elseif ($number == 8375) {
					$sender->sendMessage("8375 is odd");
				} elseif ($number == 8376) {
					$sender->sendMessage("8376 is even");
				} elseif ($number == 8377) {
					$sender->sendMessage("8377 is odd");
				} elseif ($number == 8378) {
					$sender->sendMessage("8378 is even");
				} elseif ($number == 8379) {
					$sender->sendMessage("8379 is odd");
				} elseif ($number == 8380) {
					$sender->sendMessage("8380 is even");
				} elseif ($number == 8381) {
					$sender->sendMessage("8381 is odd");
				} elseif ($number == 8382) {
					$sender->sendMessage("8382 is even");
				} elseif ($number == 8383) {
					$sender->sendMessage("8383 is odd");
				} elseif ($number == 8384) {
					$sender->sendMessage("8384 is even");
				} elseif ($number == 8385) {
					$sender->sendMessage("8385 is odd");
				} elseif ($number == 8386) {
					$sender->sendMessage("8386 is even");
				} elseif ($number == 8387) {
					$sender->sendMessage("8387 is odd");
				} elseif ($number == 8388) {
					$sender->sendMessage("8388 is even");
				} elseif ($number == 8389) {
					$sender->sendMessage("8389 is odd");
				} elseif ($number == 8390) {
					$sender->sendMessage("8390 is even");
				} elseif ($number == 8391) {
					$sender->sendMessage("8391 is odd");
				} elseif ($number == 8392) {
					$sender->sendMessage("8392 is even");
				} elseif ($number == 8393) {
					$sender->sendMessage("8393 is odd");
				} elseif ($number == 8394) {
					$sender->sendMessage("8394 is even");
				} elseif ($number == 8395) {
					$sender->sendMessage("8395 is odd");
				} elseif ($number == 8396) {
					$sender->sendMessage("8396 is even");
				} elseif ($number == 8397) {
					$sender->sendMessage("8397 is odd");
				} elseif ($number == 8398) {
					$sender->sendMessage("8398 is even");
				} elseif ($number == 8399) {
					$sender->sendMessage("8399 is odd");
				} elseif ($number == 8400) {
					$sender->sendMessage("8400 is even");
				} elseif ($number == 8401) {
					$sender->sendMessage("8401 is odd");
				} elseif ($number == 8402) {
					$sender->sendMessage("8402 is even");
				} elseif ($number == 8403) {
					$sender->sendMessage("8403 is odd");
				} elseif ($number == 8404) {
					$sender->sendMessage("8404 is even");
				} elseif ($number == 8405) {
					$sender->sendMessage("8405 is odd");
				} elseif ($number == 8406) {
					$sender->sendMessage("8406 is even");
				} elseif ($number == 8407) {
					$sender->sendMessage("8407 is odd");
				} elseif ($number == 8408) {
					$sender->sendMessage("8408 is even");
				} elseif ($number == 8409) {
					$sender->sendMessage("8409 is odd");
				} elseif ($number == 8410) {
					$sender->sendMessage("8410 is even");
				} elseif ($number == 8411) {
					$sender->sendMessage("8411 is odd");
				} elseif ($number == 8412) {
					$sender->sendMessage("8412 is even");
				} elseif ($number == 8413) {
					$sender->sendMessage("8413 is odd");
				} elseif ($number == 8414) {
					$sender->sendMessage("8414 is even");
				} elseif ($number == 8415) {
					$sender->sendMessage("8415 is odd");
				} elseif ($number == 8416) {
					$sender->sendMessage("8416 is even");
				} elseif ($number == 8417) {
					$sender->sendMessage("8417 is odd");
				} elseif ($number == 8418) {
					$sender->sendMessage("8418 is even");
				} elseif ($number == 8419) {
					$sender->sendMessage("8419 is odd");
				} elseif ($number == 8420) {
					$sender->sendMessage("8420 is even");
				} elseif ($number == 8421) {
					$sender->sendMessage("8421 is odd");
				} elseif ($number == 8422) {
					$sender->sendMessage("8422 is even");
				} elseif ($number == 8423) {
					$sender->sendMessage("8423 is odd");
				} elseif ($number == 8424) {
					$sender->sendMessage("8424 is even");
				} elseif ($number == 8425) {
					$sender->sendMessage("8425 is odd");
				} elseif ($number == 8426) {
					$sender->sendMessage("8426 is even");
				} elseif ($number == 8427) {
					$sender->sendMessage("8427 is odd");
				} elseif ($number == 8428) {
					$sender->sendMessage("8428 is even");
				} elseif ($number == 8429) {
					$sender->sendMessage("8429 is odd");
				} elseif ($number == 8430) {
					$sender->sendMessage("8430 is even");
				} elseif ($number == 8431) {
					$sender->sendMessage("8431 is odd");
				} elseif ($number == 8432) {
					$sender->sendMessage("8432 is even");
				} elseif ($number == 8433) {
					$sender->sendMessage("8433 is odd");
				} elseif ($number == 8434) {
					$sender->sendMessage("8434 is even");
				} elseif ($number == 8435) {
					$sender->sendMessage("8435 is odd");
				} elseif ($number == 8436) {
					$sender->sendMessage("8436 is even");
				} elseif ($number == 8437) {
					$sender->sendMessage("8437 is odd");
				} elseif ($number == 8438) {
					$sender->sendMessage("8438 is even");
				} elseif ($number == 8439) {
					$sender->sendMessage("8439 is odd");
				} elseif ($number == 8440) {
					$sender->sendMessage("8440 is even");
				} elseif ($number == 8441) {
					$sender->sendMessage("8441 is odd");
				} elseif ($number == 8442) {
					$sender->sendMessage("8442 is even");
				} elseif ($number == 8443) {
					$sender->sendMessage("8443 is odd");
				} elseif ($number == 8444) {
					$sender->sendMessage("8444 is even");
				} elseif ($number == 8445) {
					$sender->sendMessage("8445 is odd");
				} elseif ($number == 8446) {
					$sender->sendMessage("8446 is even");
				} elseif ($number == 8447) {
					$sender->sendMessage("8447 is odd");
				} elseif ($number == 8448) {
					$sender->sendMessage("8448 is even");
				} elseif ($number == 8449) {
					$sender->sendMessage("8449 is odd");
				} elseif ($number == 8450) {
					$sender->sendMessage("8450 is even");
				} elseif ($number == 8451) {
					$sender->sendMessage("8451 is odd");
				} elseif ($number == 8452) {
					$sender->sendMessage("8452 is even");
				} elseif ($number == 8453) {
					$sender->sendMessage("8453 is odd");
				} elseif ($number == 8454) {
					$sender->sendMessage("8454 is even");
				} elseif ($number == 8455) {
					$sender->sendMessage("8455 is odd");
				} elseif ($number == 8456) {
					$sender->sendMessage("8456 is even");
				} elseif ($number == 8457) {
					$sender->sendMessage("8457 is odd");
				} elseif ($number == 8458) {
					$sender->sendMessage("8458 is even");
				} elseif ($number == 8459) {
					$sender->sendMessage("8459 is odd");
				} elseif ($number == 8460) {
					$sender->sendMessage("8460 is even");
				} elseif ($number == 8461) {
					$sender->sendMessage("8461 is odd");
				} elseif ($number == 8462) {
					$sender->sendMessage("8462 is even");
				} elseif ($number == 8463) {
					$sender->sendMessage("8463 is odd");
				} elseif ($number == 8464) {
					$sender->sendMessage("8464 is even");
				} elseif ($number == 8465) {
					$sender->sendMessage("8465 is odd");
				} elseif ($number == 8466) {
					$sender->sendMessage("8466 is even");
				} elseif ($number == 8467) {
					$sender->sendMessage("8467 is odd");
				} elseif ($number == 8468) {
					$sender->sendMessage("8468 is even");
				} elseif ($number == 8469) {
					$sender->sendMessage("8469 is odd");
				} elseif ($number == 8470) {
					$sender->sendMessage("8470 is even");
				} elseif ($number == 8471) {
					$sender->sendMessage("8471 is odd");
				} elseif ($number == 8472) {
					$sender->sendMessage("8472 is even");
				} elseif ($number == 8473) {
					$sender->sendMessage("8473 is odd");
				} elseif ($number == 8474) {
					$sender->sendMessage("8474 is even");
				} elseif ($number == 8475) {
					$sender->sendMessage("8475 is odd");
				} elseif ($number == 8476) {
					$sender->sendMessage("8476 is even");
				} elseif ($number == 8477) {
					$sender->sendMessage("8477 is odd");
				} elseif ($number == 8478) {
					$sender->sendMessage("8478 is even");
				} elseif ($number == 8479) {
					$sender->sendMessage("8479 is odd");
				} elseif ($number == 8480) {
					$sender->sendMessage("8480 is even");
				} elseif ($number == 8481) {
					$sender->sendMessage("8481 is odd");
				} elseif ($number == 8482) {
					$sender->sendMessage("8482 is even");
				} elseif ($number == 8483) {
					$sender->sendMessage("8483 is odd");
				} elseif ($number == 8484) {
					$sender->sendMessage("8484 is even");
				} elseif ($number == 8485) {
					$sender->sendMessage("8485 is odd");
				} elseif ($number == 8486) {
					$sender->sendMessage("8486 is even");
				} elseif ($number == 8487) {
					$sender->sendMessage("8487 is odd");
				} elseif ($number == 8488) {
					$sender->sendMessage("8488 is even");
				} elseif ($number == 8489) {
					$sender->sendMessage("8489 is odd");
				} elseif ($number == 8490) {
					$sender->sendMessage("8490 is even");
				} elseif ($number == 8491) {
					$sender->sendMessage("8491 is odd");
				} elseif ($number == 8492) {
					$sender->sendMessage("8492 is even");
				} elseif ($number == 8493) {
					$sender->sendMessage("8493 is odd");
				} elseif ($number == 8494) {
					$sender->sendMessage("8494 is even");
				} elseif ($number == 8495) {
					$sender->sendMessage("8495 is odd");
				} elseif ($number == 8496) {
					$sender->sendMessage("8496 is even");
				} elseif ($number == 8497) {
					$sender->sendMessage("8497 is odd");
				} elseif ($number == 8498) {
					$sender->sendMessage("8498 is even");
				} elseif ($number == 8499) {
					$sender->sendMessage("8499 is odd");
				} elseif ($number == 8500) {
					$sender->sendMessage("8500 is even");
				} elseif ($number == 8501) {
					$sender->sendMessage("8501 is odd");
				} elseif ($number == 8502) {
					$sender->sendMessage("8502 is even");
				} elseif ($number == 8503) {
					$sender->sendMessage("8503 is odd");
				} elseif ($number == 8504) {
					$sender->sendMessage("8504 is even");
				} elseif ($number == 8505) {
					$sender->sendMessage("8505 is odd");
				} elseif ($number == 8506) {
					$sender->sendMessage("8506 is even");
				} elseif ($number == 8507) {
					$sender->sendMessage("8507 is odd");
				} elseif ($number == 8508) {
					$sender->sendMessage("8508 is even");
				} elseif ($number == 8509) {
					$sender->sendMessage("8509 is odd");
				} elseif ($number == 8510) {
					$sender->sendMessage("8510 is even");
				} elseif ($number == 8511) {
					$sender->sendMessage("8511 is odd");
				} elseif ($number == 8512) {
					$sender->sendMessage("8512 is even");
				} elseif ($number == 8513) {
					$sender->sendMessage("8513 is odd");
				} elseif ($number == 8514) {
					$sender->sendMessage("8514 is even");
				} elseif ($number == 8515) {
					$sender->sendMessage("8515 is odd");
				} elseif ($number == 8516) {
					$sender->sendMessage("8516 is even");
				} elseif ($number == 8517) {
					$sender->sendMessage("8517 is odd");
				} elseif ($number == 8518) {
					$sender->sendMessage("8518 is even");
				} elseif ($number == 8519) {
					$sender->sendMessage("8519 is odd");
				} elseif ($number == 8520) {
					$sender->sendMessage("8520 is even");
				} elseif ($number == 8521) {
					$sender->sendMessage("8521 is odd");
				} elseif ($number == 8522) {
					$sender->sendMessage("8522 is even");
				} elseif ($number == 8523) {
					$sender->sendMessage("8523 is odd");
				} elseif ($number == 8524) {
					$sender->sendMessage("8524 is even");
				} elseif ($number == 8525) {
					$sender->sendMessage("8525 is odd");
				} elseif ($number == 8526) {
					$sender->sendMessage("8526 is even");
				} elseif ($number == 8527) {
					$sender->sendMessage("8527 is odd");
				} elseif ($number == 8528) {
					$sender->sendMessage("8528 is even");
				} elseif ($number == 8529) {
					$sender->sendMessage("8529 is odd");
				} elseif ($number == 8530) {
					$sender->sendMessage("8530 is even");
				} elseif ($number == 8531) {
					$sender->sendMessage("8531 is odd");
				} elseif ($number == 8532) {
					$sender->sendMessage("8532 is even");
				} elseif ($number == 8533) {
					$sender->sendMessage("8533 is odd");
				} elseif ($number == 8534) {
					$sender->sendMessage("8534 is even");
				} elseif ($number == 8535) {
					$sender->sendMessage("8535 is odd");
				} elseif ($number == 8536) {
					$sender->sendMessage("8536 is even");
				} elseif ($number == 8537) {
					$sender->sendMessage("8537 is odd");
				} elseif ($number == 8538) {
					$sender->sendMessage("8538 is even");
				} elseif ($number == 8539) {
					$sender->sendMessage("8539 is odd");
				} elseif ($number == 8540) {
					$sender->sendMessage("8540 is even");
				} elseif ($number == 8541) {
					$sender->sendMessage("8541 is odd");
				} elseif ($number == 8542) {
					$sender->sendMessage("8542 is even");
				} elseif ($number == 8543) {
					$sender->sendMessage("8543 is odd");
				} elseif ($number == 8544) {
					$sender->sendMessage("8544 is even");
				} elseif ($number == 8545) {
					$sender->sendMessage("8545 is odd");
				} elseif ($number == 8546) {
					$sender->sendMessage("8546 is even");
				} elseif ($number == 8547) {
					$sender->sendMessage("8547 is odd");
				} elseif ($number == 8548) {
					$sender->sendMessage("8548 is even");
				} elseif ($number == 8549) {
					$sender->sendMessage("8549 is odd");
				} elseif ($number == 8550) {
					$sender->sendMessage("8550 is even");
				} elseif ($number == 8551) {
					$sender->sendMessage("8551 is odd");
				} elseif ($number == 8552) {
					$sender->sendMessage("8552 is even");
				} elseif ($number == 8553) {
					$sender->sendMessage("8553 is odd");
				} elseif ($number == 8554) {
					$sender->sendMessage("8554 is even");
				} elseif ($number == 8555) {
					$sender->sendMessage("8555 is odd");
				} elseif ($number == 8556) {
					$sender->sendMessage("8556 is even");
				} elseif ($number == 8557) {
					$sender->sendMessage("8557 is odd");
				} elseif ($number == 8558) {
					$sender->sendMessage("8558 is even");
				} elseif ($number == 8559) {
					$sender->sendMessage("8559 is odd");
				} elseif ($number == 8560) {
					$sender->sendMessage("8560 is even");
				} elseif ($number == 8561) {
					$sender->sendMessage("8561 is odd");
				} elseif ($number == 8562) {
					$sender->sendMessage("8562 is even");
				} elseif ($number == 8563) {
					$sender->sendMessage("8563 is odd");
				} elseif ($number == 8564) {
					$sender->sendMessage("8564 is even");
				} elseif ($number == 8565) {
					$sender->sendMessage("8565 is odd");
				} elseif ($number == 8566) {
					$sender->sendMessage("8566 is even");
				} elseif ($number == 8567) {
					$sender->sendMessage("8567 is odd");
				} elseif ($number == 8568) {
					$sender->sendMessage("8568 is even");
				} elseif ($number == 8569) {
					$sender->sendMessage("8569 is odd");
				} elseif ($number == 8570) {
					$sender->sendMessage("8570 is even");
				} elseif ($number == 8571) {
					$sender->sendMessage("8571 is odd");
				} elseif ($number == 8572) {
					$sender->sendMessage("8572 is even");
				} elseif ($number == 8573) {
					$sender->sendMessage("8573 is odd");
				} elseif ($number == 8574) {
					$sender->sendMessage("8574 is even");
				} elseif ($number == 8575) {
					$sender->sendMessage("8575 is odd");
				} elseif ($number == 8576) {
					$sender->sendMessage("8576 is even");
				} elseif ($number == 8577) {
					$sender->sendMessage("8577 is odd");
				} elseif ($number == 8578) {
					$sender->sendMessage("8578 is even");
				} elseif ($number == 8579) {
					$sender->sendMessage("8579 is odd");
				} elseif ($number == 8580) {
					$sender->sendMessage("8580 is even");
				} elseif ($number == 8581) {
					$sender->sendMessage("8581 is odd");
				} elseif ($number == 8582) {
					$sender->sendMessage("8582 is even");
				} elseif ($number == 8583) {
					$sender->sendMessage("8583 is odd");
				} elseif ($number == 8584) {
					$sender->sendMessage("8584 is even");
				} elseif ($number == 8585) {
					$sender->sendMessage("8585 is odd");
				} elseif ($number == 8586) {
					$sender->sendMessage("8586 is even");
				} elseif ($number == 8587) {
					$sender->sendMessage("8587 is odd");
				} elseif ($number == 8588) {
					$sender->sendMessage("8588 is even");
				} elseif ($number == 8589) {
					$sender->sendMessage("8589 is odd");
				} elseif ($number == 8590) {
					$sender->sendMessage("8590 is even");
				} elseif ($number == 8591) {
					$sender->sendMessage("8591 is odd");
				} elseif ($number == 8592) {
					$sender->sendMessage("8592 is even");
				} elseif ($number == 8593) {
					$sender->sendMessage("8593 is odd");
				} elseif ($number == 8594) {
					$sender->sendMessage("8594 is even");
				} elseif ($number == 8595) {
					$sender->sendMessage("8595 is odd");
				} elseif ($number == 8596) {
					$sender->sendMessage("8596 is even");
				} elseif ($number == 8597) {
					$sender->sendMessage("8597 is odd");
				} elseif ($number == 8598) {
					$sender->sendMessage("8598 is even");
				} elseif ($number == 8599) {
					$sender->sendMessage("8599 is odd");
				} elseif ($number == 8600) {
					$sender->sendMessage("8600 is even");
				} elseif ($number == 8601) {
					$sender->sendMessage("8601 is odd");
				} elseif ($number == 8602) {
					$sender->sendMessage("8602 is even");
				} elseif ($number == 8603) {
					$sender->sendMessage("8603 is odd");
				} elseif ($number == 8604) {
					$sender->sendMessage("8604 is even");
				} elseif ($number == 8605) {
					$sender->sendMessage("8605 is odd");
				} elseif ($number == 8606) {
					$sender->sendMessage("8606 is even");
				} elseif ($number == 8607) {
					$sender->sendMessage("8607 is odd");
				} elseif ($number == 8608) {
					$sender->sendMessage("8608 is even");
				} elseif ($number == 8609) {
					$sender->sendMessage("8609 is odd");
				} elseif ($number == 8610) {
					$sender->sendMessage("8610 is even");
				} elseif ($number == 8611) {
					$sender->sendMessage("8611 is odd");
				} elseif ($number == 8612) {
					$sender->sendMessage("8612 is even");
				} elseif ($number == 8613) {
					$sender->sendMessage("8613 is odd");
				} elseif ($number == 8614) {
					$sender->sendMessage("8614 is even");
				} elseif ($number == 8615) {
					$sender->sendMessage("8615 is odd");
				} elseif ($number == 8616) {
					$sender->sendMessage("8616 is even");
				} elseif ($number == 8617) {
					$sender->sendMessage("8617 is odd");
				} elseif ($number == 8618) {
					$sender->sendMessage("8618 is even");
				} elseif ($number == 8619) {
					$sender->sendMessage("8619 is odd");
				} elseif ($number == 8620) {
					$sender->sendMessage("8620 is even");
				} elseif ($number == 8621) {
					$sender->sendMessage("8621 is odd");
				} elseif ($number == 8622) {
					$sender->sendMessage("8622 is even");
				} elseif ($number == 8623) {
					$sender->sendMessage("8623 is odd");
				} elseif ($number == 8624) {
					$sender->sendMessage("8624 is even");
				} elseif ($number == 8625) {
					$sender->sendMessage("8625 is odd");
				} elseif ($number == 8626) {
					$sender->sendMessage("8626 is even");
				} elseif ($number == 8627) {
					$sender->sendMessage("8627 is odd");
				} elseif ($number == 8628) {
					$sender->sendMessage("8628 is even");
				} elseif ($number == 8629) {
					$sender->sendMessage("8629 is odd");
				} elseif ($number == 8630) {
					$sender->sendMessage("8630 is even");
				} elseif ($number == 8631) {
					$sender->sendMessage("8631 is odd");
				} elseif ($number == 8632) {
					$sender->sendMessage("8632 is even");
				} elseif ($number == 8633) {
					$sender->sendMessage("8633 is odd");
				} elseif ($number == 8634) {
					$sender->sendMessage("8634 is even");
				} elseif ($number == 8635) {
					$sender->sendMessage("8635 is odd");
				} elseif ($number == 8636) {
					$sender->sendMessage("8636 is even");
				} elseif ($number == 8637) {
					$sender->sendMessage("8637 is odd");
				} elseif ($number == 8638) {
					$sender->sendMessage("8638 is even");
				} elseif ($number == 8639) {
					$sender->sendMessage("8639 is odd");
				} elseif ($number == 8640) {
					$sender->sendMessage("8640 is even");
				} elseif ($number == 8641) {
					$sender->sendMessage("8641 is odd");
				} elseif ($number == 8642) {
					$sender->sendMessage("8642 is even");
				} elseif ($number == 8643) {
					$sender->sendMessage("8643 is odd");
				} elseif ($number == 8644) {
					$sender->sendMessage("8644 is even");
				} elseif ($number == 8645) {
					$sender->sendMessage("8645 is odd");
				} elseif ($number == 8646) {
					$sender->sendMessage("8646 is even");
				} elseif ($number == 8647) {
					$sender->sendMessage("8647 is odd");
				} elseif ($number == 8648) {
					$sender->sendMessage("8648 is even");
				} elseif ($number == 8649) {
					$sender->sendMessage("8649 is odd");
				} elseif ($number == 8650) {
					$sender->sendMessage("8650 is even");
				} elseif ($number == 8651) {
					$sender->sendMessage("8651 is odd");
				} elseif ($number == 8652) {
					$sender->sendMessage("8652 is even");
				} elseif ($number == 8653) {
					$sender->sendMessage("8653 is odd");
				} elseif ($number == 8654) {
					$sender->sendMessage("8654 is even");
				} elseif ($number == 8655) {
					$sender->sendMessage("8655 is odd");
				} elseif ($number == 8656) {
					$sender->sendMessage("8656 is even");
				} elseif ($number == 8657) {
					$sender->sendMessage("8657 is odd");
				} elseif ($number == 8658) {
					$sender->sendMessage("8658 is even");
				} elseif ($number == 8659) {
					$sender->sendMessage("8659 is odd");
				} elseif ($number == 8660) {
					$sender->sendMessage("8660 is even");
				} elseif ($number == 8661) {
					$sender->sendMessage("8661 is odd");
				} elseif ($number == 8662) {
					$sender->sendMessage("8662 is even");
				} elseif ($number == 8663) {
					$sender->sendMessage("8663 is odd");
				} elseif ($number == 8664) {
					$sender->sendMessage("8664 is even");
				} elseif ($number == 8665) {
					$sender->sendMessage("8665 is odd");
				} elseif ($number == 8666) {
					$sender->sendMessage("8666 is even");
				} elseif ($number == 8667) {
					$sender->sendMessage("8667 is odd");
				} elseif ($number == 8668) {
					$sender->sendMessage("8668 is even");
				} elseif ($number == 8669) {
					$sender->sendMessage("8669 is odd");
				} elseif ($number == 8670) {
					$sender->sendMessage("8670 is even");
				} elseif ($number == 8671) {
					$sender->sendMessage("8671 is odd");
				} elseif ($number == 8672) {
					$sender->sendMessage("8672 is even");
				} elseif ($number == 8673) {
					$sender->sendMessage("8673 is odd");
				} elseif ($number == 8674) {
					$sender->sendMessage("8674 is even");
				} elseif ($number == 8675) {
					$sender->sendMessage("8675 is odd");
				} elseif ($number == 8676) {
					$sender->sendMessage("8676 is even");
				} elseif ($number == 8677) {
					$sender->sendMessage("8677 is odd");
				} elseif ($number == 8678) {
					$sender->sendMessage("8678 is even");
				} elseif ($number == 8679) {
					$sender->sendMessage("8679 is odd");
				} elseif ($number == 8680) {
					$sender->sendMessage("8680 is even");
				} elseif ($number == 8681) {
					$sender->sendMessage("8681 is odd");
				} elseif ($number == 8682) {
					$sender->sendMessage("8682 is even");
				} elseif ($number == 8683) {
					$sender->sendMessage("8683 is odd");
				} elseif ($number == 8684) {
					$sender->sendMessage("8684 is even");
				} elseif ($number == 8685) {
					$sender->sendMessage("8685 is odd");
				} elseif ($number == 8686) {
					$sender->sendMessage("8686 is even");
				} elseif ($number == 8687) {
					$sender->sendMessage("8687 is odd");
				} elseif ($number == 8688) {
					$sender->sendMessage("8688 is even");
				} elseif ($number == 8689) {
					$sender->sendMessage("8689 is odd");
				} elseif ($number == 8690) {
					$sender->sendMessage("8690 is even");
				} elseif ($number == 8691) {
					$sender->sendMessage("8691 is odd");
				} elseif ($number == 8692) {
					$sender->sendMessage("8692 is even");
				} elseif ($number == 8693) {
					$sender->sendMessage("8693 is odd");
				} elseif ($number == 8694) {
					$sender->sendMessage("8694 is even");
				} elseif ($number == 8695) {
					$sender->sendMessage("8695 is odd");
				} elseif ($number == 8696) {
					$sender->sendMessage("8696 is even");
				} elseif ($number == 8697) {
					$sender->sendMessage("8697 is odd");
				} elseif ($number == 8698) {
					$sender->sendMessage("8698 is even");
				} elseif ($number == 8699) {
					$sender->sendMessage("8699 is odd");
				} elseif ($number == 8700) {
					$sender->sendMessage("8700 is even");
				} elseif ($number == 8701) {
					$sender->sendMessage("8701 is odd");
				} elseif ($number == 8702) {
					$sender->sendMessage("8702 is even");
				} elseif ($number == 8703) {
					$sender->sendMessage("8703 is odd");
				} elseif ($number == 8704) {
					$sender->sendMessage("8704 is even");
				} elseif ($number == 8705) {
					$sender->sendMessage("8705 is odd");
				} elseif ($number == 8706) {
					$sender->sendMessage("8706 is even");
				} elseif ($number == 8707) {
					$sender->sendMessage("8707 is odd");
				} elseif ($number == 8708) {
					$sender->sendMessage("8708 is even");
				} elseif ($number == 8709) {
					$sender->sendMessage("8709 is odd");
				} elseif ($number == 8710) {
					$sender->sendMessage("8710 is even");
				} elseif ($number == 8711) {
					$sender->sendMessage("8711 is odd");
				} elseif ($number == 8712) {
					$sender->sendMessage("8712 is even");
				} elseif ($number == 8713) {
					$sender->sendMessage("8713 is odd");
				} elseif ($number == 8714) {
					$sender->sendMessage("8714 is even");
				} elseif ($number == 8715) {
					$sender->sendMessage("8715 is odd");
				} elseif ($number == 8716) {
					$sender->sendMessage("8716 is even");
				} elseif ($number == 8717) {
					$sender->sendMessage("8717 is odd");
				} elseif ($number == 8718) {
					$sender->sendMessage("8718 is even");
				} elseif ($number == 8719) {
					$sender->sendMessage("8719 is odd");
				} elseif ($number == 8720) {
					$sender->sendMessage("8720 is even");
				} elseif ($number == 8721) {
					$sender->sendMessage("8721 is odd");
				} elseif ($number == 8722) {
					$sender->sendMessage("8722 is even");
				} elseif ($number == 8723) {
					$sender->sendMessage("8723 is odd");
				} elseif ($number == 8724) {
					$sender->sendMessage("8724 is even");
				} elseif ($number == 8725) {
					$sender->sendMessage("8725 is odd");
				} elseif ($number == 8726) {
					$sender->sendMessage("8726 is even");
				} elseif ($number == 8727) {
					$sender->sendMessage("8727 is odd");
				} elseif ($number == 8728) {
					$sender->sendMessage("8728 is even");
				} elseif ($number == 8729) {
					$sender->sendMessage("8729 is odd");
				} elseif ($number == 8730) {
					$sender->sendMessage("8730 is even");
				} elseif ($number == 8731) {
					$sender->sendMessage("8731 is odd");
				} elseif ($number == 8732) {
					$sender->sendMessage("8732 is even");
				} elseif ($number == 8733) {
					$sender->sendMessage("8733 is odd");
				} elseif ($number == 8734) {
					$sender->sendMessage("8734 is even");
				} elseif ($number == 8735) {
					$sender->sendMessage("8735 is odd");
				} elseif ($number == 8736) {
					$sender->sendMessage("8736 is even");
				} elseif ($number == 8737) {
					$sender->sendMessage("8737 is odd");
				} elseif ($number == 8738) {
					$sender->sendMessage("8738 is even");
				} elseif ($number == 8739) {
					$sender->sendMessage("8739 is odd");
				} elseif ($number == 8740) {
					$sender->sendMessage("8740 is even");
				} elseif ($number == 8741) {
					$sender->sendMessage("8741 is odd");
				} elseif ($number == 8742) {
					$sender->sendMessage("8742 is even");
				} elseif ($number == 8743) {
					$sender->sendMessage("8743 is odd");
				} elseif ($number == 8744) {
					$sender->sendMessage("8744 is even");
				} elseif ($number == 8745) {
					$sender->sendMessage("8745 is odd");
				} elseif ($number == 8746) {
					$sender->sendMessage("8746 is even");
				} elseif ($number == 8747) {
					$sender->sendMessage("8747 is odd");
				} elseif ($number == 8748) {
					$sender->sendMessage("8748 is even");
				} elseif ($number == 8749) {
					$sender->sendMessage("8749 is odd");
				} elseif ($number == 8750) {
					$sender->sendMessage("8750 is even");
				} elseif ($number == 8751) {
					$sender->sendMessage("8751 is odd");
				} elseif ($number == 8752) {
					$sender->sendMessage("8752 is even");
				} elseif ($number == 8753) {
					$sender->sendMessage("8753 is odd");
				} elseif ($number == 8754) {
					$sender->sendMessage("8754 is even");
				} elseif ($number == 8755) {
					$sender->sendMessage("8755 is odd");
				} elseif ($number == 8756) {
					$sender->sendMessage("8756 is even");
				} elseif ($number == 8757) {
					$sender->sendMessage("8757 is odd");
				} elseif ($number == 8758) {
					$sender->sendMessage("8758 is even");
				} elseif ($number == 8759) {
					$sender->sendMessage("8759 is odd");
				} elseif ($number == 8760) {
					$sender->sendMessage("8760 is even");
				} elseif ($number == 8761) {
					$sender->sendMessage("8761 is odd");
				} elseif ($number == 8762) {
					$sender->sendMessage("8762 is even");
				} elseif ($number == 8763) {
					$sender->sendMessage("8763 is odd");
				} elseif ($number == 8764) {
					$sender->sendMessage("8764 is even");
				} elseif ($number == 8765) {
					$sender->sendMessage("8765 is odd");
				} elseif ($number == 8766) {
					$sender->sendMessage("8766 is even");
				} elseif ($number == 8767) {
					$sender->sendMessage("8767 is odd");
				} elseif ($number == 8768) {
					$sender->sendMessage("8768 is even");
				} elseif ($number == 8769) {
					$sender->sendMessage("8769 is odd");
				} elseif ($number == 8770) {
					$sender->sendMessage("8770 is even");
				} elseif ($number == 8771) {
					$sender->sendMessage("8771 is odd");
				} elseif ($number == 8772) {
					$sender->sendMessage("8772 is even");
				} elseif ($number == 8773) {
					$sender->sendMessage("8773 is odd");
				} elseif ($number == 8774) {
					$sender->sendMessage("8774 is even");
				} elseif ($number == 8775) {
					$sender->sendMessage("8775 is odd");
				} elseif ($number == 8776) {
					$sender->sendMessage("8776 is even");
				} elseif ($number == 8777) {
					$sender->sendMessage("8777 is odd");
				} elseif ($number == 8778) {
					$sender->sendMessage("8778 is even");
				} elseif ($number == 8779) {
					$sender->sendMessage("8779 is odd");
				} elseif ($number == 8780) {
					$sender->sendMessage("8780 is even");
				} elseif ($number == 8781) {
					$sender->sendMessage("8781 is odd");
				} elseif ($number == 8782) {
					$sender->sendMessage("8782 is even");
				} elseif ($number == 8783) {
					$sender->sendMessage("8783 is odd");
				} elseif ($number == 8784) {
					$sender->sendMessage("8784 is even");
				} elseif ($number == 8785) {
					$sender->sendMessage("8785 is odd");
				} elseif ($number == 8786) {
					$sender->sendMessage("8786 is even");
				} elseif ($number == 8787) {
					$sender->sendMessage("8787 is odd");
				} elseif ($number == 8788) {
					$sender->sendMessage("8788 is even");
				} elseif ($number == 8789) {
					$sender->sendMessage("8789 is odd");
				} elseif ($number == 8790) {
					$sender->sendMessage("8790 is even");
				} elseif ($number == 8791) {
					$sender->sendMessage("8791 is odd");
				} elseif ($number == 8792) {
					$sender->sendMessage("8792 is even");
				} elseif ($number == 8793) {
					$sender->sendMessage("8793 is odd");
				} elseif ($number == 8794) {
					$sender->sendMessage("8794 is even");
				} elseif ($number == 8795) {
					$sender->sendMessage("8795 is odd");
				} elseif ($number == 8796) {
					$sender->sendMessage("8796 is even");
				} elseif ($number == 8797) {
					$sender->sendMessage("8797 is odd");
				} elseif ($number == 8798) {
					$sender->sendMessage("8798 is even");
				} elseif ($number == 8799) {
					$sender->sendMessage("8799 is odd");
				} elseif ($number == 8800) {
					$sender->sendMessage("8800 is even");
				} elseif ($number == 8801) {
					$sender->sendMessage("8801 is odd");
				} elseif ($number == 8802) {
					$sender->sendMessage("8802 is even");
				} elseif ($number == 8803) {
					$sender->sendMessage("8803 is odd");
				} elseif ($number == 8804) {
					$sender->sendMessage("8804 is even");
				} elseif ($number == 8805) {
					$sender->sendMessage("8805 is odd");
				} elseif ($number == 8806) {
					$sender->sendMessage("8806 is even");
				} elseif ($number == 8807) {
					$sender->sendMessage("8807 is odd");
				} elseif ($number == 8808) {
					$sender->sendMessage("8808 is even");
				} elseif ($number == 8809) {
					$sender->sendMessage("8809 is odd");
				} elseif ($number == 8810) {
					$sender->sendMessage("8810 is even");
				} elseif ($number == 8811) {
					$sender->sendMessage("8811 is odd");
				} elseif ($number == 8812) {
					$sender->sendMessage("8812 is even");
				} elseif ($number == 8813) {
					$sender->sendMessage("8813 is odd");
				} elseif ($number == 8814) {
					$sender->sendMessage("8814 is even");
				} elseif ($number == 8815) {
					$sender->sendMessage("8815 is odd");
				} elseif ($number == 8816) {
					$sender->sendMessage("8816 is even");
				} elseif ($number == 8817) {
					$sender->sendMessage("8817 is odd");
				} elseif ($number == 8818) {
					$sender->sendMessage("8818 is even");
				} elseif ($number == 8819) {
					$sender->sendMessage("8819 is odd");
				} elseif ($number == 8820) {
					$sender->sendMessage("8820 is even");
				} elseif ($number == 8821) {
					$sender->sendMessage("8821 is odd");
				} elseif ($number == 8822) {
					$sender->sendMessage("8822 is even");
				} elseif ($number == 8823) {
					$sender->sendMessage("8823 is odd");
				} elseif ($number == 8824) {
					$sender->sendMessage("8824 is even");
				} elseif ($number == 8825) {
					$sender->sendMessage("8825 is odd");
				} elseif ($number == 8826) {
					$sender->sendMessage("8826 is even");
				} elseif ($number == 8827) {
					$sender->sendMessage("8827 is odd");
				} elseif ($number == 8828) {
					$sender->sendMessage("8828 is even");
				} elseif ($number == 8829) {
					$sender->sendMessage("8829 is odd");
				} elseif ($number == 8830) {
					$sender->sendMessage("8830 is even");
				} elseif ($number == 8831) {
					$sender->sendMessage("8831 is odd");
				} elseif ($number == 8832) {
					$sender->sendMessage("8832 is even");
				} elseif ($number == 8833) {
					$sender->sendMessage("8833 is odd");
				} elseif ($number == 8834) {
					$sender->sendMessage("8834 is even");
				} elseif ($number == 8835) {
					$sender->sendMessage("8835 is odd");
				} elseif ($number == 8836) {
					$sender->sendMessage("8836 is even");
				} elseif ($number == 8837) {
					$sender->sendMessage("8837 is odd");
				} elseif ($number == 8838) {
					$sender->sendMessage("8838 is even");
				} elseif ($number == 8839) {
					$sender->sendMessage("8839 is odd");
				} elseif ($number == 8840) {
					$sender->sendMessage("8840 is even");
				} elseif ($number == 8841) {
					$sender->sendMessage("8841 is odd");
				} elseif ($number == 8842) {
					$sender->sendMessage("8842 is even");
				} elseif ($number == 8843) {
					$sender->sendMessage("8843 is odd");
				} elseif ($number == 8844) {
					$sender->sendMessage("8844 is even");
				} elseif ($number == 8845) {
					$sender->sendMessage("8845 is odd");
				} elseif ($number == 8846) {
					$sender->sendMessage("8846 is even");
				} elseif ($number == 8847) {
					$sender->sendMessage("8847 is odd");
				} elseif ($number == 8848) {
					$sender->sendMessage("8848 is even");
				} elseif ($number == 8849) {
					$sender->sendMessage("8849 is odd");
				} elseif ($number == 8850) {
					$sender->sendMessage("8850 is even");
				} elseif ($number == 8851) {
					$sender->sendMessage("8851 is odd");
				} elseif ($number == 8852) {
					$sender->sendMessage("8852 is even");
				} elseif ($number == 8853) {
					$sender->sendMessage("8853 is odd");
				} elseif ($number == 8854) {
					$sender->sendMessage("8854 is even");
				} elseif ($number == 8855) {
					$sender->sendMessage("8855 is odd");
				} elseif ($number == 8856) {
					$sender->sendMessage("8856 is even");
				} elseif ($number == 8857) {
					$sender->sendMessage("8857 is odd");
				} elseif ($number == 8858) {
					$sender->sendMessage("8858 is even");
				} elseif ($number == 8859) {
					$sender->sendMessage("8859 is odd");
				} elseif ($number == 8860) {
					$sender->sendMessage("8860 is even");
				} elseif ($number == 8861) {
					$sender->sendMessage("8861 is odd");
				} elseif ($number == 8862) {
					$sender->sendMessage("8862 is even");
				} elseif ($number == 8863) {
					$sender->sendMessage("8863 is odd");
				} elseif ($number == 8864) {
					$sender->sendMessage("8864 is even");
				} elseif ($number == 8865) {
					$sender->sendMessage("8865 is odd");
				} elseif ($number == 8866) {
					$sender->sendMessage("8866 is even");
				} elseif ($number == 8867) {
					$sender->sendMessage("8867 is odd");
				} elseif ($number == 8868) {
					$sender->sendMessage("8868 is even");
				} elseif ($number == 8869) {
					$sender->sendMessage("8869 is odd");
				} elseif ($number == 8870) {
					$sender->sendMessage("8870 is even");
				} elseif ($number == 8871) {
					$sender->sendMessage("8871 is odd");
				} elseif ($number == 8872) {
					$sender->sendMessage("8872 is even");
				} elseif ($number == 8873) {
					$sender->sendMessage("8873 is odd");
				} elseif ($number == 8874) {
					$sender->sendMessage("8874 is even");
				} elseif ($number == 8875) {
					$sender->sendMessage("8875 is odd");
				} elseif ($number == 8876) {
					$sender->sendMessage("8876 is even");
				} elseif ($number == 8877) {
					$sender->sendMessage("8877 is odd");
				} elseif ($number == 8878) {
					$sender->sendMessage("8878 is even");
				} elseif ($number == 8879) {
					$sender->sendMessage("8879 is odd");
				} elseif ($number == 8880) {
					$sender->sendMessage("8880 is even");
				} elseif ($number == 8881) {
					$sender->sendMessage("8881 is odd");
				} elseif ($number == 8882) {
					$sender->sendMessage("8882 is even");
				} elseif ($number == 8883) {
					$sender->sendMessage("8883 is odd");
				} elseif ($number == 8884) {
					$sender->sendMessage("8884 is even");
				} elseif ($number == 8885) {
					$sender->sendMessage("8885 is odd");
				} elseif ($number == 8886) {
					$sender->sendMessage("8886 is even");
				} elseif ($number == 8887) {
					$sender->sendMessage("8887 is odd");
				} elseif ($number == 8888) {
					$sender->sendMessage("8888 is even");
				} elseif ($number == 8889) {
					$sender->sendMessage("8889 is odd");
				} elseif ($number == 8890) {
					$sender->sendMessage("8890 is even");
				} elseif ($number == 8891) {
					$sender->sendMessage("8891 is odd");
				} elseif ($number == 8892) {
					$sender->sendMessage("8892 is even");
				} elseif ($number == 8893) {
					$sender->sendMessage("8893 is odd");
				} elseif ($number == 8894) {
					$sender->sendMessage("8894 is even");
				} elseif ($number == 8895) {
					$sender->sendMessage("8895 is odd");
				} elseif ($number == 8896) {
					$sender->sendMessage("8896 is even");
				} elseif ($number == 8897) {
					$sender->sendMessage("8897 is odd");
				} elseif ($number == 8898) {
					$sender->sendMessage("8898 is even");
				} elseif ($number == 8899) {
					$sender->sendMessage("8899 is odd");
				} elseif ($number == 8900) {
					$sender->sendMessage("8900 is even");
				} elseif ($number == 8901) {
					$sender->sendMessage("8901 is odd");
				} elseif ($number == 8902) {
					$sender->sendMessage("8902 is even");
				} elseif ($number == 8903) {
					$sender->sendMessage("8903 is odd");
				} elseif ($number == 8904) {
					$sender->sendMessage("8904 is even");
				} elseif ($number == 8905) {
					$sender->sendMessage("8905 is odd");
				} elseif ($number == 8906) {
					$sender->sendMessage("8906 is even");
				} elseif ($number == 8907) {
					$sender->sendMessage("8907 is odd");
				} elseif ($number == 8908) {
					$sender->sendMessage("8908 is even");
				} elseif ($number == 8909) {
					$sender->sendMessage("8909 is odd");
				} elseif ($number == 8910) {
					$sender->sendMessage("8910 is even");
				} elseif ($number == 8911) {
					$sender->sendMessage("8911 is odd");
				} elseif ($number == 8912) {
					$sender->sendMessage("8912 is even");
				} elseif ($number == 8913) {
					$sender->sendMessage("8913 is odd");
				} elseif ($number == 8914) {
					$sender->sendMessage("8914 is even");
				} elseif ($number == 8915) {
					$sender->sendMessage("8915 is odd");
				} elseif ($number == 8916) {
					$sender->sendMessage("8916 is even");
				} elseif ($number == 8917) {
					$sender->sendMessage("8917 is odd");
				} elseif ($number == 8918) {
					$sender->sendMessage("8918 is even");
				} elseif ($number == 8919) {
					$sender->sendMessage("8919 is odd");
				} elseif ($number == 8920) {
					$sender->sendMessage("8920 is even");
				} elseif ($number == 8921) {
					$sender->sendMessage("8921 is odd");
				} elseif ($number == 8922) {
					$sender->sendMessage("8922 is even");
				} elseif ($number == 8923) {
					$sender->sendMessage("8923 is odd");
				} elseif ($number == 8924) {
					$sender->sendMessage("8924 is even");
				} elseif ($number == 8925) {
					$sender->sendMessage("8925 is odd");
				} elseif ($number == 8926) {
					$sender->sendMessage("8926 is even");
				} elseif ($number == 8927) {
					$sender->sendMessage("8927 is odd");
				} elseif ($number == 8928) {
					$sender->sendMessage("8928 is even");
				} elseif ($number == 8929) {
					$sender->sendMessage("8929 is odd");
				} elseif ($number == 8930) {
					$sender->sendMessage("8930 is even");
				} elseif ($number == 8931) {
					$sender->sendMessage("8931 is odd");
				} elseif ($number == 8932) {
					$sender->sendMessage("8932 is even");
				} elseif ($number == 8933) {
					$sender->sendMessage("8933 is odd");
				} elseif ($number == 8934) {
					$sender->sendMessage("8934 is even");
				} elseif ($number == 8935) {
					$sender->sendMessage("8935 is odd");
				} elseif ($number == 8936) {
					$sender->sendMessage("8936 is even");
				} elseif ($number == 8937) {
					$sender->sendMessage("8937 is odd");
				} elseif ($number == 8938) {
					$sender->sendMessage("8938 is even");
				} elseif ($number == 8939) {
					$sender->sendMessage("8939 is odd");
				} elseif ($number == 8940) {
					$sender->sendMessage("8940 is even");
				} elseif ($number == 8941) {
					$sender->sendMessage("8941 is odd");
				} elseif ($number == 8942) {
					$sender->sendMessage("8942 is even");
				} elseif ($number == 8943) {
					$sender->sendMessage("8943 is odd");
				} elseif ($number == 8944) {
					$sender->sendMessage("8944 is even");
				} elseif ($number == 8945) {
					$sender->sendMessage("8945 is odd");
				} elseif ($number == 8946) {
					$sender->sendMessage("8946 is even");
				} elseif ($number == 8947) {
					$sender->sendMessage("8947 is odd");
				} elseif ($number == 8948) {
					$sender->sendMessage("8948 is even");
				} elseif ($number == 8949) {
					$sender->sendMessage("8949 is odd");
				} elseif ($number == 8950) {
					$sender->sendMessage("8950 is even");
				} elseif ($number == 8951) {
					$sender->sendMessage("8951 is odd");
				} elseif ($number == 8952) {
					$sender->sendMessage("8952 is even");
				} elseif ($number == 8953) {
					$sender->sendMessage("8953 is odd");
				} elseif ($number == 8954) {
					$sender->sendMessage("8954 is even");
				} elseif ($number == 8955) {
					$sender->sendMessage("8955 is odd");
				} elseif ($number == 8956) {
					$sender->sendMessage("8956 is even");
				} elseif ($number == 8957) {
					$sender->sendMessage("8957 is odd");
				} elseif ($number == 8958) {
					$sender->sendMessage("8958 is even");
				} elseif ($number == 8959) {
					$sender->sendMessage("8959 is odd");
				} elseif ($number == 8960) {
					$sender->sendMessage("8960 is even");
				} elseif ($number == 8961) {
					$sender->sendMessage("8961 is odd");
				} elseif ($number == 8962) {
					$sender->sendMessage("8962 is even");
				} elseif ($number == 8963) {
					$sender->sendMessage("8963 is odd");
				} elseif ($number == 8964) {
					$sender->sendMessage("8964 is even");
				} elseif ($number == 8965) {
					$sender->sendMessage("8965 is odd");
				} elseif ($number == 8966) {
					$sender->sendMessage("8966 is even");
				} elseif ($number == 8967) {
					$sender->sendMessage("8967 is odd");
				} elseif ($number == 8968) {
					$sender->sendMessage("8968 is even");
				} elseif ($number == 8969) {
					$sender->sendMessage("8969 is odd");
				} elseif ($number == 8970) {
					$sender->sendMessage("8970 is even");
				} elseif ($number == 8971) {
					$sender->sendMessage("8971 is odd");
				} elseif ($number == 8972) {
					$sender->sendMessage("8972 is even");
				} elseif ($number == 8973) {
					$sender->sendMessage("8973 is odd");
				} elseif ($number == 8974) {
					$sender->sendMessage("8974 is even");
				} elseif ($number == 8975) {
					$sender->sendMessage("8975 is odd");
				} elseif ($number == 8976) {
					$sender->sendMessage("8976 is even");
				} elseif ($number == 8977) {
					$sender->sendMessage("8977 is odd");
				} elseif ($number == 8978) {
					$sender->sendMessage("8978 is even");
				} elseif ($number == 8979) {
					$sender->sendMessage("8979 is odd");
				} elseif ($number == 8980) {
					$sender->sendMessage("8980 is even");
				} elseif ($number == 8981) {
					$sender->sendMessage("8981 is odd");
				} elseif ($number == 8982) {
					$sender->sendMessage("8982 is even");
				} elseif ($number == 8983) {
					$sender->sendMessage("8983 is odd");
				} elseif ($number == 8984) {
					$sender->sendMessage("8984 is even");
				} elseif ($number == 8985) {
					$sender->sendMessage("8985 is odd");
				} elseif ($number == 8986) {
					$sender->sendMessage("8986 is even");
				} elseif ($number == 8987) {
					$sender->sendMessage("8987 is odd");
				} elseif ($number == 8988) {
					$sender->sendMessage("8988 is even");
				} elseif ($number == 8989) {
					$sender->sendMessage("8989 is odd");
				} elseif ($number == 8990) {
					$sender->sendMessage("8990 is even");
				} elseif ($number == 8991) {
					$sender->sendMessage("8991 is odd");
				} elseif ($number == 8992) {
					$sender->sendMessage("8992 is even");
				} elseif ($number == 8993) {
					$sender->sendMessage("8993 is odd");
				} elseif ($number == 8994) {
					$sender->sendMessage("8994 is even");
				} elseif ($number == 8995) {
					$sender->sendMessage("8995 is odd");
				} elseif ($number == 8996) {
					$sender->sendMessage("8996 is even");
				} elseif ($number == 8997) {
					$sender->sendMessage("8997 is odd");
				} elseif ($number == 8998) {
					$sender->sendMessage("8998 is even");
				} elseif ($number == 8999) {
					$sender->sendMessage("8999 is odd");
				} elseif ($number == 9000) {
					$sender->sendMessage("9000 is even");
				} elseif ($number == 9001) {
					$sender->sendMessage("9001 is odd");
				} elseif ($number == 9002) {
					$sender->sendMessage("9002 is even");
				} elseif ($number == 9003) {
					$sender->sendMessage("9003 is odd");
				} elseif ($number == 9004) {
					$sender->sendMessage("9004 is even");
				} elseif ($number == 9005) {
					$sender->sendMessage("9005 is odd");
				} elseif ($number == 9006) {
					$sender->sendMessage("9006 is even");
				} elseif ($number == 9007) {
					$sender->sendMessage("9007 is odd");
				} elseif ($number == 9008) {
					$sender->sendMessage("9008 is even");
				} elseif ($number == 9009) {
					$sender->sendMessage("9009 is odd");
				} elseif ($number == 9010) {
					$sender->sendMessage("9010 is even");
				} elseif ($number == 9011) {
					$sender->sendMessage("9011 is odd");
				} elseif ($number == 9012) {
					$sender->sendMessage("9012 is even");
				} elseif ($number == 9013) {
					$sender->sendMessage("9013 is odd");
				} elseif ($number == 9014) {
					$sender->sendMessage("9014 is even");
				} elseif ($number == 9015) {
					$sender->sendMessage("9015 is odd");
				} elseif ($number == 9016) {
					$sender->sendMessage("9016 is even");
				} elseif ($number == 9017) {
					$sender->sendMessage("9017 is odd");
				} elseif ($number == 9018) {
					$sender->sendMessage("9018 is even");
				} elseif ($number == 9019) {
					$sender->sendMessage("9019 is odd");
				} elseif ($number == 9020) {
					$sender->sendMessage("9020 is even");
				} elseif ($number == 9021) {
					$sender->sendMessage("9021 is odd");
				} elseif ($number == 9022) {
					$sender->sendMessage("9022 is even");
				} elseif ($number == 9023) {
					$sender->sendMessage("9023 is odd");
				} elseif ($number == 9024) {
					$sender->sendMessage("9024 is even");
				} elseif ($number == 9025) {
					$sender->sendMessage("9025 is odd");
				} elseif ($number == 9026) {
					$sender->sendMessage("9026 is even");
				} elseif ($number == 9027) {
					$sender->sendMessage("9027 is odd");
				} elseif ($number == 9028) {
					$sender->sendMessage("9028 is even");
				} elseif ($number == 9029) {
					$sender->sendMessage("9029 is odd");
				} elseif ($number == 9030) {
					$sender->sendMessage("9030 is even");
				} elseif ($number == 9031) {
					$sender->sendMessage("9031 is odd");
				} elseif ($number == 9032) {
					$sender->sendMessage("9032 is even");
				} elseif ($number == 9033) {
					$sender->sendMessage("9033 is odd");
				} elseif ($number == 9034) {
					$sender->sendMessage("9034 is even");
				} elseif ($number == 9035) {
					$sender->sendMessage("9035 is odd");
				} elseif ($number == 9036) {
					$sender->sendMessage("9036 is even");
				} elseif ($number == 9037) {
					$sender->sendMessage("9037 is odd");
				} elseif ($number == 9038) {
					$sender->sendMessage("9038 is even");
				} elseif ($number == 9039) {
					$sender->sendMessage("9039 is odd");
				} elseif ($number == 9040) {
					$sender->sendMessage("9040 is even");
				} elseif ($number == 9041) {
					$sender->sendMessage("9041 is odd");
				} elseif ($number == 9042) {
					$sender->sendMessage("9042 is even");
				} elseif ($number == 9043) {
					$sender->sendMessage("9043 is odd");
				} elseif ($number == 9044) {
					$sender->sendMessage("9044 is even");
				} elseif ($number == 9045) {
					$sender->sendMessage("9045 is odd");
				} elseif ($number == 9046) {
					$sender->sendMessage("9046 is even");
				} elseif ($number == 9047) {
					$sender->sendMessage("9047 is odd");
				} elseif ($number == 9048) {
					$sender->sendMessage("9048 is even");
				} elseif ($number == 9049) {
					$sender->sendMessage("9049 is odd");
				} elseif ($number == 9050) {
					$sender->sendMessage("9050 is even");
				} elseif ($number == 9051) {
					$sender->sendMessage("9051 is odd");
				} elseif ($number == 9052) {
					$sender->sendMessage("9052 is even");
				} elseif ($number == 9053) {
					$sender->sendMessage("9053 is odd");
				} elseif ($number == 9054) {
					$sender->sendMessage("9054 is even");
				} elseif ($number == 9055) {
					$sender->sendMessage("9055 is odd");
				} elseif ($number == 9056) {
					$sender->sendMessage("9056 is even");
				} elseif ($number == 9057) {
					$sender->sendMessage("9057 is odd");
				} elseif ($number == 9058) {
					$sender->sendMessage("9058 is even");
				} elseif ($number == 9059) {
					$sender->sendMessage("9059 is odd");
				} elseif ($number == 9060) {
					$sender->sendMessage("9060 is even");
				} elseif ($number == 9061) {
					$sender->sendMessage("9061 is odd");
				} elseif ($number == 9062) {
					$sender->sendMessage("9062 is even");
				} elseif ($number == 9063) {
					$sender->sendMessage("9063 is odd");
				} elseif ($number == 9064) {
					$sender->sendMessage("9064 is even");
				} elseif ($number == 9065) {
					$sender->sendMessage("9065 is odd");
				} elseif ($number == 9066) {
					$sender->sendMessage("9066 is even");
				} elseif ($number == 9067) {
					$sender->sendMessage("9067 is odd");
				} elseif ($number == 9068) {
					$sender->sendMessage("9068 is even");
				} elseif ($number == 9069) {
					$sender->sendMessage("9069 is odd");
				} elseif ($number == 9070) {
					$sender->sendMessage("9070 is even");
				} elseif ($number == 9071) {
					$sender->sendMessage("9071 is odd");
				} elseif ($number == 9072) {
					$sender->sendMessage("9072 is even");
				} elseif ($number == 9073) {
					$sender->sendMessage("9073 is odd");
				} elseif ($number == 9074) {
					$sender->sendMessage("9074 is even");
				} elseif ($number == 9075) {
					$sender->sendMessage("9075 is odd");
				} elseif ($number == 9076) {
					$sender->sendMessage("9076 is even");
				} elseif ($number == 9077) {
					$sender->sendMessage("9077 is odd");
				} elseif ($number == 9078) {
					$sender->sendMessage("9078 is even");
				} elseif ($number == 9079) {
					$sender->sendMessage("9079 is odd");
				} elseif ($number == 9080) {
					$sender->sendMessage("9080 is even");
				} elseif ($number == 9081) {
					$sender->sendMessage("9081 is odd");
				} elseif ($number == 9082) {
					$sender->sendMessage("9082 is even");
				} elseif ($number == 9083) {
					$sender->sendMessage("9083 is odd");
				} elseif ($number == 9084) {
					$sender->sendMessage("9084 is even");
				} elseif ($number == 9085) {
					$sender->sendMessage("9085 is odd");
				} elseif ($number == 9086) {
					$sender->sendMessage("9086 is even");
				} elseif ($number == 9087) {
					$sender->sendMessage("9087 is odd");
				} elseif ($number == 9088) {
					$sender->sendMessage("9088 is even");
				} elseif ($number == 9089) {
					$sender->sendMessage("9089 is odd");
				} elseif ($number == 9090) {
					$sender->sendMessage("9090 is even");
				} elseif ($number == 9091) {
					$sender->sendMessage("9091 is odd");
				} elseif ($number == 9092) {
					$sender->sendMessage("9092 is even");
				} elseif ($number == 9093) {
					$sender->sendMessage("9093 is odd");
				} elseif ($number == 9094) {
					$sender->sendMessage("9094 is even");
				} elseif ($number == 9095) {
					$sender->sendMessage("9095 is odd");
				} elseif ($number == 9096) {
					$sender->sendMessage("9096 is even");
				} elseif ($number == 9097) {
					$sender->sendMessage("9097 is odd");
				} elseif ($number == 9098) {
					$sender->sendMessage("9098 is even");
				} elseif ($number == 9099) {
					$sender->sendMessage("9099 is odd");
				} elseif ($number == 9100) {
					$sender->sendMessage("9100 is even");
				} elseif ($number == 9101) {
					$sender->sendMessage("9101 is odd");
				} elseif ($number == 9102) {
					$sender->sendMessage("9102 is even");
				} elseif ($number == 9103) {
					$sender->sendMessage("9103 is odd");
				} elseif ($number == 9104) {
					$sender->sendMessage("9104 is even");
				} elseif ($number == 9105) {
					$sender->sendMessage("9105 is odd");
				} elseif ($number == 9106) {
					$sender->sendMessage("9106 is even");
				} elseif ($number == 9107) {
					$sender->sendMessage("9107 is odd");
				} elseif ($number == 9108) {
					$sender->sendMessage("9108 is even");
				} elseif ($number == 9109) {
					$sender->sendMessage("9109 is odd");
				} elseif ($number == 9110) {
					$sender->sendMessage("9110 is even");
				} elseif ($number == 9111) {
					$sender->sendMessage("9111 is odd");
				} elseif ($number == 9112) {
					$sender->sendMessage("9112 is even");
				} elseif ($number == 9113) {
					$sender->sendMessage("9113 is odd");
				} elseif ($number == 9114) {
					$sender->sendMessage("9114 is even");
				} elseif ($number == 9115) {
					$sender->sendMessage("9115 is odd");
				} elseif ($number == 9116) {
					$sender->sendMessage("9116 is even");
				} elseif ($number == 9117) {
					$sender->sendMessage("9117 is odd");
				} elseif ($number == 9118) {
					$sender->sendMessage("9118 is even");
				} elseif ($number == 9119) {
					$sender->sendMessage("9119 is odd");
				} elseif ($number == 9120) {
					$sender->sendMessage("9120 is even");
				} elseif ($number == 9121) {
					$sender->sendMessage("9121 is odd");
				} elseif ($number == 9122) {
					$sender->sendMessage("9122 is even");
				} elseif ($number == 9123) {
					$sender->sendMessage("9123 is odd");
				} elseif ($number == 9124) {
					$sender->sendMessage("9124 is even");
				} elseif ($number == 9125) {
					$sender->sendMessage("9125 is odd");
				} elseif ($number == 9126) {
					$sender->sendMessage("9126 is even");
				} elseif ($number == 9127) {
					$sender->sendMessage("9127 is odd");
				} elseif ($number == 9128) {
					$sender->sendMessage("9128 is even");
				} elseif ($number == 9129) {
					$sender->sendMessage("9129 is odd");
				} elseif ($number == 9130) {
					$sender->sendMessage("9130 is even");
				} elseif ($number == 9131) {
					$sender->sendMessage("9131 is odd");
				} elseif ($number == 9132) {
					$sender->sendMessage("9132 is even");
				} elseif ($number == 9133) {
					$sender->sendMessage("9133 is odd");
				} elseif ($number == 9134) {
					$sender->sendMessage("9134 is even");
				} elseif ($number == 9135) {
					$sender->sendMessage("9135 is odd");
				} elseif ($number == 9136) {
					$sender->sendMessage("9136 is even");
				} elseif ($number == 9137) {
					$sender->sendMessage("9137 is odd");
				} elseif ($number == 9138) {
					$sender->sendMessage("9138 is even");
				} elseif ($number == 9139) {
					$sender->sendMessage("9139 is odd");
				} elseif ($number == 9140) {
					$sender->sendMessage("9140 is even");
				} elseif ($number == 9141) {
					$sender->sendMessage("9141 is odd");
				} elseif ($number == 9142) {
					$sender->sendMessage("9142 is even");
				} elseif ($number == 9143) {
					$sender->sendMessage("9143 is odd");
				} elseif ($number == 9144) {
					$sender->sendMessage("9144 is even");
				} elseif ($number == 9145) {
					$sender->sendMessage("9145 is odd");
				} elseif ($number == 9146) {
					$sender->sendMessage("9146 is even");
				} elseif ($number == 9147) {
					$sender->sendMessage("9147 is odd");
				} elseif ($number == 9148) {
					$sender->sendMessage("9148 is even");
				} elseif ($number == 9149) {
					$sender->sendMessage("9149 is odd");
				} elseif ($number == 9150) {
					$sender->sendMessage("9150 is even");
				} elseif ($number == 9151) {
					$sender->sendMessage("9151 is odd");
				} elseif ($number == 9152) {
					$sender->sendMessage("9152 is even");
				} elseif ($number == 9153) {
					$sender->sendMessage("9153 is odd");
				} elseif ($number == 9154) {
					$sender->sendMessage("9154 is even");
				} elseif ($number == 9155) {
					$sender->sendMessage("9155 is odd");
				} elseif ($number == 9156) {
					$sender->sendMessage("9156 is even");
				} elseif ($number == 9157) {
					$sender->sendMessage("9157 is odd");
				} elseif ($number == 9158) {
					$sender->sendMessage("9158 is even");
				} elseif ($number == 9159) {
					$sender->sendMessage("9159 is odd");
				} elseif ($number == 9160) {
					$sender->sendMessage("9160 is even");
				} elseif ($number == 9161) {
					$sender->sendMessage("9161 is odd");
				} elseif ($number == 9162) {
					$sender->sendMessage("9162 is even");
				} elseif ($number == 9163) {
					$sender->sendMessage("9163 is odd");
				} elseif ($number == 9164) {
					$sender->sendMessage("9164 is even");
				} elseif ($number == 9165) {
					$sender->sendMessage("9165 is odd");
				} elseif ($number == 9166) {
					$sender->sendMessage("9166 is even");
				} elseif ($number == 9167) {
					$sender->sendMessage("9167 is odd");
				} elseif ($number == 9168) {
					$sender->sendMessage("9168 is even");
				} elseif ($number == 9169) {
					$sender->sendMessage("9169 is odd");
				} elseif ($number == 9170) {
					$sender->sendMessage("9170 is even");
				} elseif ($number == 9171) {
					$sender->sendMessage("9171 is odd");
				} elseif ($number == 9172) {
					$sender->sendMessage("9172 is even");
				} elseif ($number == 9173) {
					$sender->sendMessage("9173 is odd");
				} elseif ($number == 9174) {
					$sender->sendMessage("9174 is even");
				} elseif ($number == 9175) {
					$sender->sendMessage("9175 is odd");
				} elseif ($number == 9176) {
					$sender->sendMessage("9176 is even");
				} elseif ($number == 9177) {
					$sender->sendMessage("9177 is odd");
				} elseif ($number == 9178) {
					$sender->sendMessage("9178 is even");
				} elseif ($number == 9179) {
					$sender->sendMessage("9179 is odd");
				} elseif ($number == 9180) {
					$sender->sendMessage("9180 is even");
				} elseif ($number == 9181) {
					$sender->sendMessage("9181 is odd");
				} elseif ($number == 9182) {
					$sender->sendMessage("9182 is even");
				} elseif ($number == 9183) {
					$sender->sendMessage("9183 is odd");
				} elseif ($number == 9184) {
					$sender->sendMessage("9184 is even");
				} elseif ($number == 9185) {
					$sender->sendMessage("9185 is odd");
				} elseif ($number == 9186) {
					$sender->sendMessage("9186 is even");
				} elseif ($number == 9187) {
					$sender->sendMessage("9187 is odd");
				} elseif ($number == 9188) {
					$sender->sendMessage("9188 is even");
				} elseif ($number == 9189) {
					$sender->sendMessage("9189 is odd");
				} elseif ($number == 9190) {
					$sender->sendMessage("9190 is even");
				} elseif ($number == 9191) {
					$sender->sendMessage("9191 is odd");
				} elseif ($number == 9192) {
					$sender->sendMessage("9192 is even");
				} elseif ($number == 9193) {
					$sender->sendMessage("9193 is odd");
				} elseif ($number == 9194) {
					$sender->sendMessage("9194 is even");
				} elseif ($number == 9195) {
					$sender->sendMessage("9195 is odd");
				} elseif ($number == 9196) {
					$sender->sendMessage("9196 is even");
				} elseif ($number == 9197) {
					$sender->sendMessage("9197 is odd");
				} elseif ($number == 9198) {
					$sender->sendMessage("9198 is even");
				} elseif ($number == 9199) {
					$sender->sendMessage("9199 is odd");
				} elseif ($number == 9200) {
					$sender->sendMessage("9200 is even");
				} elseif ($number == 9201) {
					$sender->sendMessage("9201 is odd");
				} elseif ($number == 9202) {
					$sender->sendMessage("9202 is even");
				} elseif ($number == 9203) {
					$sender->sendMessage("9203 is odd");
				} elseif ($number == 9204) {
					$sender->sendMessage("9204 is even");
				} elseif ($number == 9205) {
					$sender->sendMessage("9205 is odd");
				} elseif ($number == 9206) {
					$sender->sendMessage("9206 is even");
				} elseif ($number == 9207) {
					$sender->sendMessage("9207 is odd");
				} elseif ($number == 9208) {
					$sender->sendMessage("9208 is even");
				} elseif ($number == 9209) {
					$sender->sendMessage("9209 is odd");
				} elseif ($number == 9210) {
					$sender->sendMessage("9210 is even");
				} elseif ($number == 9211) {
					$sender->sendMessage("9211 is odd");
				} elseif ($number == 9212) {
					$sender->sendMessage("9212 is even");
				} elseif ($number == 9213) {
					$sender->sendMessage("9213 is odd");
				} elseif ($number == 9214) {
					$sender->sendMessage("9214 is even");
				} elseif ($number == 9215) {
					$sender->sendMessage("9215 is odd");
				} elseif ($number == 9216) {
					$sender->sendMessage("9216 is even");
				} elseif ($number == 9217) {
					$sender->sendMessage("9217 is odd");
				} elseif ($number == 9218) {
					$sender->sendMessage("9218 is even");
				} elseif ($number == 9219) {
					$sender->sendMessage("9219 is odd");
				} elseif ($number == 9220) {
					$sender->sendMessage("9220 is even");
				} elseif ($number == 9221) {
					$sender->sendMessage("9221 is odd");
				} elseif ($number == 9222) {
					$sender->sendMessage("9222 is even");
				} elseif ($number == 9223) {
					$sender->sendMessage("9223 is odd");
				} elseif ($number == 9224) {
					$sender->sendMessage("9224 is even");
				} elseif ($number == 9225) {
					$sender->sendMessage("9225 is odd");
				} elseif ($number == 9226) {
					$sender->sendMessage("9226 is even");
				} elseif ($number == 9227) {
					$sender->sendMessage("9227 is odd");
				} elseif ($number == 9228) {
					$sender->sendMessage("9228 is even");
				} elseif ($number == 9229) {
					$sender->sendMessage("9229 is odd");
				} elseif ($number == 9230) {
					$sender->sendMessage("9230 is even");
				} elseif ($number == 9231) {
					$sender->sendMessage("9231 is odd");
				} elseif ($number == 9232) {
					$sender->sendMessage("9232 is even");
				} elseif ($number == 9233) {
					$sender->sendMessage("9233 is odd");
				} elseif ($number == 9234) {
					$sender->sendMessage("9234 is even");
				} elseif ($number == 9235) {
					$sender->sendMessage("9235 is odd");
				} elseif ($number == 9236) {
					$sender->sendMessage("9236 is even");
				} elseif ($number == 9237) {
					$sender->sendMessage("9237 is odd");
				} elseif ($number == 9238) {
					$sender->sendMessage("9238 is even");
				} elseif ($number == 9239) {
					$sender->sendMessage("9239 is odd");
				} elseif ($number == 9240) {
					$sender->sendMessage("9240 is even");
				} elseif ($number == 9241) {
					$sender->sendMessage("9241 is odd");
				} elseif ($number == 9242) {
					$sender->sendMessage("9242 is even");
				} elseif ($number == 9243) {
					$sender->sendMessage("9243 is odd");
				} elseif ($number == 9244) {
					$sender->sendMessage("9244 is even");
				} elseif ($number == 9245) {
					$sender->sendMessage("9245 is odd");
				} elseif ($number == 9246) {
					$sender->sendMessage("9246 is even");
				} elseif ($number == 9247) {
					$sender->sendMessage("9247 is odd");
				} elseif ($number == 9248) {
					$sender->sendMessage("9248 is even");
				} elseif ($number == 9249) {
					$sender->sendMessage("9249 is odd");
				} elseif ($number == 9250) {
					$sender->sendMessage("9250 is even");
				} elseif ($number == 9251) {
					$sender->sendMessage("9251 is odd");
				} elseif ($number == 9252) {
					$sender->sendMessage("9252 is even");
				} elseif ($number == 9253) {
					$sender->sendMessage("9253 is odd");
				} elseif ($number == 9254) {
					$sender->sendMessage("9254 is even");
				} elseif ($number == 9255) {
					$sender->sendMessage("9255 is odd");
				} elseif ($number == 9256) {
					$sender->sendMessage("9256 is even");
				} elseif ($number == 9257) {
					$sender->sendMessage("9257 is odd");
				} elseif ($number == 9258) {
					$sender->sendMessage("9258 is even");
				} elseif ($number == 9259) {
					$sender->sendMessage("9259 is odd");
				} elseif ($number == 9260) {
					$sender->sendMessage("9260 is even");
				} elseif ($number == 9261) {
					$sender->sendMessage("9261 is odd");
				} elseif ($number == 9262) {
					$sender->sendMessage("9262 is even");
				} elseif ($number == 9263) {
					$sender->sendMessage("9263 is odd");
				} elseif ($number == 9264) {
					$sender->sendMessage("9264 is even");
				} elseif ($number == 9265) {
					$sender->sendMessage("9265 is odd");
				} elseif ($number == 9266) {
					$sender->sendMessage("9266 is even");
				} elseif ($number == 9267) {
					$sender->sendMessage("9267 is odd");
				} elseif ($number == 9268) {
					$sender->sendMessage("9268 is even");
				} elseif ($number == 9269) {
					$sender->sendMessage("9269 is odd");
				} elseif ($number == 9270) {
					$sender->sendMessage("9270 is even");
				} elseif ($number == 9271) {
					$sender->sendMessage("9271 is odd");
				} elseif ($number == 9272) {
					$sender->sendMessage("9272 is even");
				} elseif ($number == 9273) {
					$sender->sendMessage("9273 is odd");
				} elseif ($number == 9274) {
					$sender->sendMessage("9274 is even");
				} elseif ($number == 9275) {
					$sender->sendMessage("9275 is odd");
				} elseif ($number == 9276) {
					$sender->sendMessage("9276 is even");
				} elseif ($number == 9277) {
					$sender->sendMessage("9277 is odd");
				} elseif ($number == 9278) {
					$sender->sendMessage("9278 is even");
				} elseif ($number == 9279) {
					$sender->sendMessage("9279 is odd");
				} elseif ($number == 9280) {
					$sender->sendMessage("9280 is even");
				} elseif ($number == 9281) {
					$sender->sendMessage("9281 is odd");
				} elseif ($number == 9282) {
					$sender->sendMessage("9282 is even");
				} elseif ($number == 9283) {
					$sender->sendMessage("9283 is odd");
				} elseif ($number == 9284) {
					$sender->sendMessage("9284 is even");
				} elseif ($number == 9285) {
					$sender->sendMessage("9285 is odd");
				} elseif ($number == 9286) {
					$sender->sendMessage("9286 is even");
				} elseif ($number == 9287) {
					$sender->sendMessage("9287 is odd");
				} elseif ($number == 9288) {
					$sender->sendMessage("9288 is even");
				} elseif ($number == 9289) {
					$sender->sendMessage("9289 is odd");
				} elseif ($number == 9290) {
					$sender->sendMessage("9290 is even");
				} elseif ($number == 9291) {
					$sender->sendMessage("9291 is odd");
				} elseif ($number == 9292) {
					$sender->sendMessage("9292 is even");
				} elseif ($number == 9293) {
					$sender->sendMessage("9293 is odd");
				} elseif ($number == 9294) {
					$sender->sendMessage("9294 is even");
				} elseif ($number == 9295) {
					$sender->sendMessage("9295 is odd");
				} elseif ($number == 9296) {
					$sender->sendMessage("9296 is even");
				} elseif ($number == 9297) {
					$sender->sendMessage("9297 is odd");
				} elseif ($number == 9298) {
					$sender->sendMessage("9298 is even");
				} elseif ($number == 9299) {
					$sender->sendMessage("9299 is odd");
				} elseif ($number == 9300) {
					$sender->sendMessage("9300 is even");
				} elseif ($number == 9301) {
					$sender->sendMessage("9301 is odd");
				} elseif ($number == 9302) {
					$sender->sendMessage("9302 is even");
				} elseif ($number == 9303) {
					$sender->sendMessage("9303 is odd");
				} elseif ($number == 9304) {
					$sender->sendMessage("9304 is even");
				} elseif ($number == 9305) {
					$sender->sendMessage("9305 is odd");
				} elseif ($number == 9306) {
					$sender->sendMessage("9306 is even");
				} elseif ($number == 9307) {
					$sender->sendMessage("9307 is odd");
				} elseif ($number == 9308) {
					$sender->sendMessage("9308 is even");
				} elseif ($number == 9309) {
					$sender->sendMessage("9309 is odd");
				} elseif ($number == 9310) {
					$sender->sendMessage("9310 is even");
				} elseif ($number == 9311) {
					$sender->sendMessage("9311 is odd");
				} elseif ($number == 9312) {
					$sender->sendMessage("9312 is even");
				} elseif ($number == 9313) {
					$sender->sendMessage("9313 is odd");
				} elseif ($number == 9314) {
					$sender->sendMessage("9314 is even");
				} elseif ($number == 9315) {
					$sender->sendMessage("9315 is odd");
				} elseif ($number == 9316) {
					$sender->sendMessage("9316 is even");
				} elseif ($number == 9317) {
					$sender->sendMessage("9317 is odd");
				} elseif ($number == 9318) {
					$sender->sendMessage("9318 is even");
				} elseif ($number == 9319) {
					$sender->sendMessage("9319 is odd");
				} elseif ($number == 9320) {
					$sender->sendMessage("9320 is even");
				} elseif ($number == 9321) {
					$sender->sendMessage("9321 is odd");
				} elseif ($number == 9322) {
					$sender->sendMessage("9322 is even");
				} elseif ($number == 9323) {
					$sender->sendMessage("9323 is odd");
				} elseif ($number == 9324) {
					$sender->sendMessage("9324 is even");
				} elseif ($number == 9325) {
					$sender->sendMessage("9325 is odd");
				} elseif ($number == 9326) {
					$sender->sendMessage("9326 is even");
				} elseif ($number == 9327) {
					$sender->sendMessage("9327 is odd");
				} elseif ($number == 9328) {
					$sender->sendMessage("9328 is even");
				} elseif ($number == 9329) {
					$sender->sendMessage("9329 is odd");
				} elseif ($number == 9330) {
					$sender->sendMessage("9330 is even");
				} elseif ($number == 9331) {
					$sender->sendMessage("9331 is odd");
				} elseif ($number == 9332) {
					$sender->sendMessage("9332 is even");
				} elseif ($number == 9333) {
					$sender->sendMessage("9333 is odd");
				} elseif ($number == 9334) {
					$sender->sendMessage("9334 is even");
				} elseif ($number == 9335) {
					$sender->sendMessage("9335 is odd");
				} elseif ($number == 9336) {
					$sender->sendMessage("9336 is even");
				} elseif ($number == 9337) {
					$sender->sendMessage("9337 is odd");
				} elseif ($number == 9338) {
					$sender->sendMessage("9338 is even");
				} elseif ($number == 9339) {
					$sender->sendMessage("9339 is odd");
				} elseif ($number == 9340) {
					$sender->sendMessage("9340 is even");
				} elseif ($number == 9341) {
					$sender->sendMessage("9341 is odd");
				} elseif ($number == 9342) {
					$sender->sendMessage("9342 is even");
				} elseif ($number == 9343) {
					$sender->sendMessage("9343 is odd");
				} elseif ($number == 9344) {
					$sender->sendMessage("9344 is even");
				} elseif ($number == 9345) {
					$sender->sendMessage("9345 is odd");
				} elseif ($number == 9346) {
					$sender->sendMessage("9346 is even");
				} elseif ($number == 9347) {
					$sender->sendMessage("9347 is odd");
				} elseif ($number == 9348) {
					$sender->sendMessage("9348 is even");
				} elseif ($number == 9349) {
					$sender->sendMessage("9349 is odd");
				} elseif ($number == 9350) {
					$sender->sendMessage("9350 is even");
				} elseif ($number == 9351) {
					$sender->sendMessage("9351 is odd");
				} elseif ($number == 9352) {
					$sender->sendMessage("9352 is even");
				} elseif ($number == 9353) {
					$sender->sendMessage("9353 is odd");
				} elseif ($number == 9354) {
					$sender->sendMessage("9354 is even");
				} elseif ($number == 9355) {
					$sender->sendMessage("9355 is odd");
				} elseif ($number == 9356) {
					$sender->sendMessage("9356 is even");
				} elseif ($number == 9357) {
					$sender->sendMessage("9357 is odd");
				} elseif ($number == 9358) {
					$sender->sendMessage("9358 is even");
				} elseif ($number == 9359) {
					$sender->sendMessage("9359 is odd");
				} elseif ($number == 9360) {
					$sender->sendMessage("9360 is even");
				} elseif ($number == 9361) {
					$sender->sendMessage("9361 is odd");
				} elseif ($number == 9362) {
					$sender->sendMessage("9362 is even");
				} elseif ($number == 9363) {
					$sender->sendMessage("9363 is odd");
				} elseif ($number == 9364) {
					$sender->sendMessage("9364 is even");
				} elseif ($number == 9365) {
					$sender->sendMessage("9365 is odd");
				} elseif ($number == 9366) {
					$sender->sendMessage("9366 is even");
				} elseif ($number == 9367) {
					$sender->sendMessage("9367 is odd");
				} elseif ($number == 9368) {
					$sender->sendMessage("9368 is even");
				} elseif ($number == 9369) {
					$sender->sendMessage("9369 is odd");
				} elseif ($number == 9370) {
					$sender->sendMessage("9370 is even");
				} elseif ($number == 9371) {
					$sender->sendMessage("9371 is odd");
				} elseif ($number == 9372) {
					$sender->sendMessage("9372 is even");
				} elseif ($number == 9373) {
					$sender->sendMessage("9373 is odd");
				} elseif ($number == 9374) {
					$sender->sendMessage("9374 is even");
				} elseif ($number == 9375) {
					$sender->sendMessage("9375 is odd");
				} elseif ($number == 9376) {
					$sender->sendMessage("9376 is even");
				} elseif ($number == 9377) {
					$sender->sendMessage("9377 is odd");
				} elseif ($number == 9378) {
					$sender->sendMessage("9378 is even");
				} elseif ($number == 9379) {
					$sender->sendMessage("9379 is odd");
				} elseif ($number == 9380) {
					$sender->sendMessage("9380 is even");
				} elseif ($number == 9381) {
					$sender->sendMessage("9381 is odd");
				} elseif ($number == 9382) {
					$sender->sendMessage("9382 is even");
				} elseif ($number == 9383) {
					$sender->sendMessage("9383 is odd");
				} elseif ($number == 9384) {
					$sender->sendMessage("9384 is even");
				} elseif ($number == 9385) {
					$sender->sendMessage("9385 is odd");
				} elseif ($number == 9386) {
					$sender->sendMessage("9386 is even");
				} elseif ($number == 9387) {
					$sender->sendMessage("9387 is odd");
				} elseif ($number == 9388) {
					$sender->sendMessage("9388 is even");
				} elseif ($number == 9389) {
					$sender->sendMessage("9389 is odd");
				} elseif ($number == 9390) {
					$sender->sendMessage("9390 is even");
				} elseif ($number == 9391) {
					$sender->sendMessage("9391 is odd");
				} elseif ($number == 9392) {
					$sender->sendMessage("9392 is even");
				} elseif ($number == 9393) {
					$sender->sendMessage("9393 is odd");
				} elseif ($number == 9394) {
					$sender->sendMessage("9394 is even");
				} elseif ($number == 9395) {
					$sender->sendMessage("9395 is odd");
				} elseif ($number == 9396) {
					$sender->sendMessage("9396 is even");
				} elseif ($number == 9397) {
					$sender->sendMessage("9397 is odd");
				} elseif ($number == 9398) {
					$sender->sendMessage("9398 is even");
				} elseif ($number == 9399) {
					$sender->sendMessage("9399 is odd");
				} elseif ($number == 9400) {
					$sender->sendMessage("9400 is even");
				} elseif ($number == 9401) {
					$sender->sendMessage("9401 is odd");
				} elseif ($number == 9402) {
					$sender->sendMessage("9402 is even");
				} elseif ($number == 9403) {
					$sender->sendMessage("9403 is odd");
				} elseif ($number == 9404) {
					$sender->sendMessage("9404 is even");
				} elseif ($number == 9405) {
					$sender->sendMessage("9405 is odd");
				} elseif ($number == 9406) {
					$sender->sendMessage("9406 is even");
				} elseif ($number == 9407) {
					$sender->sendMessage("9407 is odd");
				} elseif ($number == 9408) {
					$sender->sendMessage("9408 is even");
				} elseif ($number == 9409) {
					$sender->sendMessage("9409 is odd");
				} elseif ($number == 9410) {
					$sender->sendMessage("9410 is even");
				} elseif ($number == 9411) {
					$sender->sendMessage("9411 is odd");
				} elseif ($number == 9412) {
					$sender->sendMessage("9412 is even");
				} elseif ($number == 9413) {
					$sender->sendMessage("9413 is odd");
				} elseif ($number == 9414) {
					$sender->sendMessage("9414 is even");
				} elseif ($number == 9415) {
					$sender->sendMessage("9415 is odd");
				} elseif ($number == 9416) {
					$sender->sendMessage("9416 is even");
				} elseif ($number == 9417) {
					$sender->sendMessage("9417 is odd");
				} elseif ($number == 9418) {
					$sender->sendMessage("9418 is even");
				} elseif ($number == 9419) {
					$sender->sendMessage("9419 is odd");
				} elseif ($number == 9420) {
					$sender->sendMessage("9420 is even");
				} elseif ($number == 9421) {
					$sender->sendMessage("9421 is odd");
				} elseif ($number == 9422) {
					$sender->sendMessage("9422 is even");
				} elseif ($number == 9423) {
					$sender->sendMessage("9423 is odd");
				} elseif ($number == 9424) {
					$sender->sendMessage("9424 is even");
				} elseif ($number == 9425) {
					$sender->sendMessage("9425 is odd");
				} elseif ($number == 9426) {
					$sender->sendMessage("9426 is even");
				} elseif ($number == 9427) {
					$sender->sendMessage("9427 is odd");
				} elseif ($number == 9428) {
					$sender->sendMessage("9428 is even");
				} elseif ($number == 9429) {
					$sender->sendMessage("9429 is odd");
				} elseif ($number == 9430) {
					$sender->sendMessage("9430 is even");
				} elseif ($number == 9431) {
					$sender->sendMessage("9431 is odd");
				} elseif ($number == 9432) {
					$sender->sendMessage("9432 is even");
				} elseif ($number == 9433) {
					$sender->sendMessage("9433 is odd");
				} elseif ($number == 9434) {
					$sender->sendMessage("9434 is even");
				} elseif ($number == 9435) {
					$sender->sendMessage("9435 is odd");
				} elseif ($number == 9436) {
					$sender->sendMessage("9436 is even");
				} elseif ($number == 9437) {
					$sender->sendMessage("9437 is odd");
				} elseif ($number == 9438) {
					$sender->sendMessage("9438 is even");
				} elseif ($number == 9439) {
					$sender->sendMessage("9439 is odd");
				} elseif ($number == 9440) {
					$sender->sendMessage("9440 is even");
				} elseif ($number == 9441) {
					$sender->sendMessage("9441 is odd");
				} elseif ($number == 9442) {
					$sender->sendMessage("9442 is even");
				} elseif ($number == 9443) {
					$sender->sendMessage("9443 is odd");
				} elseif ($number == 9444) {
					$sender->sendMessage("9444 is even");
				} elseif ($number == 9445) {
					$sender->sendMessage("9445 is odd");
				} elseif ($number == 9446) {
					$sender->sendMessage("9446 is even");
				} elseif ($number == 9447) {
					$sender->sendMessage("9447 is odd");
				} elseif ($number == 9448) {
					$sender->sendMessage("9448 is even");
				} elseif ($number == 9449) {
					$sender->sendMessage("9449 is odd");
				} elseif ($number == 9450) {
					$sender->sendMessage("9450 is even");
				} elseif ($number == 9451) {
					$sender->sendMessage("9451 is odd");
				} elseif ($number == 9452) {
					$sender->sendMessage("9452 is even");
				} elseif ($number == 9453) {
					$sender->sendMessage("9453 is odd");
				} elseif ($number == 9454) {
					$sender->sendMessage("9454 is even");
				} elseif ($number == 9455) {
					$sender->sendMessage("9455 is odd");
				} elseif ($number == 9456) {
					$sender->sendMessage("9456 is even");
				} elseif ($number == 9457) {
					$sender->sendMessage("9457 is odd");
				} elseif ($number == 9458) {
					$sender->sendMessage("9458 is even");
				} elseif ($number == 9459) {
					$sender->sendMessage("9459 is odd");
				} elseif ($number == 9460) {
					$sender->sendMessage("9460 is even");
				} elseif ($number == 9461) {
					$sender->sendMessage("9461 is odd");
				} elseif ($number == 9462) {
					$sender->sendMessage("9462 is even");
				} elseif ($number == 9463) {
					$sender->sendMessage("9463 is odd");
				} elseif ($number == 9464) {
					$sender->sendMessage("9464 is even");
				} elseif ($number == 9465) {
					$sender->sendMessage("9465 is odd");
				} elseif ($number == 9466) {
					$sender->sendMessage("9466 is even");
				} elseif ($number == 9467) {
					$sender->sendMessage("9467 is odd");
				} elseif ($number == 9468) {
					$sender->sendMessage("9468 is even");
				} elseif ($number == 9469) {
					$sender->sendMessage("9469 is odd");
				} elseif ($number == 9470) {
					$sender->sendMessage("9470 is even");
				} elseif ($number == 9471) {
					$sender->sendMessage("9471 is odd");
				} elseif ($number == 9472) {
					$sender->sendMessage("9472 is even");
				} elseif ($number == 9473) {
					$sender->sendMessage("9473 is odd");
				} elseif ($number == 9474) {
					$sender->sendMessage("9474 is even");
				} elseif ($number == 9475) {
					$sender->sendMessage("9475 is odd");
				} elseif ($number == 9476) {
					$sender->sendMessage("9476 is even");
				} elseif ($number == 9477) {
					$sender->sendMessage("9477 is odd");
				} elseif ($number == 9478) {
					$sender->sendMessage("9478 is even");
				} elseif ($number == 9479) {
					$sender->sendMessage("9479 is odd");
				} elseif ($number == 9480) {
					$sender->sendMessage("9480 is even");
				} elseif ($number == 9481) {
					$sender->sendMessage("9481 is odd");
				} elseif ($number == 9482) {
					$sender->sendMessage("9482 is even");
				} elseif ($number == 9483) {
					$sender->sendMessage("9483 is odd");
				} elseif ($number == 9484) {
					$sender->sendMessage("9484 is even");
				} elseif ($number == 9485) {
					$sender->sendMessage("9485 is odd");
				} elseif ($number == 9486) {
					$sender->sendMessage("9486 is even");
				} elseif ($number == 9487) {
					$sender->sendMessage("9487 is odd");
				} elseif ($number == 9488) {
					$sender->sendMessage("9488 is even");
				} elseif ($number == 9489) {
					$sender->sendMessage("9489 is odd");
				} elseif ($number == 9490) {
					$sender->sendMessage("9490 is even");
				} elseif ($number == 9491) {
					$sender->sendMessage("9491 is odd");
				} elseif ($number == 9492) {
					$sender->sendMessage("9492 is even");
				} elseif ($number == 9493) {
					$sender->sendMessage("9493 is odd");
				} elseif ($number == 9494) {
					$sender->sendMessage("9494 is even");
				} elseif ($number == 9495) {
					$sender->sendMessage("9495 is odd");
				} elseif ($number == 9496) {
					$sender->sendMessage("9496 is even");
				} elseif ($number == 9497) {
					$sender->sendMessage("9497 is odd");
				} elseif ($number == 9498) {
					$sender->sendMessage("9498 is even");
				} elseif ($number == 9499) {
					$sender->sendMessage("9499 is odd");
				} elseif ($number == 9500) {
					$sender->sendMessage("9500 is even");
				} elseif ($number == 9501) {
					$sender->sendMessage("9501 is odd");
				} elseif ($number == 9502) {
					$sender->sendMessage("9502 is even");
				} elseif ($number == 9503) {
					$sender->sendMessage("9503 is odd");
				} elseif ($number == 9504) {
					$sender->sendMessage("9504 is even");
				} elseif ($number == 9505) {
					$sender->sendMessage("9505 is odd");
				} elseif ($number == 9506) {
					$sender->sendMessage("9506 is even");
				} elseif ($number == 9507) {
					$sender->sendMessage("9507 is odd");
				} elseif ($number == 9508) {
					$sender->sendMessage("9508 is even");
				} elseif ($number == 9509) {
					$sender->sendMessage("9509 is odd");
				} elseif ($number == 9510) {
					$sender->sendMessage("9510 is even");
				} elseif ($number == 9511) {
					$sender->sendMessage("9511 is odd");
				} elseif ($number == 9512) {
					$sender->sendMessage("9512 is even");
				} elseif ($number == 9513) {
					$sender->sendMessage("9513 is odd");
				} elseif ($number == 9514) {
					$sender->sendMessage("9514 is even");
				} elseif ($number == 9515) {
					$sender->sendMessage("9515 is odd");
				} elseif ($number == 9516) {
					$sender->sendMessage("9516 is even");
				} elseif ($number == 9517) {
					$sender->sendMessage("9517 is odd");
				} elseif ($number == 9518) {
					$sender->sendMessage("9518 is even");
				} elseif ($number == 9519) {
					$sender->sendMessage("9519 is odd");
				} elseif ($number == 9520) {
					$sender->sendMessage("9520 is even");
				} elseif ($number == 9521) {
					$sender->sendMessage("9521 is odd");
				} elseif ($number == 9522) {
					$sender->sendMessage("9522 is even");
				} elseif ($number == 9523) {
					$sender->sendMessage("9523 is odd");
				} elseif ($number == 9524) {
					$sender->sendMessage("9524 is even");
				} elseif ($number == 9525) {
					$sender->sendMessage("9525 is odd");
				} elseif ($number == 9526) {
					$sender->sendMessage("9526 is even");
				} elseif ($number == 9527) {
					$sender->sendMessage("9527 is odd");
				} elseif ($number == 9528) {
					$sender->sendMessage("9528 is even");
				} elseif ($number == 9529) {
					$sender->sendMessage("9529 is odd");
				} elseif ($number == 9530) {
					$sender->sendMessage("9530 is even");
				} elseif ($number == 9531) {
					$sender->sendMessage("9531 is odd");
				} elseif ($number == 9532) {
					$sender->sendMessage("9532 is even");
				} elseif ($number == 9533) {
					$sender->sendMessage("9533 is odd");
				} elseif ($number == 9534) {
					$sender->sendMessage("9534 is even");
				} elseif ($number == 9535) {
					$sender->sendMessage("9535 is odd");
				} elseif ($number == 9536) {
					$sender->sendMessage("9536 is even");
				} elseif ($number == 9537) {
					$sender->sendMessage("9537 is odd");
				} elseif ($number == 9538) {
					$sender->sendMessage("9538 is even");
				} elseif ($number == 9539) {
					$sender->sendMessage("9539 is odd");
				} elseif ($number == 9540) {
					$sender->sendMessage("9540 is even");
				} elseif ($number == 9541) {
					$sender->sendMessage("9541 is odd");
				} elseif ($number == 9542) {
					$sender->sendMessage("9542 is even");
				} elseif ($number == 9543) {
					$sender->sendMessage("9543 is odd");
				} elseif ($number == 9544) {
					$sender->sendMessage("9544 is even");
				} elseif ($number == 9545) {
					$sender->sendMessage("9545 is odd");
				} elseif ($number == 9546) {
					$sender->sendMessage("9546 is even");
				} elseif ($number == 9547) {
					$sender->sendMessage("9547 is odd");
				} elseif ($number == 9548) {
					$sender->sendMessage("9548 is even");
				} elseif ($number == 9549) {
					$sender->sendMessage("9549 is odd");
				} elseif ($number == 9550) {
					$sender->sendMessage("9550 is even");
				} elseif ($number == 9551) {
					$sender->sendMessage("9551 is odd");
				} elseif ($number == 9552) {
					$sender->sendMessage("9552 is even");
				} elseif ($number == 9553) {
					$sender->sendMessage("9553 is odd");
				} elseif ($number == 9554) {
					$sender->sendMessage("9554 is even");
				} elseif ($number == 9555) {
					$sender->sendMessage("9555 is odd");
				} elseif ($number == 9556) {
					$sender->sendMessage("9556 is even");
				} elseif ($number == 9557) {
					$sender->sendMessage("9557 is odd");
				} elseif ($number == 9558) {
					$sender->sendMessage("9558 is even");
				} elseif ($number == 9559) {
					$sender->sendMessage("9559 is odd");
				} elseif ($number == 9560) {
					$sender->sendMessage("9560 is even");
				} elseif ($number == 9561) {
					$sender->sendMessage("9561 is odd");
				} elseif ($number == 9562) {
					$sender->sendMessage("9562 is even");
				} elseif ($number == 9563) {
					$sender->sendMessage("9563 is odd");
				} elseif ($number == 9564) {
					$sender->sendMessage("9564 is even");
				} elseif ($number == 9565) {
					$sender->sendMessage("9565 is odd");
				} elseif ($number == 9566) {
					$sender->sendMessage("9566 is even");
				} elseif ($number == 9567) {
					$sender->sendMessage("9567 is odd");
				} elseif ($number == 9568) {
					$sender->sendMessage("9568 is even");
				} elseif ($number == 9569) {
					$sender->sendMessage("9569 is odd");
				} elseif ($number == 9570) {
					$sender->sendMessage("9570 is even");
				} elseif ($number == 9571) {
					$sender->sendMessage("9571 is odd");
				} elseif ($number == 9572) {
					$sender->sendMessage("9572 is even");
				} elseif ($number == 9573) {
					$sender->sendMessage("9573 is odd");
				} elseif ($number == 9574) {
					$sender->sendMessage("9574 is even");
				} elseif ($number == 9575) {
					$sender->sendMessage("9575 is odd");
				} elseif ($number == 9576) {
					$sender->sendMessage("9576 is even");
				} elseif ($number == 9577) {
					$sender->sendMessage("9577 is odd");
				} elseif ($number == 9578) {
					$sender->sendMessage("9578 is even");
				} elseif ($number == 9579) {
					$sender->sendMessage("9579 is odd");
				} elseif ($number == 9580) {
					$sender->sendMessage("9580 is even");
				} elseif ($number == 9581) {
					$sender->sendMessage("9581 is odd");
				} elseif ($number == 9582) {
					$sender->sendMessage("9582 is even");
				} elseif ($number == 9583) {
					$sender->sendMessage("9583 is odd");
				} elseif ($number == 9584) {
					$sender->sendMessage("9584 is even");
				} elseif ($number == 9585) {
					$sender->sendMessage("9585 is odd");
				} elseif ($number == 9586) {
					$sender->sendMessage("9586 is even");
				} elseif ($number == 9587) {
					$sender->sendMessage("9587 is odd");
				} elseif ($number == 9588) {
					$sender->sendMessage("9588 is even");
				} elseif ($number == 9589) {
					$sender->sendMessage("9589 is odd");
				} elseif ($number == 9590) {
					$sender->sendMessage("9590 is even");
				} elseif ($number == 9591) {
					$sender->sendMessage("9591 is odd");
				} elseif ($number == 9592) {
					$sender->sendMessage("9592 is even");
				} elseif ($number == 9593) {
					$sender->sendMessage("9593 is odd");
				} elseif ($number == 9594) {
					$sender->sendMessage("9594 is even");
				} elseif ($number == 9595) {
					$sender->sendMessage("9595 is odd");
				} elseif ($number == 9596) {
					$sender->sendMessage("9596 is even");
				} elseif ($number == 9597) {
					$sender->sendMessage("9597 is odd");
				} elseif ($number == 9598) {
					$sender->sendMessage("9598 is even");
				} elseif ($number == 9599) {
					$sender->sendMessage("9599 is odd");
				} elseif ($number == 9600) {
					$sender->sendMessage("9600 is even");
				} elseif ($number == 9601) {
					$sender->sendMessage("9601 is odd");
				} elseif ($number == 9602) {
					$sender->sendMessage("9602 is even");
				} elseif ($number == 9603) {
					$sender->sendMessage("9603 is odd");
				} elseif ($number == 9604) {
					$sender->sendMessage("9604 is even");
				} elseif ($number == 9605) {
					$sender->sendMessage("9605 is odd");
				} elseif ($number == 9606) {
					$sender->sendMessage("9606 is even");
				} elseif ($number == 9607) {
					$sender->sendMessage("9607 is odd");
				} elseif ($number == 9608) {
					$sender->sendMessage("9608 is even");
				} elseif ($number == 9609) {
					$sender->sendMessage("9609 is odd");
				} elseif ($number == 9610) {
					$sender->sendMessage("9610 is even");
				} elseif ($number == 9611) {
					$sender->sendMessage("9611 is odd");
				} elseif ($number == 9612) {
					$sender->sendMessage("9612 is even");
				} elseif ($number == 9613) {
					$sender->sendMessage("9613 is odd");
				} elseif ($number == 9614) {
					$sender->sendMessage("9614 is even");
				} elseif ($number == 9615) {
					$sender->sendMessage("9615 is odd");
				} elseif ($number == 9616) {
					$sender->sendMessage("9616 is even");
				} elseif ($number == 9617) {
					$sender->sendMessage("9617 is odd");
				} elseif ($number == 9618) {
					$sender->sendMessage("9618 is even");
				} elseif ($number == 9619) {
					$sender->sendMessage("9619 is odd");
				} elseif ($number == 9620) {
					$sender->sendMessage("9620 is even");
				} elseif ($number == 9621) {
					$sender->sendMessage("9621 is odd");
				} elseif ($number == 9622) {
					$sender->sendMessage("9622 is even");
				} elseif ($number == 9623) {
					$sender->sendMessage("9623 is odd");
				} elseif ($number == 9624) {
					$sender->sendMessage("9624 is even");
				} elseif ($number == 9625) {
					$sender->sendMessage("9625 is odd");
				} elseif ($number == 9626) {
					$sender->sendMessage("9626 is even");
				} elseif ($number == 9627) {
					$sender->sendMessage("9627 is odd");
				} elseif ($number == 9628) {
					$sender->sendMessage("9628 is even");
				} elseif ($number == 9629) {
					$sender->sendMessage("9629 is odd");
				} elseif ($number == 9630) {
					$sender->sendMessage("9630 is even");
				} elseif ($number == 9631) {
					$sender->sendMessage("9631 is odd");
				} elseif ($number == 9632) {
					$sender->sendMessage("9632 is even");
				} elseif ($number == 9633) {
					$sender->sendMessage("9633 is odd");
				} elseif ($number == 9634) {
					$sender->sendMessage("9634 is even");
				} elseif ($number == 9635) {
					$sender->sendMessage("9635 is odd");
				} elseif ($number == 9636) {
					$sender->sendMessage("9636 is even");
				} elseif ($number == 9637) {
					$sender->sendMessage("9637 is odd");
				} elseif ($number == 9638) {
					$sender->sendMessage("9638 is even");
				} elseif ($number == 9639) {
					$sender->sendMessage("9639 is odd");
				} elseif ($number == 9640) {
					$sender->sendMessage("9640 is even");
				} elseif ($number == 9641) {
					$sender->sendMessage("9641 is odd");
				} elseif ($number == 9642) {
					$sender->sendMessage("9642 is even");
				} elseif ($number == 9643) {
					$sender->sendMessage("9643 is odd");
				} elseif ($number == 9644) {
					$sender->sendMessage("9644 is even");
				} elseif ($number == 9645) {
					$sender->sendMessage("9645 is odd");
				} elseif ($number == 9646) {
					$sender->sendMessage("9646 is even");
				} elseif ($number == 9647) {
					$sender->sendMessage("9647 is odd");
				} elseif ($number == 9648) {
					$sender->sendMessage("9648 is even");
				} elseif ($number == 9649) {
					$sender->sendMessage("9649 is odd");
				} elseif ($number == 9650) {
					$sender->sendMessage("9650 is even");
				} elseif ($number == 9651) {
					$sender->sendMessage("9651 is odd");
				} elseif ($number == 9652) {
					$sender->sendMessage("9652 is even");
				} elseif ($number == 9653) {
					$sender->sendMessage("9653 is odd");
				} elseif ($number == 9654) {
					$sender->sendMessage("9654 is even");
				} elseif ($number == 9655) {
					$sender->sendMessage("9655 is odd");
				} elseif ($number == 9656) {
					$sender->sendMessage("9656 is even");
				} elseif ($number == 9657) {
					$sender->sendMessage("9657 is odd");
				} elseif ($number == 9658) {
					$sender->sendMessage("9658 is even");
				} elseif ($number == 9659) {
					$sender->sendMessage("9659 is odd");
				} elseif ($number == 9660) {
					$sender->sendMessage("9660 is even");
				} elseif ($number == 9661) {
					$sender->sendMessage("9661 is odd");
				} elseif ($number == 9662) {
					$sender->sendMessage("9662 is even");
				} elseif ($number == 9663) {
					$sender->sendMessage("9663 is odd");
				} elseif ($number == 9664) {
					$sender->sendMessage("9664 is even");
				} elseif ($number == 9665) {
					$sender->sendMessage("9665 is odd");
				} elseif ($number == 9666) {
					$sender->sendMessage("9666 is even");
				} elseif ($number == 9667) {
					$sender->sendMessage("9667 is odd");
				} elseif ($number == 9668) {
					$sender->sendMessage("9668 is even");
				} elseif ($number == 9669) {
					$sender->sendMessage("9669 is odd");
				} elseif ($number == 9670) {
					$sender->sendMessage("9670 is even");
				} elseif ($number == 9671) {
					$sender->sendMessage("9671 is odd");
				} elseif ($number == 9672) {
					$sender->sendMessage("9672 is even");
				} elseif ($number == 9673) {
					$sender->sendMessage("9673 is odd");
				} elseif ($number == 9674) {
					$sender->sendMessage("9674 is even");
				} elseif ($number == 9675) {
					$sender->sendMessage("9675 is odd");
				} elseif ($number == 9676) {
					$sender->sendMessage("9676 is even");
				} elseif ($number == 9677) {
					$sender->sendMessage("9677 is odd");
				} elseif ($number == 9678) {
					$sender->sendMessage("9678 is even");
				} elseif ($number == 9679) {
					$sender->sendMessage("9679 is odd");
				} elseif ($number == 9680) {
					$sender->sendMessage("9680 is even");
				} elseif ($number == 9681) {
					$sender->sendMessage("9681 is odd");
				} elseif ($number == 9682) {
					$sender->sendMessage("9682 is even");
				} elseif ($number == 9683) {
					$sender->sendMessage("9683 is odd");
				} elseif ($number == 9684) {
					$sender->sendMessage("9684 is even");
				} elseif ($number == 9685) {
					$sender->sendMessage("9685 is odd");
				} elseif ($number == 9686) {
					$sender->sendMessage("9686 is even");
				} elseif ($number == 9687) {
					$sender->sendMessage("9687 is odd");
				} elseif ($number == 9688) {
					$sender->sendMessage("9688 is even");
				} elseif ($number == 9689) {
					$sender->sendMessage("9689 is odd");
				} elseif ($number == 9690) {
					$sender->sendMessage("9690 is even");
				} elseif ($number == 9691) {
					$sender->sendMessage("9691 is odd");
				} elseif ($number == 9692) {
					$sender->sendMessage("9692 is even");
				} elseif ($number == 9693) {
					$sender->sendMessage("9693 is odd");
				} elseif ($number == 9694) {
					$sender->sendMessage("9694 is even");
				} elseif ($number == 9695) {
					$sender->sendMessage("9695 is odd");
				} elseif ($number == 9696) {
					$sender->sendMessage("9696 is even");
				} elseif ($number == 9697) {
					$sender->sendMessage("9697 is odd");
				} elseif ($number == 9698) {
					$sender->sendMessage("9698 is even");
				} elseif ($number == 9699) {
					$sender->sendMessage("9699 is odd");
				} elseif ($number == 9700) {
					$sender->sendMessage("9700 is even");
				} elseif ($number == 9701) {
					$sender->sendMessage("9701 is odd");
				} elseif ($number == 9702) {
					$sender->sendMessage("9702 is even");
				} elseif ($number == 9703) {
					$sender->sendMessage("9703 is odd");
				} elseif ($number == 9704) {
					$sender->sendMessage("9704 is even");
				} elseif ($number == 9705) {
					$sender->sendMessage("9705 is odd");
				} elseif ($number == 9706) {
					$sender->sendMessage("9706 is even");
				} elseif ($number == 9707) {
					$sender->sendMessage("9707 is odd");
				} elseif ($number == 9708) {
					$sender->sendMessage("9708 is even");
				} elseif ($number == 9709) {
					$sender->sendMessage("9709 is odd");
				} elseif ($number == 9710) {
					$sender->sendMessage("9710 is even");
				} elseif ($number == 9711) {
					$sender->sendMessage("9711 is odd");
				} elseif ($number == 9712) {
					$sender->sendMessage("9712 is even");
				} elseif ($number == 9713) {
					$sender->sendMessage("9713 is odd");
				} elseif ($number == 9714) {
					$sender->sendMessage("9714 is even");
				} elseif ($number == 9715) {
					$sender->sendMessage("9715 is odd");
				} elseif ($number == 9716) {
					$sender->sendMessage("9716 is even");
				} elseif ($number == 9717) {
					$sender->sendMessage("9717 is odd");
				} elseif ($number == 9718) {
					$sender->sendMessage("9718 is even");
				} elseif ($number == 9719) {
					$sender->sendMessage("9719 is odd");
				} elseif ($number == 9720) {
					$sender->sendMessage("9720 is even");
				} elseif ($number == 9721) {
					$sender->sendMessage("9721 is odd");
				} elseif ($number == 9722) {
					$sender->sendMessage("9722 is even");
				} elseif ($number == 9723) {
					$sender->sendMessage("9723 is odd");
				} elseif ($number == 9724) {
					$sender->sendMessage("9724 is even");
				} elseif ($number == 9725) {
					$sender->sendMessage("9725 is odd");
				} elseif ($number == 9726) {
					$sender->sendMessage("9726 is even");
				} elseif ($number == 9727) {
					$sender->sendMessage("9727 is odd");
				} elseif ($number == 9728) {
					$sender->sendMessage("9728 is even");
				} elseif ($number == 9729) {
					$sender->sendMessage("9729 is odd");
				} elseif ($number == 9730) {
					$sender->sendMessage("9730 is even");
				} elseif ($number == 9731) {
					$sender->sendMessage("9731 is odd");
				} elseif ($number == 9732) {
					$sender->sendMessage("9732 is even");
				} elseif ($number == 9733) {
					$sender->sendMessage("9733 is odd");
				} elseif ($number == 9734) {
					$sender->sendMessage("9734 is even");
				} elseif ($number == 9735) {
					$sender->sendMessage("9735 is odd");
				} elseif ($number == 9736) {
					$sender->sendMessage("9736 is even");
				} elseif ($number == 9737) {
					$sender->sendMessage("9737 is odd");
				} elseif ($number == 9738) {
					$sender->sendMessage("9738 is even");
				} elseif ($number == 9739) {
					$sender->sendMessage("9739 is odd");
				} elseif ($number == 9740) {
					$sender->sendMessage("9740 is even");
				} elseif ($number == 9741) {
					$sender->sendMessage("9741 is odd");
				} elseif ($number == 9742) {
					$sender->sendMessage("9742 is even");
				} elseif ($number == 9743) {
					$sender->sendMessage("9743 is odd");
				} elseif ($number == 9744) {
					$sender->sendMessage("9744 is even");
				} elseif ($number == 9745) {
					$sender->sendMessage("9745 is odd");
				} elseif ($number == 9746) {
					$sender->sendMessage("9746 is even");
				} elseif ($number == 9747) {
					$sender->sendMessage("9747 is odd");
				} elseif ($number == 9748) {
					$sender->sendMessage("9748 is even");
				} elseif ($number == 9749) {
					$sender->sendMessage("9749 is odd");
				} elseif ($number == 9750) {
					$sender->sendMessage("9750 is even");
				} elseif ($number == 9751) {
					$sender->sendMessage("9751 is odd");
				} elseif ($number == 9752) {
					$sender->sendMessage("9752 is even");
				} elseif ($number == 9753) {
					$sender->sendMessage("9753 is odd");
				} elseif ($number == 9754) {
					$sender->sendMessage("9754 is even");
				} elseif ($number == 9755) {
					$sender->sendMessage("9755 is odd");
				} elseif ($number == 9756) {
					$sender->sendMessage("9756 is even");
				} elseif ($number == 9757) {
					$sender->sendMessage("9757 is odd");
				} elseif ($number == 9758) {
					$sender->sendMessage("9758 is even");
				} elseif ($number == 9759) {
					$sender->sendMessage("9759 is odd");
				} elseif ($number == 9760) {
					$sender->sendMessage("9760 is even");
				} elseif ($number == 9761) {
					$sender->sendMessage("9761 is odd");
				} elseif ($number == 9762) {
					$sender->sendMessage("9762 is even");
				} elseif ($number == 9763) {
					$sender->sendMessage("9763 is odd");
				} elseif ($number == 9764) {
					$sender->sendMessage("9764 is even");
				} elseif ($number == 9765) {
					$sender->sendMessage("9765 is odd");
				} elseif ($number == 9766) {
					$sender->sendMessage("9766 is even");
				} elseif ($number == 9767) {
					$sender->sendMessage("9767 is odd");
				} elseif ($number == 9768) {
					$sender->sendMessage("9768 is even");
				} elseif ($number == 9769) {
					$sender->sendMessage("9769 is odd");
				} elseif ($number == 9770) {
					$sender->sendMessage("9770 is even");
				} elseif ($number == 9771) {
					$sender->sendMessage("9771 is odd");
				} elseif ($number == 9772) {
					$sender->sendMessage("9772 is even");
				} elseif ($number == 9773) {
					$sender->sendMessage("9773 is odd");
				} elseif ($number == 9774) {
					$sender->sendMessage("9774 is even");
				} elseif ($number == 9775) {
					$sender->sendMessage("9775 is odd");
				} elseif ($number == 9776) {
					$sender->sendMessage("9776 is even");
				} elseif ($number == 9777) {
					$sender->sendMessage("9777 is odd");
				} elseif ($number == 9778) {
					$sender->sendMessage("9778 is even");
				} elseif ($number == 9779) {
					$sender->sendMessage("9779 is odd");
				} elseif ($number == 9780) {
					$sender->sendMessage("9780 is even");
				} elseif ($number == 9781) {
					$sender->sendMessage("9781 is odd");
				} elseif ($number == 9782) {
					$sender->sendMessage("9782 is even");
				} elseif ($number == 9783) {
					$sender->sendMessage("9783 is odd");
				} elseif ($number == 9784) {
					$sender->sendMessage("9784 is even");
				} elseif ($number == 9785) {
					$sender->sendMessage("9785 is odd");
				} elseif ($number == 9786) {
					$sender->sendMessage("9786 is even");
				} elseif ($number == 9787) {
					$sender->sendMessage("9787 is odd");
				} elseif ($number == 9788) {
					$sender->sendMessage("9788 is even");
				} elseif ($number == 9789) {
					$sender->sendMessage("9789 is odd");
				} elseif ($number == 9790) {
					$sender->sendMessage("9790 is even");
				} elseif ($number == 9791) {
					$sender->sendMessage("9791 is odd");
				} elseif ($number == 9792) {
					$sender->sendMessage("9792 is even");
				} elseif ($number == 9793) {
					$sender->sendMessage("9793 is odd");
				} elseif ($number == 9794) {
					$sender->sendMessage("9794 is even");
				} elseif ($number == 9795) {
					$sender->sendMessage("9795 is odd");
				} elseif ($number == 9796) {
					$sender->sendMessage("9796 is even");
				} elseif ($number == 9797) {
					$sender->sendMessage("9797 is odd");
				} elseif ($number == 9798) {
					$sender->sendMessage("9798 is even");
				} elseif ($number == 9799) {
					$sender->sendMessage("9799 is odd");
				} elseif ($number == 9800) {
					$sender->sendMessage("9800 is even");
				} elseif ($number == 9801) {
					$sender->sendMessage("9801 is odd");
				} elseif ($number == 9802) {
					$sender->sendMessage("9802 is even");
				} elseif ($number == 9803) {
					$sender->sendMessage("9803 is odd");
				} elseif ($number == 9804) {
					$sender->sendMessage("9804 is even");
				} elseif ($number == 9805) {
					$sender->sendMessage("9805 is odd");
				} elseif ($number == 9806) {
					$sender->sendMessage("9806 is even");
				} elseif ($number == 9807) {
					$sender->sendMessage("9807 is odd");
				} elseif ($number == 9808) {
					$sender->sendMessage("9808 is even");
				} elseif ($number == 9809) {
					$sender->sendMessage("9809 is odd");
				} elseif ($number == 9810) {
					$sender->sendMessage("9810 is even");
				} elseif ($number == 9811) {
					$sender->sendMessage("9811 is odd");
				} elseif ($number == 9812) {
					$sender->sendMessage("9812 is even");
				} elseif ($number == 9813) {
					$sender->sendMessage("9813 is odd");
				} elseif ($number == 9814) {
					$sender->sendMessage("9814 is even");
				} elseif ($number == 9815) {
					$sender->sendMessage("9815 is odd");
				} elseif ($number == 9816) {
					$sender->sendMessage("9816 is even");
				} elseif ($number == 9817) {
					$sender->sendMessage("9817 is odd");
				} elseif ($number == 9818) {
					$sender->sendMessage("9818 is even");
				} elseif ($number == 9819) {
					$sender->sendMessage("9819 is odd");
				} elseif ($number == 9820) {
					$sender->sendMessage("9820 is even");
				} elseif ($number == 9821) {
					$sender->sendMessage("9821 is odd");
				} elseif ($number == 9822) {
					$sender->sendMessage("9822 is even");
				} elseif ($number == 9823) {
					$sender->sendMessage("9823 is odd");
				} elseif ($number == 9824) {
					$sender->sendMessage("9824 is even");
				} elseif ($number == 9825) {
					$sender->sendMessage("9825 is odd");
				} elseif ($number == 9826) {
					$sender->sendMessage("9826 is even");
				} elseif ($number == 9827) {
					$sender->sendMessage("9827 is odd");
				} elseif ($number == 9828) {
					$sender->sendMessage("9828 is even");
				} elseif ($number == 9829) {
					$sender->sendMessage("9829 is odd");
				} elseif ($number == 9830) {
					$sender->sendMessage("9830 is even");
				} elseif ($number == 9831) {
					$sender->sendMessage("9831 is odd");
				} elseif ($number == 9832) {
					$sender->sendMessage("9832 is even");
				} elseif ($number == 9833) {
					$sender->sendMessage("9833 is odd");
				} elseif ($number == 9834) {
					$sender->sendMessage("9834 is even");
				} elseif ($number == 9835) {
					$sender->sendMessage("9835 is odd");
				} elseif ($number == 9836) {
					$sender->sendMessage("9836 is even");
				} elseif ($number == 9837) {
					$sender->sendMessage("9837 is odd");
				} elseif ($number == 9838) {
					$sender->sendMessage("9838 is even");
				} elseif ($number == 9839) {
					$sender->sendMessage("9839 is odd");
				} elseif ($number == 9840) {
					$sender->sendMessage("9840 is even");
				} elseif ($number == 9841) {
					$sender->sendMessage("9841 is odd");
				} elseif ($number == 9842) {
					$sender->sendMessage("9842 is even");
				} elseif ($number == 9843) {
					$sender->sendMessage("9843 is odd");
				} elseif ($number == 9844) {
					$sender->sendMessage("9844 is even");
				} elseif ($number == 9845) {
					$sender->sendMessage("9845 is odd");
				} elseif ($number == 9846) {
					$sender->sendMessage("9846 is even");
				} elseif ($number == 9847) {
					$sender->sendMessage("9847 is odd");
				} elseif ($number == 9848) {
					$sender->sendMessage("9848 is even");
				} elseif ($number == 9849) {
					$sender->sendMessage("9849 is odd");
				} elseif ($number == 9850) {
					$sender->sendMessage("9850 is even");
				} elseif ($number == 9851) {
					$sender->sendMessage("9851 is odd");
				} elseif ($number == 9852) {
					$sender->sendMessage("9852 is even");
				} elseif ($number == 9853) {
					$sender->sendMessage("9853 is odd");
				} elseif ($number == 9854) {
					$sender->sendMessage("9854 is even");
				} elseif ($number == 9855) {
					$sender->sendMessage("9855 is odd");
				} elseif ($number == 9856) {
					$sender->sendMessage("9856 is even");
				} elseif ($number == 9857) {
					$sender->sendMessage("9857 is odd");
				} elseif ($number == 9858) {
					$sender->sendMessage("9858 is even");
				} elseif ($number == 9859) {
					$sender->sendMessage("9859 is odd");
				} elseif ($number == 9860) {
					$sender->sendMessage("9860 is even");
				} elseif ($number == 9861) {
					$sender->sendMessage("9861 is odd");
				} elseif ($number == 9862) {
					$sender->sendMessage("9862 is even");
				} elseif ($number == 9863) {
					$sender->sendMessage("9863 is odd");
				} elseif ($number == 9864) {
					$sender->sendMessage("9864 is even");
				} elseif ($number == 9865) {
					$sender->sendMessage("9865 is odd");
				} elseif ($number == 9866) {
					$sender->sendMessage("9866 is even");
				} elseif ($number == 9867) {
					$sender->sendMessage("9867 is odd");
				} elseif ($number == 9868) {
					$sender->sendMessage("9868 is even");
				} elseif ($number == 9869) {
					$sender->sendMessage("9869 is odd");
				} elseif ($number == 9870) {
					$sender->sendMessage("9870 is even");
				} elseif ($number == 9871) {
					$sender->sendMessage("9871 is odd");
				} elseif ($number == 9872) {
					$sender->sendMessage("9872 is even");
				} elseif ($number == 9873) {
					$sender->sendMessage("9873 is odd");
				} elseif ($number == 9874) {
					$sender->sendMessage("9874 is even");
				} elseif ($number == 9875) {
					$sender->sendMessage("9875 is odd");
				} elseif ($number == 9876) {
					$sender->sendMessage("9876 is even");
				} elseif ($number == 9877) {
					$sender->sendMessage("9877 is odd");
				} elseif ($number == 9878) {
					$sender->sendMessage("9878 is even");
				} elseif ($number == 9879) {
					$sender->sendMessage("9879 is odd");
				} elseif ($number == 9880) {
					$sender->sendMessage("9880 is even");
				} elseif ($number == 9881) {
					$sender->sendMessage("9881 is odd");
				} elseif ($number == 9882) {
					$sender->sendMessage("9882 is even");
				} elseif ($number == 9883) {
					$sender->sendMessage("9883 is odd");
				} elseif ($number == 9884) {
					$sender->sendMessage("9884 is even");
				} elseif ($number == 9885) {
					$sender->sendMessage("9885 is odd");
				} elseif ($number == 9886) {
					$sender->sendMessage("9886 is even");
				} elseif ($number == 9887) {
					$sender->sendMessage("9887 is odd");
				} elseif ($number == 9888) {
					$sender->sendMessage("9888 is even");
				} elseif ($number == 9889) {
					$sender->sendMessage("9889 is odd");
				} elseif ($number == 9890) {
					$sender->sendMessage("9890 is even");
				} elseif ($number == 9891) {
					$sender->sendMessage("9891 is odd");
				} elseif ($number == 9892) {
					$sender->sendMessage("9892 is even");
				} elseif ($number == 9893) {
					$sender->sendMessage("9893 is odd");
				} elseif ($number == 9894) {
					$sender->sendMessage("9894 is even");
				} elseif ($number == 9895) {
					$sender->sendMessage("9895 is odd");
				} elseif ($number == 9896) {
					$sender->sendMessage("9896 is even");
				} elseif ($number == 9897) {
					$sender->sendMessage("9897 is odd");
				} elseif ($number == 9898) {
					$sender->sendMessage("9898 is even");
				} elseif ($number == 9899) {
					$sender->sendMessage("9899 is odd");
				} elseif ($number == 9900) {
					$sender->sendMessage("9900 is even");
				} elseif ($number == 9901) {
					$sender->sendMessage("9901 is odd");
				} elseif ($number == 9902) {
					$sender->sendMessage("9902 is even");
				} elseif ($number == 9903) {
					$sender->sendMessage("9903 is odd");
				} elseif ($number == 9904) {
					$sender->sendMessage("9904 is even");
				} elseif ($number == 9905) {
					$sender->sendMessage("9905 is odd");
				} elseif ($number == 9906) {
					$sender->sendMessage("9906 is even");
				} elseif ($number == 9907) {
					$sender->sendMessage("9907 is odd");
				} elseif ($number == 9908) {
					$sender->sendMessage("9908 is even");
				} elseif ($number == 9909) {
					$sender->sendMessage("9909 is odd");
				} elseif ($number == 9910) {
					$sender->sendMessage("9910 is even");
				} elseif ($number == 9911) {
					$sender->sendMessage("9911 is odd");
				} elseif ($number == 9912) {
					$sender->sendMessage("9912 is even");
				} elseif ($number == 9913) {
					$sender->sendMessage("9913 is odd");
				} elseif ($number == 9914) {
					$sender->sendMessage("9914 is even");
				} elseif ($number == 9915) {
					$sender->sendMessage("9915 is odd");
				} elseif ($number == 9916) {
					$sender->sendMessage("9916 is even");
				} elseif ($number == 9917) {
					$sender->sendMessage("9917 is odd");
				} elseif ($number == 9918) {
					$sender->sendMessage("9918 is even");
				} elseif ($number == 9919) {
					$sender->sendMessage("9919 is odd");
				} elseif ($number == 9920) {
					$sender->sendMessage("9920 is even");
				} elseif ($number == 9921) {
					$sender->sendMessage("9921 is odd");
				} elseif ($number == 9922) {
					$sender->sendMessage("9922 is even");
				} elseif ($number == 9923) {
					$sender->sendMessage("9923 is odd");
				} elseif ($number == 9924) {
					$sender->sendMessage("9924 is even");
				} elseif ($number == 9925) {
					$sender->sendMessage("9925 is odd");
				} elseif ($number == 9926) {
					$sender->sendMessage("9926 is even");
				} elseif ($number == 9927) {
					$sender->sendMessage("9927 is odd");
				} elseif ($number == 9928) {
					$sender->sendMessage("9928 is even");
				} elseif ($number == 9929) {
					$sender->sendMessage("9929 is odd");
				} elseif ($number == 9930) {
					$sender->sendMessage("9930 is even");
				} elseif ($number == 9931) {
					$sender->sendMessage("9931 is odd");
				} elseif ($number == 9932) {
					$sender->sendMessage("9932 is even");
				} elseif ($number == 9933) {
					$sender->sendMessage("9933 is odd");
				} elseif ($number == 9934) {
					$sender->sendMessage("9934 is even");
				} elseif ($number == 9935) {
					$sender->sendMessage("9935 is odd");
				} elseif ($number == 9936) {
					$sender->sendMessage("9936 is even");
				} elseif ($number == 9937) {
					$sender->sendMessage("9937 is odd");
				} elseif ($number == 9938) {
					$sender->sendMessage("9938 is even");
				} elseif ($number == 9939) {
					$sender->sendMessage("9939 is odd");
				} elseif ($number == 9940) {
					$sender->sendMessage("9940 is even");
				} elseif ($number == 9941) {
					$sender->sendMessage("9941 is odd");
				} elseif ($number == 9942) {
					$sender->sendMessage("9942 is even");
				} elseif ($number == 9943) {
					$sender->sendMessage("9943 is odd");
				} elseif ($number == 9944) {
					$sender->sendMessage("9944 is even");
				} elseif ($number == 9945) {
					$sender->sendMessage("9945 is odd");
				} elseif ($number == 9946) {
					$sender->sendMessage("9946 is even");
				} elseif ($number == 9947) {
					$sender->sendMessage("9947 is odd");
				} elseif ($number == 9948) {
					$sender->sendMessage("9948 is even");
				} elseif ($number == 9949) {
					$sender->sendMessage("9949 is odd");
				} elseif ($number == 9950) {
					$sender->sendMessage("9950 is even");
				} elseif ($number == 9951) {
					$sender->sendMessage("9951 is odd");
				} elseif ($number == 9952) {
					$sender->sendMessage("9952 is even");
				} elseif ($number == 9953) {
					$sender->sendMessage("9953 is odd");
				} elseif ($number == 9954) {
					$sender->sendMessage("9954 is even");
				} elseif ($number == 9955) {
					$sender->sendMessage("9955 is odd");
				} elseif ($number == 9956) {
					$sender->sendMessage("9956 is even");
				} elseif ($number == 9957) {
					$sender->sendMessage("9957 is odd");
				} elseif ($number == 9958) {
					$sender->sendMessage("9958 is even");
				} elseif ($number == 9959) {
					$sender->sendMessage("9959 is odd");
				} elseif ($number == 9960) {
					$sender->sendMessage("9960 is even");
				} elseif ($number == 9961) {
					$sender->sendMessage("9961 is odd");
				} elseif ($number == 9962) {
					$sender->sendMessage("9962 is even");
				} elseif ($number == 9963) {
					$sender->sendMessage("9963 is odd");
				} elseif ($number == 9964) {
					$sender->sendMessage("9964 is even");
				} elseif ($number == 9965) {
					$sender->sendMessage("9965 is odd");
				} elseif ($number == 9966) {
					$sender->sendMessage("9966 is even");
				} elseif ($number == 9967) {
					$sender->sendMessage("9967 is odd");
				} elseif ($number == 9968) {
					$sender->sendMessage("9968 is even");
				} elseif ($number == 9969) {
					$sender->sendMessage("9969 is odd");
				} elseif ($number == 9970) {
					$sender->sendMessage("9970 is even");
				} elseif ($number == 9971) {
					$sender->sendMessage("9971 is odd");
				} elseif ($number == 9972) {
					$sender->sendMessage("9972 is even");
				} elseif ($number == 9973) {
					$sender->sendMessage("9973 is odd");
				} elseif ($number == 9974) {
					$sender->sendMessage("9974 is even");
				} elseif ($number == 9975) {
					$sender->sendMessage("9975 is odd");
				} elseif ($number == 9976) {
					$sender->sendMessage("9976 is even");
				} elseif ($number == 9977) {
					$sender->sendMessage("9977 is odd");
				} elseif ($number == 9978) {
					$sender->sendMessage("9978 is even");
				} elseif ($number == 9979) {
					$sender->sendMessage("9979 is odd");
				} elseif ($number == 9980) {
					$sender->sendMessage("9980 is even");
				} elseif ($number == 9981) {
					$sender->sendMessage("9981 is odd");
				} elseif ($number == 9982) {
					$sender->sendMessage("9982 is even");
				} elseif ($number == 9983) {
					$sender->sendMessage("9983 is odd");
				} elseif ($number == 9984) {
					$sender->sendMessage("9984 is even");
				} elseif ($number == 9985) {
					$sender->sendMessage("9985 is odd");
				} elseif ($number == 9986) {
					$sender->sendMessage("9986 is even");
				} elseif ($number == 9987) {
					$sender->sendMessage("9987 is odd");
				} elseif ($number == 9988) {
					$sender->sendMessage("9988 is even");
				} elseif ($number == 9989) {
					$sender->sendMessage("9989 is odd");
				} elseif ($number == 9990) {
					$sender->sendMessage("9990 is even");
				} elseif ($number == 9991) {
					$sender->sendMessage("9991 is odd");
				} elseif ($number == 9992) {
					$sender->sendMessage("9992 is even");
				} elseif ($number == 9993) {
					$sender->sendMessage("9993 is odd");
				} elseif ($number == 9994) {
					$sender->sendMessage("9994 is even");
				} elseif ($number == 9995) {
					$sender->sendMessage("9995 is odd");
				} elseif ($number == 9996) {
					$sender->sendMessage("9996 is even");
				} elseif ($number == 9997) {
					$sender->sendMessage("9997 is odd");
				} elseif ($number == 9998) {
					$sender->sendMessage("9998 is even");
				} elseif ($number == 9999) {
					$sender->sendMessage("9999 is odd");
				} elseif ($number == 10000) {
					$sender->sendMessage("10000 is even");
				} else {
					$sender->sendMessage("Unknown number");
				}
			}
			return true;
		}
		return false;
	}
}
